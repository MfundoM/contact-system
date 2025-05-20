# Laravel Contact Management System

## Description

This is a Laravel-based Contact Management System. It allows users to submit a contact form, stores submissions securely in a MySQL database, and provides an admin panel to review submissions. This app was created as part of a professional coding assessment by **Property Studios**

---

## Features

- Input validation and sanitization
- Data storage using Eloquent ORM
- Admin view sorted by submission date
- Masked email addresses for privacy

---

## Tech Stack

- **Backend:** Laravel 12 (PHP 8.2)
- **Frontend:** Blade, CSS/Bootstrap
- **Database:** MySQL

---

## Why Laravel (PHP)?

I chose **Laravel** for this project because of its elegant syntax, powerful built-in features, robust ecosystem, and strong security foundations. It simplifies common tasks such as:

- Database management using Eloquent ORM
- Defining and handling routes with clean, readable syntax
- Implementing authentication and authorization securely and efficiently

---

## Test Admin Credentials

- **Route:** /admin
- **Email:** admin@localhost.co.za
- **Password:** P@ssw0rd123

---

## Installation Guide

```bash
git clone https://github.com/MfundoM/contact-system.git
cd contact-system

# Install dependencies
composer install

# Create environment file
cp .env.example .env

# Generate app key
php artisan key:generate

# Configure your .env with DB credentials
# Run migrations
php artisan migrate --seed

# Start the dev server
php artisan serve
npm install && npm run dev
