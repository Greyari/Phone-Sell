FROM php:8.3-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git unzip zip curl nodejs npm netcat-openbsd \
    libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

# Copy project
COPY . .

# Install dependency Laravel
RUN composer install --no-dev --optimize-autoloader --no-interaction

# (Optional) kalau kamu pakai frontend lama, bisa skip ini
RUN npm install && npm run build || true

# Permission
RUN chmod -R 775 storage bootstrap/cache

EXPOSE 8080

CMD ["sh", "-c", "\
  echo 'Menunggu koneksi ke MySQL di $DB_HOST:$DB_PORT...' && \
  while ! nc -z \"$DB_HOST\" \"$DB_PORT\"; do sleep 5; done && \
  php artisan migrate --force && \
  php artisan config:cache && \
  php artisan route:cache && \
  php artisan view:cache && \
  php artisan serve --host=0.0.0.0 --port=8080 \
"]
