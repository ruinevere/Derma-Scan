# Use the official PHP image with FPM
FROM php:8.1-fpm

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
    && docker-php-ext-install pdo pdo_mysql gd

# Set the working directory
WORKDIR /app

# Copy application files
COPY . /app

# Install Python dependencies
RUN pip3 install --no-cache-dir -r requirements.txt

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader --no-scripts && \
    php artisan config:clear && \
    php artisan optimize:clear && \
    php artisan package:discover

# Expose port 8000
EXPOSE 8000

# Run the Python API script
CMD ["python3", "api.py"]
