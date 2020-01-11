FROM php:7.4.1-fpm-alpine3.11 as base

# Set up all the phpize dependencies
RUN apk add --no-cache $PHPIZE_DEPS

# doesn't come with pdo_mysql by default
RUN docker-php-ext-install pdo_mysql

# install composer from the composer image
COPY --from=composer /usr/bin/composer /usr/bin/composer

FROM base as debug

# Supports xdebug
RUN pecl install xdebug-2.9.0 && docker-php-ext-enable xdebug
COPY docker-php-ext-xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini
