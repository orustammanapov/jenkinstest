FROM php:7.4-fpm

# Install Composer
RUN curl https://getcomposer.org/composer.phar > /usr/local/bin/composer \
    && chmod a+x /usr/local/bin/composer

RUN apt-get update
RUN apt-get install git zip unzip