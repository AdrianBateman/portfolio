FROM php:8.2.0RC6-fpm-bullseye
RUN if command -v a2enmod >/dev/null 2>&1; then \
        a2enmod rewrite headers \
    ;fi
