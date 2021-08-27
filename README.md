# back-end

```
be sure use xampp with php v7.4.18 (xampp v3.3.0)
be sure to run xampp before running backend
```

### Project setup
```
cp .env.example .env
create "cache" folder inside "bootstrap" folder
composer install
php artisan migrate:fresh --seed
```

### Run server
```
php artisan serve
```

### If error when running script
```
go to localhost/phpmyadmin
create database named "chikatech"
run the script again
```
