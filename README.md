## About this repository

This repository is a starter kit for a quick start with Filament PHP.

## Installation

1. Clone this repository 
2. Run `composer install`
3. Copy the `.env.example` file to `.env` and fill in the required values
4. Run `php artisan key:generate`
5. Run `php artisan migrate --seed` (to also have a demo user)
6. Run `yarn install` and `yarn dev` to compile the assets 
7. Run `php -S localhost:8000 -t public` to start the server