FROM debian:bullseye

RUN apt-get update && apt-get install -y nginx

COPY /nginx.conf /etc/nginx/nginx.conf
COPY /app.vhost /etc/nginx/conf.d/app.vhost

RUN usermod -u 1000 www-data

# CMD while : ; do sleep 1000; done

CMD ["nginx"]

EXPOSE 81
EXPOSE 443