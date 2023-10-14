# Use an official PHP runtime as a parent image
FROM php:7.4-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Copy the current directory contents into the container at /var/www/html
COPY . /var/www/html/

# Install any dependencies your PHP application requires (if needed)
# For example, if you are using Composer:
# RUN composer install

# Expose port 80 for Apache
EXPOSE 80

# Start Apache when the container launches
CMD ["apache2-foreground"]
