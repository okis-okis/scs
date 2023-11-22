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


RUN a2enmod rewrite
RUN a2enmod ssl

EXPOSE 80
EXPOSE 443