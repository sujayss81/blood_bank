Follow The following steps to run the project

*****************************************
Prerequistes
*****************************************
1.Wampserver
2.Composer
*****************************************

Steps:
*****************************************
1.clone the repository into c://wamp64/www/
2.cp .env.example .env or copy .env.example .env
3.Enter Database Name in the .env file
3.cd to blood_bank and open Command Prompt

In Command Prompt,run the following commands
 
1.composer install
2.php artisan migrate
3.php artisan key:generate
4.php artisan serve


*****************************************
Project will be running on localhost:8000 by default
*****************************************


