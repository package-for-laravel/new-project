FROM php:7.4.1-fpm-alpine3.11

RUN apk add --no-cache $PHPIZE_DEPS

RUN docker-php-ext-install pdo_mysql

RUN pecl install xdebug-2.9.0 && docker-php-ext-enable xdebug
COPY docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
