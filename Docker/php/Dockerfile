FROM php:7.4-fpm
RUN apt-get update && apt-get install -y \
        libfreetype6-dev \
        libjpeg62-turbo-dev \
        libmcrypt-dev \
        libicu-dev \
        libonig-dev \
        libxml2-dev \
        libcurl4-openssl-dev \
        libssl-dev \
        libzip-dev \
        vim \
        wget \
        unzip \
        git \
    && pecl install mcrypt-1.0.4 \    
    && docker-php-ext-install -j$(nproc) zip iconv intl xml soap json session tokenizer opcache pdo pdo_mysql mysqli mbstring ctype curl fileinfo ftp \
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-install -j$(nproc) gd \
    && docker-php-ext-enable mcrypt

RUN mkdir /composer-setup && wget https://getcomposer.org/installer -P /composer-setup && php /composer-setup/installer --install-dir=/usr/bin && rm -Rf /composer-setup 