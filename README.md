# Weather Monster

## Setting Up The Project
*  Clone the repo with 
	```git clone https://github.com/Zubs/Acumen.git```
*  Get all dependencies 
	```composer install``` 
	```npm install```

*  Get your .env file
	```php -r "file_exists('.env') || copy('.env.example', '.env')```

*  Generate APP_KEY
	```php artisan key:generate```

*  Fill required database details in .env file

*  Run Migrations
	```php artisan migrate```

*  Serve application
	```php artisan serve```
