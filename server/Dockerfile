FROM wordpress:latest


COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer

WORKDIR /var/www/html

COPY composer.json .
COPY composer.lock .

RUN composer install

RUN usermod -u 1000 www-data
# Set appropriate permissions
RUN chown -R www-data:www-data /var/www/html/
RUN chmod -R 755 /var/www/html

# Enable Apache mod_rewrite for WordPress permalinks
RUN a2enmod rewrite
