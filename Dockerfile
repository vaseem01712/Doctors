# ---------- Frontend build ----------
FROM node:20-alpine AS frontend

WORKDIR /app

COPY package*.json ./
RUN npm ci

COPY . .

RUN chmod +x node_modules/.bin/vite
RUN npm run build


# ---------- Laravel / PHP ----------
FROM richarvey/nginx-php-fpm:3.1.6

WORKDIR /var/www/html

COPY . .

# Create SQLite database file
RUN mkdir -p database && touch database/database.sqlite

ENV COMPOSER_ALLOW_SUPERUSER=1

RUN composer install \
    --no-dev \
    --no-interaction \
    --prefer-dist \
    --optimize-autoloader

# Copy Vite production assets
COPY --from=frontend /app/public/build ./public/build

# Fix 404 on inner pages: send every non-file URL to Laravel's index.php
RUN sed -i 's#try_files \$uri \$uri/ =404;#try_files $uri $uri/ /index.php?$query_string;#g' \
      /etc/nginx/sites-available/default.conf \
      /etc/nginx/sites-available/default-ssl.conf 2>/dev/null || true \
    && grep -n "try_files" /etc/nginx/sites-available/default.conf || true

ENV WEBROOT=/var/www/html/public
ENV PHP_ERRORS_STDERR=1
ENV RUN_SCRIPTS=1
ENV REAL_IP_HEADER=1
ENV SKIP_COMPOSER=1

ENV APP_ENV=production
ENV APP_DEBUG=false
ENV LOG_CHANNEL=stderr

CMD ["/start.sh"]