##installation
````
  git clone https://github.com/Ariful491/oems.git
  
  ````
````
  composer install
  ````
````  
  cp .env.example .env
````
Open your .env file and change the database name (DB_DATABASE) to whatever you have, username (DB_USERNAME) and password (DB_PASSWORD) field correspond to your configuration.
````
   php artisan key:generate
    
   php artisan migrate
   
   php artisan serve
   
   php artisan db:seed
   ````
