# Use the official PHP image with FPM
FROM php:8.1-fpm

# Set the working directory
WORKDIR /app

# Install required system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    python3 \
    python3-pip \
    supervisor \
    && docker-php-ext-install pdo pdo_mysql gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Python dependencies
COPY python_api/requirements.txt /app/python_api/requirements.txt
RUN pip3 install --no-cache-dir -r /app/python_api/requirements.txt

# Copy application files
COPY . /app

# Install PHP dependencies without scripts or dev dependencies
RUN composer install --no-dev --optimize-autoloader --no-scripts && \
    php artisan config:clear && \
    php artisan optimize:clear && \
    php artisan package:discover

# Copy the supervisor configuration
COPY supervisord.conf /etc/supervisor/conf.d/supervisord.conf

# Expose port 8000 (Laravel) and 5000 (Python API)
EXPOSE 8000 5000

# Run supervisord to manage multiple processes
CMD ["supervisord", "-c", "/etc/supervisor/conf.d/supervisord.conf"]
