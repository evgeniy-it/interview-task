FROM php:7.0-fpm

RUN apt-get update && apt-get install -y \
        wget

RUN wget https://phar.phpunit.de/phpunit.phar
RUN chmod +x phpunit.phar
RUN mv phpunit.phar /usr/local/bin/phpunit


WORKDIR /var/www/web
