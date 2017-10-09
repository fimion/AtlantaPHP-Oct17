# Simple To Do

> For the Talk "Laravel, Vue.js, and How to Hate Javascript Less"

## Get the app up and running

### Requirements

* [Minimum PHP 7.1](https://php.net)
* [Composer](https://getcomposer.org)
* [NodeJS + NPM](https://nodejs.org)


### Commands to get running
``` bash

# install dependencies
composer install
npm install

# after you make your .env file
# get the php app ready
php artisan migrate
php artisan db:seed
php artisan key:generate

# run a server to test the laravel install
php artisan serve

# run a file watcher on your vue.js app
npm run watch
```
