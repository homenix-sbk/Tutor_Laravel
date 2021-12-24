#!/bin/sh -eux

composer run-script post-autoload-dump

php artisan config:clear
#php artisan route:cache
rm -f bootstrap/cache/config.php
php artisan config:cache


sleep 5 && http2fcgi --fcgi tcp://localhost:9000 \
                     --http localhost:8080 \
                     --root /code/public &

#sleep 10 && php artisan opcache:compile &

exec php-fpm