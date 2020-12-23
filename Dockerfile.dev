FROM php:7.3-fpm

LABEL version="1.0.0"

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    libzip-dev \
    zip \
    jpegoptim optipng pngquant gifsicle \
    unzip \
    && apt-get clean && rm -rf /var/lib/apt/lists/*

RUN docker-php-ext-install pdo_mysql mbstring zip exif pcntl
RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer


WORKDIR /var/www

COPY composer.json composer.lock ./

COPY . .
#copy environment file
COPY ./.env.example ./.env

RUN composer install

RUN php artisan key:generate --ansi

RUN php artisan storage:link

COPY ./script/php_script.sh /tmp

RUN chmod +x /tmp/php_script.sh

ENTRYPOINT ["sh","/tmp/php_script.sh"]

EXPOSE 8000
