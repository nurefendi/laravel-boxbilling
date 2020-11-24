FROM php:7.2-fpm-stretch

USER root

RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get update 2>/dev/null | grep packages | cut -d '.' -f 1 && apt-get install -y nodejs libmcrypt-dev curl nano libfreetype6-dev libjpeg62-turbo-dev libpng-dev && apt clean
# RUN pecl install mcrypt-1.0.1 && docker-php-ext-enable mcrypt
RUN docker-php-ext-install -j$(nproc) iconv pdo_mysql gd zip
RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/

RUN curl -sS https://getcomposer.org/installer | \
    php -- --install-dir=/usr/bin/ --filename=composer

WORKDIR /var/www

COPY . /var/www

RUN chown -R www-data:www-data \
        storage/ \
        bootstrap/cache
