FROM php:8.1.9-apache-bullseye

RUN apt-get update -y && \
    apt-get upgrade -y && \
    apt-get install -y curl git zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

WORKDIR /var/www/html

COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf

RUN composer --working-dir /var/www/html create-project laravel/laravel .

RUN chown -R www-data /var/www/html/storage

RUN pecl install openswoole

RUN composer --working-dir /var/www/html require laravel/octane
