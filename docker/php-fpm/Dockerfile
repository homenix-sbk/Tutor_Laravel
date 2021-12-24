FROM golang:1.13 as HTTP2FCGI_BUILD

# http2fcgi のビルド
RUN apt update -y \
 && go get -v -ldflags '-w -s' github.com/alash3al/http2fcgi/...

FROM php:7.4.15-fpm-alpine3.13 as php_runtime

# Goバイナリが実行できるようにする
# https://stackoverflow.com/questions/34729748/installed-go-binary-not-found-in-path-on-alpine-linux-docker
RUN mkdir /lib64 \
 && ln -s /lib/libc.musl-x86_64.so.1 /lib64/ld-linux-x86-64.so.2

# http2fcgi のインストール
COPY --from=HTTP2FCGI_BUILD /go/bin/http2fcgi /bin/http2fcgi

# Git 及び　node, 7z のインストール
RUN apk add --update --no-cache git nodejs npm nghttp2-dev p7zip

# Composer のインストール
RUN set -eux \
 && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
# PHP 拡張のインストール
RUN set -eux \
 && apk add --update --no-cache autoconf g++ libtool make libzip-dev libpng-dev libjpeg-turbo-dev freetype-dev gnu-libiconv \
 && apk add --no-cache libxrender fontconfig libxext libc6-compat tzdata \
 && cp /usr/share/zoneinfo/Asia/Tokyo /etc/localtime \
 && ln -s /lib/libc.musl-x86_64.so.1 /lib/ld-linux-x86-64.so.2 \
 && pecl install redis \
 && docker-php-ext-configure gd --with-freetype --with-jpeg \
 && docker-php-ext-configure opcache --enable-opcache \
 && docker-php-ext-install opcache bcmath pdo_mysql gd exif zip \
 && docker-php-ext-enable redis \
 && apk del autoconf g++ libtool make tzdata \
 && rm -rf /tmp/*

ENV LD_PRELOAD /usr/lib/preloadable_libiconv.so php

# imagemagickのインストール
# QRコード生成用の[bacon/bacon-qr-code]にて必要
RUN set -eux \
 && apk add --no-cache imagemagick \
 && apk add --no-cache --virtual .phpize-deps imagemagick-dev build-base autoconf libpng-dev libjpeg-turbo-dev libxml2-dev \
 && pecl install imagick \
 && docker-php-ext-enable imagick \
 && apk del .phpize-deps \
 && rm -rf /tmp/*

# 【オプション】 xdebug のインストール
# 必要に応じて PHP_DEBUGGER="xdebug" を与える
ARG PHP_DEBUGGER="false"
RUN set -eux \
 && apk add --update --no-cache autoconf g++ libtool make \
 && if [ "$PHP_DEBUGGER" = "xdebug" ]; then \
      pecl install xdebug; \
      docker-php-ext-enable xdebug; \
    fi \
 && apk del autoconf g++ libtool make \
 && rm -rf /tmp/*

# 【オプション】 pcov のインストール
# 必要に応じて PHP_COVERAGE_DRIVER="pcov" を与える
ARG PHP_COVERAGE_DRIVER="false"
RUN set -eux \
 && apk add --update --no-cache autoconf g++ libtool make \
 && if [ "$PHP_COVERAGE_DRIVER" = "pcov" ]; then \
      pecl install pcov; \
      docker-php-ext-enable pcov; \
      echo "pcov.directory = /code/app" >> $PHP_INI_DIR/conf.d/docker-php-ext-pcov.ini; \
    fi \
 && apk del autoconf g++ libtool make \
 && rm -rf /tmp/*

WORKDIR /code
ENTRYPOINT ["php"]
CMD []

FROM php_runtime as laravel_application_mounted

# アプリケーションコンテナのみで使用する起動スクリプトの設置
# 必要に応じて PHP_INIT_SCRIPT を与える
ARG PHP_INIT_SCRIPT="local"
COPY docker/php-fpm/scripts/$PHP_INIT_SCRIPT/*.sh /bin/
ENTRYPOINT []

RUN chmod +x /bin/init.sh && chown -R www-data:www-data ./
CMD ["/bin/init.sh"]

FROM laravel_application_mounted as laravel_application_bundked

# Composer 依存パッケージ定義のコピー
COPY composer.* /code/

# Composer 依存パッケージをアプリケーションから分離して先にインストール（ビルド時間短縮のため）
RUN composer install --working-dir=/code --no-scripts --no-autoloader --no-dev

# アプリケーションのコードをコピー
COPY . /code

# パスワード復号化をハッシュ化から暗号化に上書きする。vendorディレクトリは.dockerignoreで除外
COPY docker/php-fpm/tmp/EloquentUserProvider.php /code/vendor/laravel/framework/src/Illuminate/Auth/EloquentUserProvider.php

# iniファイルのimageへの埋め込み
COPY docker/php-fpm/conf.d/deploy/custom.ini /usr/local/etc/php/conf.d/custom.ini

# オートロードファイルの生成とストレージディレクトリのパーミッションの変更
RUN set -eux \
 && composer dump-autoload --working-dir=/code --no-scripts \
 && composer run-script env:init \
 && apk update \
 && apk upgrade \
&& chmod -R a=rwX /code/storage

EXPOSE 9000 