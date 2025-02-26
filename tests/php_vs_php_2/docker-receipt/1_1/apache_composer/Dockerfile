FROM php:8.4.3-apache-bookworm

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/bin/ --filename=composer

CMD service apache2 start && while : ; do sleep 1000; done
