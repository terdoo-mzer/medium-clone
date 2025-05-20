# Medium Clone (Laravel 11)

A simple Medium-style blogging platform built with Laravel 10. This project is part of a coding interview preparation and is still a work in progress. It currently supports user authentication and basic post creation and display.

## ✨ Features Implemented

- User Registration and Login
- Create Posts
- View All Posts (Listing Page)

## 🔧 Features Coming Soon

- Post Details Page
- Edit and Delete Posts
- Update User Profile
- Follow Author
- Post Like and Unlike
- User-specific Post Management
- Tags/Categories
- Responsive UI with Tailwind CSS

## 🚀 Getting Started

Follow the steps below to set up the project locally.

### 1. Clone the repository

```bash
git clone https://github.com/terdoo-mzer/medium-clone
cd your-repo
```

### 2. Install PHP and JavaScript dependencies

```bash
composer install
npm install
```

### 3. Create and configure your `.env` file

```bash
cp .env.example .env
php artisan key:generate
```

Edit `.env` and update your database credentials.

### 4. Run database migrations

```bash
php artisan migrate
```

### 5. Start the development server

```bash
php artisan serve
```

### 6. (Optional) Compile frontend assets (if using Vite or Laravel Mix)

```bash
npm run dev
```

## 🧰 Tech Stack

* Laravel 11
* Blade Templates
* Laravel Breeze (for authentication)
* SQLite
* Vite (for frontend build)
* Tailwind CSS 

## 📂 Directory Structure Highlights

* `routes/web.php` – Main web routes
* `app/Http/Controllers/` – App logic
* `resources/views/` – Blade templates
* `database/migrations/` – DB schema

## ⚠️ Important Notes

* **`.env` is NOT committed** – use `.env.example` as a starting point
* `vendor/` and `node_modules/` are ignored (as expected)
* `package-lock.json` and `composer.lock` are included for version consistency

## 📝 License

This project is open-source and available under the [MIT License](LICENSE).

---

> Built as part of a personal learning journey

```


