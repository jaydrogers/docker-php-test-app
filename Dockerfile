FROM serversideup/php:8.3-fpm-nginx-bookworm

COPY zzz-custom-php.ini /usr/local/etc/php/conf.d/