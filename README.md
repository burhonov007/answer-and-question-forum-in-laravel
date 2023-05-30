<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Questions::Laravel


## Installation

If you want to run this application for yourself, then follow these steps:

1. Install the project's dependencies: run the `composer install` command on the command line. This will install all required Laravel dependencies.

```
composer install
```


2. Create a `.env` file: Copy the `.env.example` file in the project root directory and rename it to `.env`. This file contains settings for your development environment, such as database settings and application keys.



3. Generate the application key: At the command prompt, run `php artisan key:generate`. This will generate a unique application key that will be used to encrypt the data.



```ruby
php artisan key:generate
```

5. Run database migrations with fake data autoseeding: At the command prompt, run `php artisan migrate --seed`. This will create the necessary tables in the database defined in the migrations and populate with fake data.


```ruby
php artisan migrate --seed
```

6. If you do not have Node.js installed, then install from the official site (and if you have, follow the next steps!).


7. At the command line, run the `npm install` command. This will install all required project dependencies specified in the package.json file.


```ruby
npm install
```


8. At the command line, run the `npm run dev` command. When executing the npm run dev command, Laravel Mix will build or compile the resources defined in the webpack.mix.js configuration file.

```ruby
npm run dev
```


9. Start the web server: At the command prompt, run the `php artisan serve` command. This will start Laravel's built-in web server, which will listen on the default port (usually 8000).

```ruby
php artisan serve
```

After completing these steps, your Laravel project should be successfully configured and ready to go. You can open its web interface by going to `http://localhost:8000` (or another port if you have changed it).


### Login credentials

**Expert:**  *daniel@gmail.com*  
**Password:** *secret*

**User:** *james@gmail.com*  
**Password:** *secret*
