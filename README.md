# WEB APPLICATION ICT
this application include admin and participant page, use `/login-admin` route to access the login page

### Requirement
- PHP >= 7.2 
- Laravel 5
- Composer
- Node & NPM
- Mysql/MariaDb

## How to Install
make sure you have enough memory for this application, and place it into your root directory

### Clone repo
you can clone this repo with command:
``
then
`cd ICT2019`

### Do Composer Install
`composer install`
`composer update`

### Install assets
`npm install && npm run dev`
if you getting some error just run it again

### Copy the env 
`cp .env.example .env`
then update the .env file with your database credentials

### Migrate all tables and seed master data
`php artisan migrate --seed`

### Serve your application
`php artisan serve`

#### Admin Credentials
username: admin@mail.com
password: password
