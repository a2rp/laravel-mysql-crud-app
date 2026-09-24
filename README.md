# Laravel MySQL CRUD App

A Laravel product inventory application with Blade views, resource-style routes, validation, and MySQL-ready Eloquent persistence.

## Features

- Product create, read, update, and delete workflow
- Quantity and price validation
- CSRF-protected forms with flash feedback
- Responsive inventory table and product forms
- Vite-managed CSS and JavaScript assets
- Local branding with a fixed responsive header and icon-only footer links

## Tech Stack

- Laravel 10 and PHP 8.1+
- Blade, Eloquent, and MySQL-compatible storage
- Vite

## Run Locally

Install PHP, Composer, Node.js, and MySQL, then run:

npm install
composer install
copy .env.example .env
php artisan key:generate
php artisan migrate
npm run build
php artisan serve

Set the database values in .env before migrating. Open the product manager at /product.

This server-rendered Laravel application is not deployed to GitHub Pages. Use a PHP and MySQL-capable host for production.

## Future Direction

Authentication, search, filters, pagination, and role-based inventory management can be added while keeping the existing product workflow.

## Links

- Portfolio: https://www.ashishranjan.net
- GitHub: https://github.com/a2rp
- CodePen: https://codepen.io/ash1198
- LinkedIn: https://www.linkedin.com/in/aashishranjan
- Facebook: https://www.facebook.com/theash.ashish/
- YouTube: https://www.youtube.com/@ashishranjan-ashz?sub_confirmation=1
- Email: mailto:ash.ranjan09@gmail.com

## Support

- Support: https://a2rp-donation-page.netlify.app/
- Buy Me A Coffee: https://buymeacoffee.com/a2rp
- Patreon: https://patreon.com/a2rp