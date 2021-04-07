# A Simple Tailor Shop Management System SEWBOX TMS

## About this application

Laravel Dashboard with user management and user's Role and Permissionon is one more super versatile site canvas that will take your breath away with the number of features it rocks. With as solid admin that you can build with the out of this world Laravel Dashboard, you are on the right path to see the success you want to see. Having it all in total order is a must when running a business and bringing it to an entirely new level.  With Laravel Dashboard, that is very achievable.  Laravel Dashboard is an admin panel with multiple screen designs and loads of other pages. It also has a full-screen button and a hide and show button for the sidebar. When both options turned on, you are all in your statistics and information, nothing else disturbing you.

##### Framework: Laravel 5.8
##### Language : PHP 5.7

## Install
- Type this line:
```
composer update
```
- To change Database go to "config/database.php" and then change database. Default Database is MySql.

- Migrate Database by typing this:
```
php artisan migrate
```
- Sign Up by replacing "login" to "register" from address bar and add all informations.

//for ubuntu in xampp
sudo curl -s https://getcomposer.org/installer | /opt/lampp/bin/php
sudo ln -s /opt/lampp/bin/php /usr/local/bin/php


sudo apt-get install php7.2-mbstring
sudo apt-get install php-xml
sudo apt-get install php-gd php-mysql
rename .env.example to .env

composer update

php artisan migrate


php artisan db:seed


verify db credentials

php artisan key:generate

php artisan config:cache

php artisan serve

XAMPP config

-------------------------------------------------------------------------------------------------------------------------------

To Create Role & Permission and Assign Role To Logged in User redirect after Login - ("/create_role_permission")  only for 1st time

--------------------------------------------------------------------------------------------------------------------------------
