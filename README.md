# Delivery Fee Calculator (Laravel 10+)

A small Laravel-based microservice that calculates delivery fees based on type, destination, and weight.

## Features

- API endpoint: `POST /api/calculate-delivery-fee`
- Delivery Types: `standard` & `express`
- Business rules:
  - Base fee: 50 for standard, 100 for express
  - +10 UAH per kg if weight > 2kg
  - 10% discount for deliveries to Kyiv
- Strategy pattern for delivery types
- FormRequest validation
- Unit tested

## Installation

```bash
git clone <your-repo-url>
cd delivery-fee-calculator
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
