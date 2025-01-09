ARG ARCH=
FROM ${ARCH}alpine:3.21.2
COPY ./public_html /public_html 
RUN apk add nginx ; apk cache clean
USER nginx
EXPOSE 80
STOPSIGNAL SIGQUIT
CMD ["nginx", "-g", "daemon off;"]
