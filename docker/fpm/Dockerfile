FROM php:8.3-fpm-alpine as dev

ARG USER_ID
ARG GROUP_ID

RUN apk upgrade --update \
    && apk add --no-cache \
        libwebp freetype libltdl \ 
        libjpeg libpng \
        libzip libxml2 \ 
        gnupg curl \
        git icu icu-data-full libssh2 \
        libev sox \
    && apk add --virtual build-deps \
        bash grep build-base tar re2c make file \ 
        zeromq-dev libpng-dev libwebp-dev \ 
        libxml2-dev libjpeg-turbo-dev freetype-dev \
        libssh2-dev zlib-dev icu-dev \ 
        libmcrypt-dev \
        autoconf libzip-dev \
        linux-headers \
    && addgroup -g ${GROUP_ID} -S symfony && adduser -u ${USER_ID} -D -S -G symfony symfony \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
    && docker-php-ext-install -j$(nproc) gd intl bcmath pdo_mysql opcache zip sockets pcntl \
    && pecl channel-update pecl.php.net \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && apk del build-deps \
    && rm -rf /var/cache/apk/* && rm -rf /tmp/*
COPY ./dev.ini /usr/local/etc/php/php.ini
ADD symfony.pool.conf /usr/local/etc/php-fpm.d/www.conf
USER symfony
WORKDIR /var/www/repro/symfony
CMD ["php-fpm", "-F"]
EXPOSE 9000
