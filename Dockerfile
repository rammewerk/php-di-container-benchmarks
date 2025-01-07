FROM php:8.4.2-fpm-alpine3.21
MAINTAINER Máté Kocsis <kocsismate@woohoolabs.com>

RUN docker-php-ext-install opcache

ADD ./ /code

WORKDIR /code

EXPOSE 9000

CMD php-fpm
