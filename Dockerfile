FROM php:8.1-fpm

WORKDIR /app

COPY . .

CMD ["php","index.php"]