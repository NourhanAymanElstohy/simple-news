## About Project

This Project is a simple and basic News App with CRUD operation by Laravel Aand Mongodb

## Packages Used

-   laravel/ui
-   jenssegers/laravel-mongodb

## Tech/framework used

<b>Built with</b>

-   [Laravel](https://laravel.com)

## Features

For Authenticated Users:

-   Loged in User can view news, add comment, edit comment or delete comment

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/7.x/installation#installation)

Clone the repository

```
git clone https://github.com/NourhanAymanElstohy/simple-news
```

Switch to the repo folder

```
cd simple-news
```

Install all the dependencies using composer

```
composer install
```

Copy the example env file and make the required configuration changes in the .env file

```
cp .env.example .env
```

Generate a new application key

```
php artisan key:generate
```

Create a database in mongodb then write Your Database Name in .env

```
DB_DATABASE=your_db_name
```

Run the database migrations and seed

```
php artisan migrate:fresh --seed
```

Start the local development server

```
php artisan serve
```

You can now access the server at http://localhost:8000

**Command List**

```
git clone https://github.com/NourhanAymanElstohy/simple-news
cd simple-news
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
```
