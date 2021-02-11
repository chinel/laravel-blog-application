<p align="center"><img src="https://i.imgur.com/qFowDPT.png"></p>


## About The Application

This application is a mini blog application built with PHP and Laravel Framework. Below are features of the application

- It allows visitors of the app to view all blog posts posted by anybody
- It also allows the visitors of the app to register, login to view private areas of the application such as their dashboard as well as allow them to publish their own post
- All users are also allowed to order the post by the publication date
- The App also pulls blog post from an external api using Laravel's command scheduler every 1 hour. This scheduler ignores already existing post from the api that is in the database

## How to use this application

- First you have to clone this application down to your server or localhost
- Then install all the dependencies of the application by running this command <strong>composer install</strong>
- Create an env file using the .env.example file included in the app
- Create a MySQL Database for the application
- Add the database credentials to the .env file
- Then Run this command to migrate the tables  <strong>php artisan migrate</strong> 
- The application also comes with a dummy data. You have to seed the data to the database. To do this just run this command <strong>php artisan db:seed</strong>
- There is a default generated user for the app you can find the access details in the users table seeder file. This will allow you to login and create a post
- You can also register as a new user and login to create a post as well
- To start the scheduler on your server if you are using a linux based operating system. Run this command as an administrator <strong>crontab -e</strong>
- This will open the Crontab file of the server. Then paste the code below into the file
- <strong>cd /path-to-your-project && php artisan schedule:run >> /dev/null 2>&1</strong>
- Note: the path-to-your-project has to be replaced with the path of your project

If you are on your localhost and you want to run this scheduler to test it. You can simply replace the <strong>hourly()</strong> with <strong>everyMinute()</strong> inside of the schedule function of the kernel file which can be found in <strong>app/Console/Kernel.php file</strong>
And then run this command <strong>php artisan schedule:run</strong> to start the scheduler manually .This will pull posts from the external api and import it into the database
