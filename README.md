## **How to set up and run the project locally.**
**Requirement:**
PHP: Laravel requires PHP 7.3 or higher.
Composer: Dependency manager for PHP.
Web Server: Apache or Nginx. You can also use Laravel’s built-in server for development.
Database: no database was used for the project
Node.js and npm: For frontend assets (optional, but recommended).

git clone https://github.com/pascalpizzy/raily-app-project.git
cd into reposirtory
composer install
npm install
rename the .env.example to .env
php artisan serve

## **Any assumptions or decisions made during the development.**
i decided to run all my route through the controller function.

## **Any challenges faced and how they were overcome.**
One of the challenges I encountered was deploying a Laravel project to Netlify. Netlify does not support server-side scripts, so I had to make my project static by creating a new folder. This allowed me to successfully upload the project to Netlify.
