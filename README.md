# Välitila Studio

## install

You need database and uploaded files from production.
check .env

## development

### requirements

1. docker
2. docker-compose

### install

1. docker compose up -d
1. docker compose exec fpm ../composer.phar install
1. run migration: docker compose exec fpm ./bin/console doctrine:migrations:migrate -n
1. go to http://localhost:3021/admin/app/sonatapagesite/create
   3.1 set name, isDefault, Enabled, Host: localhost, locale: en, Enabled From: now
1. go to http://localhost:3021/admin/app/sonatapagepage/1/compose
   4.1 create Simple text block to any block
   4.2 Error can be seen in the xhr request on Create
1. If you are able to create block go to http://localhost:3021/admin/app/sonatapagepage/1/sonatapagesnapshot/list
   5.1 click add new
   5.2 click create
   5.3 ERROR
