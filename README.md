## Getting Started

1. Clone this repo
```
git clone https://github.com/pwncraft/laravel-8-contact-form-test.git && cd laravel-8-contact-form-test
```

2. Run composer commands
```
composer install
composer dumpautoload -o
```

3. Make environment file
```
cp .env.example .env
```

4. Generate APP Key
```
php artisan key:generate
```

5. Setup your email settings in .env

6. Clear config / cache
``` 
php artisan config:clear
php artisan config:cache
```

7. Serve it up
```
php artisan serv
```
