FROM nginx:stable-alpine

RUN delgroup dialout

ADD ./nginx/default.conf /etc/nginx/conf.d/

RUN mkdir -p /workspace