FROM php:7.4-cli

RUN apt-get update && apt install git curl zip -y

RUN docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

WORKDIR /app

COPY . .

RUN composer install

CMD [ "php", "-S", "0.0.0.0:8080", "./server.php" ]