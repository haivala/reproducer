FROM nginx:mainline-alpine as dev
ARG USER_ID
ARG GROUP_ID
RUN rm -rf /var/cache/apk/* && rm -rf /tmp/* && rm /etc/nginx/conf.d/default.conf
ADD nginx.conf /etc/nginx/
ADD symfony.conf /etc/nginx/conf.d/symfony.conf
RUN echo "upstream php-upstream { server fpm:9000; }" > /etc/nginx/conf.d/upstream.conf
RUN addgroup -g ${GROUP_ID} -S symfony && adduser -u ${USER_ID} -D -S -G symfony symfony
CMD ["nginx"]
EXPOSE 80
