FROM php:7.4-apache

RUN usermod -u 1000 www-data \
    && apt-get update && apt-get install -y \
    apt-utils \
    sudo \
    wget \
    unzip \
    cron \
    curl \
    libmcrypt-dev \
    libicu-dev \
    libzip-dev \
    libxml2-dev libxslt1-dev \
    libfreetype6-dev \
    libjpeg62-turbo-dev \
    libpng-dev \
    nano \
    default-mysql-client \
    gnupg2 \
    && docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/ \
    && docker-php-ext-configure hash --with-mhash \
    && docker-php-ext-install -j$(nproc) intl xsl gd zip pdo_mysql opcache soap bcmath json iconv mysqli \
    && pecl install xdebug \
    && curl -o /tmp/composer.phar https://getcomposer.org/download/1.10.19/composer.phar \
    && cp /tmp/composer.phar /bin/composer \
    && ln -s /bin/composer /usr/local/bin/composer \
    && chmod +x /usr/local/bin/composer \
    && mkdir -p /var/www/.composer && chown -Rf www-data:www-data  /var/www/.composer \
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*
COPY ./conf/php/*.ini /usr/local/etc/php/conf.d/
RUN a2enmod rewrite

USER www-data
WORKDIR /var/www/html

