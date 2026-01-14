# Laravel Internship Task

This project is a Laravel-based web application developed to demonstrate core Laravel concepts for an internship task.

## Features
- User authentication
- Product management (CRUD)
- Validation & authorization
- REST API endpoints
- Automated testing
- CI with GitHub Actions

## Tech Stack
- Laravel 10
- PHP 8.1+
- MySQL / SQLite
- PHPUnit

## Setup Instructions
```bash
git clone https://github.com/LahiruSandika/laravel-internship-task.git
cd laravel-internship-task
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve