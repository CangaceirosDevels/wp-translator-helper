FROM wordpress

# Install wp-cli, configure Apache, & add scripts

RUN curl \
        -o /usr/local/bin/wp https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
    && chmod +x /usr/local/bin/wp  \
    && sed -i "s/AllowOverride None/AllowOverride All/g" /etc/apache2/apache2.conf \
    && a2enmod rewrite \
    && service apache2 restart

# Run the server
EXPOSE 80
