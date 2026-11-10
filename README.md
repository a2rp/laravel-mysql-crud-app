# Laravel MySQL CRUD App

A server-rendered Laravel inventory app for managing product names, descriptions, stock quantities, and unit prices.

![Inventory Manager preview](public/preview.png)

## Features

- Add, edit, and delete product records
- Required description, whole-number stock quantity, and two-decimal unit price
- Server-side validation aligned with the database column limits
- Paginated inventory list sorted by most recently created
- CSRF-protected forms and escaped Blade output
- Responsive interface built with Blade and Vite

## Stack

- Laravel 10 and PHP 8.1
- Blade and Eloquent
- MySQL-compatible database
- Vite

## Run locally

This repository currently targets PHP 8.1 and Laravel 10. Install PHP, Composer, Node.js, and MySQL. Then:

```powershell
Copy-Item .env.example .env
composer install
php artisan key:generate
```

Create the database configured by `DB_DATABASE` in `.env`, then run:

```powershell
php artisan migrate
npm install
npm run build
php artisan serve
```

Open [http://localhost:8000/product](http://localhost:8000/product). The root URL redirects to the inventory list.

## Runtime support

This is a legacy learning project. Laravel 10 security support ended on February 4, 2025, and PHP 8.1 reached end of life on December 31, 2025. Upgrade to a supported Laravel release and PHP version before production use. Regenerate `composer.lock`, review the app, and run its test suite as part of that upgrade. Laravel 13 requires PHP 8.3 or newer.

- [Laravel release support policy](https://laravel.com/docs/releases#support-policy)
- [PHP supported versions](https://www.php.net/supported-versions.php)

## Production note

Product routes are public and have no authentication or authorization. Add access control before storing real inventory data in a public deployment.

## Links

- Portfolio: [ashishranjan.net](https://www.ashishranjan.net)
- GitHub: [a2rp](https://github.com/a2rp)
- CodePen: [ash1198](https://codepen.io/ash1198)
- LinkedIn: [Ashish Ranjan](https://www.linkedin.com/in/aashishranjan)
- Email: [ash.ranjan09@gmail.com](mailto:ash.ranjan09@gmail.com)

## Support

- [Support page](https://a2rp-donation-page.netlify.app/)
- [Buy Me a Coffee](https://buymeacoffee.com/a2rp)
- [Patreon](https://patreon.com/a2rp)
