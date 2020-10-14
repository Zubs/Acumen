# Weather Monster

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/44a6f3c59b8e49e2868edde025a824c1)](https://app.codacy.com/gh/Zubs/Acumen?utm_source=github.com&utm_medium=referral&utm_content=Zubs/Acumen&utm_campaign=Badge_Grade)


## Setting Up The Project
*  Clone the repo with 
	```git clone https://github.com/Zubs/Acumen.git```
*  Get all dependencies 
	```composer install``` 
	```npm install```

*  Get your .env file
	```php -r "file_exists('.env') || copy('.env.example', '.env')```

*  Fill in the right config details in the ```.env``` file.
	```
	DB_CONNECTION=mysql
	DB_HOST=127.0.0.1
	DB_PORT=3306
	DB_DATABASE=acumen
	DB_USERNAME=root
	DB_PASSWORD=
	```

*  Generate ```APP_KEY```
	```php artisan key:generate```

*  Run Migrations
	```php artisan migrate```


## Running The Tests
*  Run all tests
	```php artisan test```

## Running The App
*  Start server and run application
	```php artisan serve```
