<p align="right"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="200" alt="Laravel Logo"></a></p>

# Admin_Test

## Screens: 

## Frameworks & packages:

 - [Laravel](https://laravel.com/docs/10.x)
 - [Laravel Breeze](https://laravel.com/docs/10.x/starter-kits#laravel-breeze)
 - [Tailwind CSS](https://tailwindcss.com/docs/installation)


## Run Locally

#### Clone the project:

```bash
  https://github.com/luis11anillo/Admin_test.git
```

#### Go to the project directory:

```bash
  cd Admin_test
```

#### Install dependencies:

```bash
  composer install
```
```bash
  npm install
```

#### Rename the file `.env.example` as `.env` and generate a new key
```bash
  php artisan key:generate
```
Then set the database credentials in the `.env` file

#### generate authentication Key for Breeze
```bash
  php artisan breeze:install
```

#### Start the server
```bash
  php artisan serve
```