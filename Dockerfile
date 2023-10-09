FROM php:8.2-fpm

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql

# Set working directory
WORKDIR /var/www/html

# Copy the Symfony project into the container
COPY . .

# Expose port 8000
EXPOSE 8000

# Start the PHP-FPM server
CMD ["php-fpm"]