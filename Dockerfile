# Use the official PHP 8.3 image as the base image
FROM php:8.3

# Set the working directory inside the container
WORKDIR /srv/demo-app

# Install system dependencies
RUN apt-get update && apt-get install -y \
  curl \
  libpng-dev \
  libonig-dev \
  libxml2-dev \
  zip \
  unzip

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the project files into the container
COPY . .

# Install project dependencies
RUN composer install

# Set up permissions
RUN chown -R www-data:www-data /srv/demo-app/storage /srv/demo-app/bootstrap/cache

# Expose port 80 and start the PHP built-in server
EXPOSE 80
CMD ["php", "-S", "0.0.0.0:80", "-t", "public"]
