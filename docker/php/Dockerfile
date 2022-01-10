FROM php:7.4-fpm

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

#COPY . ./
RUN curl -sL https://getcomposer.org/installer | php -- --install-dir /usr/bin --filename composer
#RUN composer install

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

RUN groupadd --force -g 1000 www \
    && useradd -ms /bin/bash --no-user-group -g 1000 -u 1000 www

# Change current user to www
USER www

EXPOSE 9000
CMD ["php-fpm"]
