#!/bin/bash

source ./.env


if [ $APP_ENV = 'local' ]; then
  echo 'ENV::'$APP_ENV;
  cd "/Users/yamakami_osamu/Documents/Roughlang/repos/foucault-web/foucault_web_app"
  # macbook dug
  find ./ -name "* [1-9]" -type d -exec rm -rf {} +;
  find ./ -name "* [1-9].*" -type f -exec rm -f {} +;
  #---------
  # Laravel
  #---------
  # composer
  ./vendor/bin/sail php composer.phar update;
  #./vendor/bin/sail artisan migrate;
  ./vendor/bin/sail artisan config:clear;
  ./vendor/bin/sail artisan cache:clear;
  ./vendor/bin/sail artisan clear-compiled;
  ./vendor/bin/sail artisan optimize;
  ./vendor/bin/sail artisan view:cache;
  # react build
  cd ../foucault_react_app;
  rm -fR app;
  npm run echo:jwt-name:local;
  npm run build;
  cd ../;
  # eact copy
  rm -fR foucault_web_app/public/app
  cp -pR foucault_react_app/app foucault_web_app/public/
  # local only
  git status;

elif [ $APP_ENV = 'dev' ]; then
  echo 'ENV::'$APP_ENV;
  # dir
  mkdir -p -m 777 storage/debugbar;
  mkdir -p -m 777 storage/app/public;
  mkdir -p -m 777 storage/framework;
  mkdir -p -m 777 storage/framework/app;
  mkdir -p -m 777 storage/framework/app/cache;
  mkdir -p -m 777 storage/framework/cache;
  mkdir -p -m 777 storage/framework/cache/data;
  mkdir -p -m 777 storage/framework/testing;
  mkdir -p -m 777 storage/framework/sessions;
  mkdir -p -m 777 storage/framework/views;
  mkdir -p -m 777 storage/logs;
  # laravel optomize
  /usr/local/php/8.2/bin/php artisan migrate;
  /usr/local/php/8.2/bin/php composer.phar update;
  /usr/local/php/8.2/bin/php artisan config:clear;
  /usr/local/php/8.2/bin/php artisan cache:clear;
  /usr/local/php/8.2/bin/php artisan clear-compiled;
  /usr/local/php/8.2/bin/php artisan optimize;
  /usr/local/php/8.2/bin/php artisan view:cache;
elif [ $APP_ENV = 'stg' ]; then
  echo 'ENV::'$APP_ENV;
  # dir
  mkdir -p -m 777 storage/debugbar;
  mkdir -p -m 777 storage/app/public;
  mkdir -p -m 777 storage/framework;
  mkdir -p -m 777 storage/framework/app;
  mkdir -p -m 777 storage/framework/app/cache;
  mkdir -p -m 777 storage/framework/cache;
  mkdir -p -m 777 storage/framework/cache/data;
  mkdir -p -m 777 storage/framework/testing;
  mkdir -p -m 777 storage/framework/sessions;
  mkdir -p -m 777 storage/framework/views;
  mkdir -p -m 777 storage/logs;
  # laravel optomize
  /usr/local/php/8.2/bin/php artisan migrate;
  /usr/local/php/8.2/bin/php composer.phar update;
  /usr/local/php/8.2/bin/php artisan config:clear;
  /usr/local/php/8.2/bin/php artisan cache:clear;
  /usr/local/php/8.2/bin/php artisan clear-compiled;
  /usr/local/php/8.2/bin/php artisan optimize;
  /usr/local/php/8.2/bin/php artisan view:cache;
elif [ $APP_ENV = 'prod' ]; then
  echo 'ENV::'$APP_ENV;
  # dir
  mkdir -p -m 777 storage/debugbar;
  mkdir -p -m 777 storage/app/public;
  mkdir -p -m 777 storage/framework;
  mkdir -p -m 777 storage/framework/app;
  mkdir -p -m 777 storage/framework/app/cache;
  mkdir -p -m 777 storage/framework/cache;
  mkdir -p -m 777 storage/framework/cache/data;
  mkdir -p -m 777 storage/framework/testing;
  mkdir -p -m 777 storage/framework/sessions;
  mkdir -p -m 777 storage/framework/views;
  mkdir -p -m 777 storage/logs;
  /usr/local/php/8.2/bin/php artisan migrate;
  /usr/local/php/8.2/bin/php composer.phar update;
  /usr/local/php/8.2/bin/php artisan config:clear;
  /usr/local/php/8.2/bin/php artisan cache:clear;
  /usr/local/php/8.2/bin/php artisan clear-compiled;
  /usr/local/php/8.2/bin/php artisan optimize;
  /usr/local/php/8.2/bin/php artisan view:cache;
  # react build
  cd ../foucault_react_app;
  rm -fR app;
  npm run echo:jwt-name:prod;
  npm run build:prod;
  cd ../;
  # react copy
  rm -fR foucault_web_app/public/app
  cp -pR foucault_react_app/app foucault_web_app/public/

else 
  echo 'There is no env.';
fi

#-----------
# Wordpress 
#-----------
# public/system
#rsync -a --delete ./public/system/wp-content/themes/system/ ./public/blog/wp-content/themes/system/;
#echo 'rsync wordpress files form system to blog';