# stevenHdesigns.com

My personal portfolio site built with [Laravel Lumen](http://lumen.laravel.com/)

## Setup

    composer install

    bower i

Create a .env file

    cp .env.example .env

Setup a database for the portfolio

Edit the .env file (Add database information within this file)

    vim .env

Migrate the database

    php artisan migrate

Create a user

    php artisan make:user
