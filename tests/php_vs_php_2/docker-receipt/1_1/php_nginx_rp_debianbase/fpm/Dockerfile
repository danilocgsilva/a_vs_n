FROM debian:bookworm-slim

EXPOSE 9000

RUN apt update
RUN apt -y install lsb-release ca-certificates curl apt-transport-https
RUN curl -sSLo /tmp/debsuryorg-archive-keyring.deb https://packages.sury.org/debsuryorg-archive-keyring.deb
RUN dpkg -i /tmp/debsuryorg-archive-keyring.deb
RUN sh -c 'echo "deb [signed-by=/usr/share/keyrings/deb.sury.org-php.gpg] https://packages.sury.org/php/ $(lsb_release -sc) main" > /etc/apt/sources.list.d/php.list'
RUN apt update
RUN apt install php8.4-fpm -y

COPY /index.php /var/www/html/
COPY /www.conf /etc/php/8.4/fpm/pool.d/www.conf

CMD service php8.4-fpm start && while : ; do sleep 1000; done
