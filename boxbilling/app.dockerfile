FROM php:7.4-fpm

USER root

# RUN curl -sL https://deb.nodesource.com/setup_12.x | bash -
RUN apt-get update 2>/dev/null | grep packages | cut -d '.' -f 1 && apt-get install -y libmcrypt-dev  nano libfreetype6-dev libjpeg62-turbo-dev libpng-dev && apt clean
# RUN pecl install mcrypt-1.0.1 && docker-php-ext-enable mcrypt
RUN docker-php-ext-install -j$(nproc) iconv pdo_mysql gd
# RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ 


WORKDIR /var/www

# COPY . /var/www

# RUN chown -R www-data:www-data \
#         storage/ \
#         bootstrap/cache
