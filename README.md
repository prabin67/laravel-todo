# Laravel Todo Application — Internship Task

A simple **Todo Application** built using **Laravel**, following the **Actions Pattern**, with proper code formatting using **Laravel Pint** and code refactoring using **PHP Rector**.

This project demonstrates:
- Clean architecture (Actions Pattern)
- Proper Git branching workflow

---

## Requirements

- PHP >= 8.1
- Composer
- Laravel >= 10
- MySQL
- Node.js & npm (for frontend assets, optional)

---

## Features

- Create Todo
- Edit / Update Todo
- Delete Todo
- Mark Complete / Incomplete
- Validation
- Blade Components


## Setup Instructions

1. Clone Repository
  ```bash
    git clone https://github.com/prabin67/laravel-todo-actions.git
    cd laravel-todo-actions
  ```
2. Install Dependencies
   ```bash
    composer install
    npm install
    npm run dev 
    ```
3. Setup Environment
    Copy `.env.example` to `.env` and generate the app key:
    ```bash
    cp .env.example .env
    php artisan key:generate
    ```
    Then update your database details in `.env`:
    ```
    DB_DATABASE=todo_app
    DB_USERNAME=root
    DB_PASSWORD=
    ```

    After ubdating on .env file run the migration on your terminal
    ```bash
    php artisan migrate
    ```
    After that start the local server
    ```bash
    php artisan serve
    ```

    Visit:  
    `http://127.0.0.1:8000`
