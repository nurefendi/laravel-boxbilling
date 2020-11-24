# Information
* Laravel Framework 7.29.3
* vuejs

# Requitments
* composer
* php up 7.0
* mysql
* npm

# Step to run project local

* Rename file `.env.example` to `.env`
* Create databases `niagahoster` or run this sql query `CREATE DATABASE niagahoster`

In this project directory open terminal or cmd and run this command

> php artisan key:generate

> php artisan migrate

> php artisan db:seed --class=PriceSeeder

> php artisan serve

and run this command for npm

> npm install

> npm run watch --watch-poll


# Step to run project docker

* Rename file `.env.example` to `.env`

* Run command in terminal `docker-compose up`

* `docker-compose exec app php artisan migrate`

* `docker-compose exec app php artisan db:seed --class=PriceSeeder`

goto 0.0.0.0:8004 in browser

