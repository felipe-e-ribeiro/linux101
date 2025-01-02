FROM nginx:1.21.6-alpine
COPY ./public_html /public_html 

EXPOSE 80
STOPSIGNAL SIGQUIT
CMD ["nginx", "-g", "daemon off;"]
