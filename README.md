# Demo project on the Laravel framework - simple static web-site

## Required:
- PHP `>=8.3`
- Nginx or Apache server
- node.js `>=22`

### Project includes:
- `vite` + `laravel-vite-plugin` - frontend
- php framework `laravel 12`

### Installing:
- Configure the connection to the database management system in the env file
- `composer install`
- `php artisan migrate`
- `php artisan db:seed --class='SeedClassName'`
- `npm install`
- `npm run build`
