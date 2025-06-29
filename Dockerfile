FROM php:8.2-apache

# Install necessary PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Set the working directory
WORKDIR /var/www/html

# Copy the Laravel application files
COPY src/laravel-app /var/www/html

# Create storage and bootstrap/cache directories and set permissions
RUN mkdir -p storage bootstrap/cache && chown -R www-data:www-data storage bootstrap/cache

# Set Apache DocumentRoot to /var/www/html/public
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|g' /etc/apache2/sites-available/000-default.conf

# Expose port 80
EXPOSE 80

# Start the Apache server
CMD ["apache2-foreground"]
