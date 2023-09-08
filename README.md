# Laravel Starter Kit

## Early release - Still work in progress

## If you want to support this project, do contribute via PR

### Built with

- **[Laravel 10](https://laravel.com/)**
- **[Tailwind Css v3](https://tailwindcss.com)**
- **[Spatie Laravel Permissions](https://github.com/spatie/laravel-permission)**

### Roadmap

- Done - Install Laravel
- Done - Configure phpmyadmin to view DB
- Done - Port configuration in env
- Done - Install Breeze
- Done - Install Sptie laravel permissions
- Done - Create RoleSeeder and UserSeeder
- Done - Make UI to manage roles and permissions
- A simple Landing page
- Authentication pages
- A simple admin UI
- Update setup and uses instructions in readme

## Uses

- Use this template and create a new repository
- clone newly created repo and then run following commands one at a time

``` bash
cp .env.example .env
```

Make sure to update you database credentials and other variables

### Configure ports in your env like this

Helps when you have already running something on default ports

``` .env
APP_PORT=80 # replace with port number
FORWARD_DB_PORT=3306
FORWARD_PHPMYADMIN_PORT=8081
VITE_PORT=5174
```

and then

``` bash
docker run --rm -v $(pwd):/opt -w /opt laravelsail/php82-composer:latest composer install
./vendor/bin/sail up -d
./vendor/bin/sail artisan key:generate
./vendor/bin/sail artisan storage:link
./vendor/bin/sail artisan migrate:fresh --seed
npm install
npm run dev
 ```

## Following credentials will be available for you to work with

``` bash
Admin:
    admin@admin.com
    password
User:
    user@user.com
    password
```

## Contributing

Thank you for considering contributing to the Laravel Starter Kit! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please do not post publically. All security vulnerabilities will be promptly addressed.

## License

The Laravel Starter Kit is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
