FROM php:8.1.2-fpm-alpine

RUN mkdir -p /workspace

WORKDIR /workspace

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

RUN apk update \
    && apk add --no-cache \
        freetype-dev \
        libjpeg-turbo-dev \
        libpng-dev \
        libwebp-dev

RUN docker-php-ext-install pdo pdo_mysql
    
RUN docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install gd 

CMD ["php-fpm", "-y", "/usr/local/etc/php-fpm.conf", "-R"]
