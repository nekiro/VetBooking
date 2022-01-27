# VetBooking

## What is it?

Example website that allows you booking meetings to veterinarian.  
You can check demo [here](https://vetbooking.herokuapp.com/).  
Admin credentials: admin@admin/admin

### Stack

PHP  
Laravel  
html/css/js

### Dependencies

[PHP 8.0](https://windows.php.net/downloads/releases/php-8.0.0-nts-Win32-vs16-x64.zip)  
[Composer](https://getcomposer.org/download/)  
[MySQL](https://www.mysql.com/)

## How To Install

### Windows

1. Download PHP from link above
2. Download Composer from link above
3. Unzip PHP somewhere
4. Install Composer and point to PHP location you unzipped to in step 3.
5. You need to reopen all terminals for php global var to update
6. Open project directory in terminal and write `composer install`

## How To Run

### Windows

1. Open repository with vscode or console (whatever you like)
2. Execute commands:
    ```
    php artisan migrate:fresh
    php artisan db:seed
    php artisan serve
    ```
