# Medium Blog - PHP Singleton Example

This is a simple medium-sized blog management app built in PHP, using the Singleton design pattern for configuration and database access.

## Features

- Article listing and creation
- PSR-4 autoloading via Composer
- `.env` environment variable support
- Singleton pattern for database and config handling
- MySQL database connection

## Requirements

- PHP >= 8.0
- Composer
- MySQL

## Setup

```bash
git clone https://github.com/your-username/medium-blog-php-singleton.git
cd medium-blog-php-singleton
composer install
cp .env.example .env
