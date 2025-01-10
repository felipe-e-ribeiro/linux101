ARG ARCH=
FROM ${ARCH}alpine:3.21.2
COPY ./public_html /public_html 
RUN apk add nginx ; apk cache clean
RUN mkdir -p /var/lib/nginx/tmp /var/log/nginx \
    && chown -R nginx:nginx /var/lib/nginx /var/log/nginx
USER nginx
EXPOSE 80
STOPSIGNAL SIGQUIT
CMD ["nginx", "-g", "daemon off;"]
