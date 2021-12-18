FROM prooph/php:8.0-fpm

RUN apk add npm nodejs

RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/bin/ --filename=composer

COPY . /var/www
COPY ./nginx/app-www.conf /etc/nginx/conf.d/app-www.conf

RUN chmod -R 777 /var/www/storage/ 

WORKDIR /var/www