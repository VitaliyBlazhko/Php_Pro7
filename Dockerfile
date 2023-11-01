FROM php:8.2-fpm

COPY --from=composer/composer:latest-bin /composer /usr/bin/composer

COPY . /var/www/html

WORKDIR /var/www/html

EXPOSE 9000

VOLUME ["/var/www/html"]

