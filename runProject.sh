#! /bin/bash

file=".env"

if [ -f "$file" ]
then
	echo "$file found"
else
	echo "$file not found"
	echo "copying .env.example"
    cp .env.example .env
    php artisan key:generate
fi

database_file="./database/database.sqlite"

if [ -f "$database_file" ]
then
	echo "$database_file found"
else
	echo "$database_file not found"
    touch "$database_file"
fi

composer install
npm install
npm run dev

php artisan cache:clear
php artisan config:clear
php artisan route:clear

php artisan migrate:fresh --seed
