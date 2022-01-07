FROM php:7.4-fpm

WORKDIR /app

COPY ./www/composer.json ./composer.json
COPY ./www/composer.lock ./composer.lock

RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    libzip-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install extensions
#RUN docker-php-ext-install pdo_mysql
#RUN docker-php-ext-install zip
#RUN docker-php-ext-install exif
#RUN docker-php-ext-install pcntl
#RUN docker-php-ext-install gd

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN groupadd --force -g 1000 www \
    && useradd -ms /bin/bash --no-user-group -g 1000 -u 1000 www

# Change current user to www
#USER www

RUN composer install --no-scripts --no-autoloader

EXPOSE 9000
CMD ["php-fpm"]
