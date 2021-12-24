#!/bin/sh -eux

composer run-script env:init

sleep 5 && http2fcgi --fcgi tcp://localhost:9000 \
                     --http localhost:8080 \
                     --root /code/public &

exec php-fpm