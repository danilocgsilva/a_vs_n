FROM debian:bookworm-slim

RUN apt update
RUN apt install nginx -y

COPY /index.php /var/www/html/
# COPY /nginx.conf /etc/nginx/nginx.conf
# COPY /app.vhost /etc/nginx/conf.d/app.vhost
COPY /app.vhost /etc/nginx/sites-available/default

CMD nginx && while : ; do sleep 1000; done