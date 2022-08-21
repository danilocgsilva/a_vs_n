FROM php:8.1.9-apache-bullseye

RUN apt-get update -y && \
    apt-get upgrade -y && \
    apt-get install -y curl && \
    apt-get install -y git

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

COPY ./app /var/www/html

RUN composer install --working-dir=/var/www/html/

