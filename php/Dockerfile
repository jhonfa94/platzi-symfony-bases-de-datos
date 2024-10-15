# (FastCGI Process Manager)
FROM php:8.3-fpm

# Create user www-data and attach to group www-data
RUN adduser www-data www-data

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev \
    zip \
    unzip \
    wget \
    # Change the ID from www-data user to 1000
    && usermod -u 1000 www-data

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd opcache sockets fileinfo zip

# intl
# openssl
# soap
# sqlite3
# xsl
# zip

# sqlite3 curl imap xml zip bcmath soap intl readline ldap

# Get latest Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# RUN wget https://get.symfony.com/cli/installer -O - | bash && mv /root/.symfony/bin/symfony /usr/local/bin/symfony
RUN wget https://get.symfony.com/cli/installer -O - | bash
# RUN curl -sS https://get.symfony.com/cli/installer | bash

# Set www-data user as default instead root
USER www-data

# RUN git config --global user.email "programasjhonfa@gmail.com" \ 
#     && git config --global user.name "Jhon Fabio Cardona Martinez"