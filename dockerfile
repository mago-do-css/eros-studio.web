FROM php:8.3-apache

# Atualize o sistema e instale pacotes necessários
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    curl \
    libxml2-dev \
    && docker-php-ext-install mysqli \
    && docker-php-ext-install pdo pdo_mysql \
    && docker-php-ext-install opcache \
    && docker-php-ext-install xml \
    && apt-get clean

# Instalar o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Habilitar o módulo de reescrita do Apache
RUN a2enmod rewrite

# Defina o diretório de trabalho
WORKDIR /var/www/html

# Exponha a porta 80
EXPOSE 80

# Comando para iniciar o Apache em primeiro plano
CMD ["apache2-foreground"]
