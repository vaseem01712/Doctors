FROM richarvey/nginx-php-fpm:3.1.6

WORKDIR /var/www/html

# Copy project
COPY . .

# Install Composer dependencies
RUN composer install \
    --no-dev \
    --optimize-autoloader \
    --no-interaction

# Install Node.js + npm
RUN apk add --no-cache nodejs npm

# Install frontend dependencies and build Vite
RUN npm install
RUN npm run build

# Laravel permissions
RUN chmod -R 775 storage bootstrap/cache

# Image config
ENV WEBROOT=/var/www/html/public
ENV PHP_ERRORS_STDERR=1
ENV RUN_SCRIPTS=1
ENV REAL_IP_HEADER=1

# Laravel config
ENV APP_ENV=production
ENV APP_DEBUG=false
ENV LOG_CHANNEL=stderr

# Composer
ENV COMPOSER_ALLOW_SUPERUSER=1

CMD ["/start.sh"]
