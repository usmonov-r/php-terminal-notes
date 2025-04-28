FROM php:8.2-fpm

WORKDIR /app

COPY index.php .

ENTRYPOINT ["php", "index.php"]
