<p>## **How to set up and run the project locally.**</br>
**Requirement:**</br>
PHP: Laravel requires PHP 7.3 or higher.</br>
Composer: Dependency manager for PHP.</br>
Web Server: Apache or Nginx. You can also use Laravel’s built-in server for development.</br>
Database: no database was used for the project</br>
Node.js and npm: For frontend assets (optional, but recommended).</br>

<p>git clone https://github.com/pascalpizzy/raily-app-project.git</br>
cd into reposirtory</br>
composer install</br>
npm install</br>
rename the .env.example to .env</br>
php artisan serve</br></p>


<p>## **Any assumptions or decisions made during the development.**</br>
I decided to run all my route through the controller function.</br></p>



<p>## **Any challenges faced and how they were overcome.**</br>
One of the challenges I encountered was deploying a Laravel project to Netlify. Netlify does not support server-side scripts, so I had to make my project static by creating a new folder. This allowed me to successfully upload the project to Netlify.</p>
