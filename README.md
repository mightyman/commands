# Terminal-Commands (Laravel Project) - Getting Started

This guide will walk you through the steps to get started with Terminal-Commands (Laravel Project).

## Prerequisites

Before you begin, make sure you have the following installed on your system:
- PHP (>= 8.1)
- Composer
- MySQL or another supported database

## Installation

1. Clone the repository: `git clone https://github.com/mightyman/commands
2. Navigate to the project directory: `cd your-repo`
3. Install the dependencies: `composer install`
4. Copy the example environment file: `cp .env.example .env`
5. Generate an application key: `php artisan key:generate`

## Configuration

1. Open the `.env` file and update the database credentials:

## Database Setup

1. Create an empty database in your MySQL server matching the database name in the `.env` file.

## Running Migrations and Seeds

1. Run the migrations to create the necessary database tables: `php artisan migrate`
2. (Optional) Seed the database with initial data (Operating systems (Linux, Windows, macOS) and Platforms): `php artisan db:seed`

## Start the Development Server

1. Start the development server: `php artisan serve`
2. Visit `http://localhost:8000` in your browser to see the application.
