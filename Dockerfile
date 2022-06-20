FROM php:8.0-fpm

ARG xdebug_conf_file="/usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini"

# Pasta raíz da aplicação
ARG app_dir="/var/www"

RUN apt-get update \
    && apt-get install -y \
        ca-certificates \
        curl \
        wget \
        git \
        vim \
        nano \
        less \
        openssl \
        iproute2 \
        iputils-ping \
        libzip-dev \
        libpq-dev \
        libgmp-dev \
        libicu-dev \
        libxext-dev \
        postgresql-client \
    && docker-php-ext-configure intl \
    && docker-php-ext-install \
        bcmath \
        gmp \
        intl \
        opcache \
        pcntl \
        pdo \
        pdo_pgsql \
        pgsql \
        mysqli \
        pdo_mysql\
        zip \
    && docker-php-ext-enable \
        bcmath \
        intl \
        opcache \
        pcntl \
        pdo \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && rm -rf /var/lib/apt/lists/* /tmp/*

COPY ./docker-compose/php-fpm/php.ini "$PHP_INI_DIR/php.ini"
COPY ./docker-compose/php-fpm/xdebug.ini ${xdebug_conf_file}

WORKDIR ${app_dir}

EXPOSE 9000 9003

COPY ./app ./app
COPY ./artisan ./artisan
COPY ./bootstrap ./bootstrap
COPY ./composer.json ./
COPY ./composer.lock ./
COPY ./config ./config
COPY ./database ./database
#COPY ./docker-cmd.sh ./docker-cmd.sh
COPY ./phpunit.xml ./phpunit.xml
COPY ./public ./public
COPY ./resources ./resources
COPY ./routes ./routes
COPY ./server.php ./server.php
COPY ./storage ./storage
COPY ./tests ./tests

RUN XDEBUG_MODE=on composer install

# Garante chmod 777 na pasta storage
#RUN chmod -R 777 storage bootstrap/cache
RUN chmod -R 777 storage
RUN chmod -R 777 bootstrap/cache

