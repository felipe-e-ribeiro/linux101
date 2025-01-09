ARG ARCH=
FROM ${ARCH}php:8.1-fpm-alpine
COPY ./public_html /public_html 
USER www-data
EXPOSE 9000
CMD ["php-fpm"]