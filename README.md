# Gantlab Portfolio

Portfolio programisty – Laravel, Flutter, aplikacje webowe.

## Funkcjonalności

- ✅ Strona główna z projektami
- ✅ Strona Satori (landing page)
- ✅ Strona Oferta
- ✅ Formularz kontaktowy
- ✅ Admin panel (CRUD projektów)
- ✅ Middleware dla admina (prosty auth)
- ✅ Sitemap XML
- ✅ Przełączanie języków (PL/EN)

## Wymagania

- PHP 8.2+
- Composer
- Node.js & npm
- SQLite (lub MySQL/PostgreSQL)

## Instalacja

```bash
# Klonuj repozytorium
git clone https://github.com/yourusername/gantlab-portfolio.git
cd gantlab-portfolio

# Zainstaluj zależności
composer install
npm install

# Konfiguracja
cp .env.example .env
php artisan key:generate

# Baza danych
touch database/database.sqlite
php artisan migrate
php artisan db:seed

# Build assets
npm run build

# Uruchom serwer
php artisan serve
```

Aplikacja będzie dostępna pod: `http://localhost:8000`

## Development

```bash
# Tryb developerski (z hot reload)
composer dev
```

To uruchomi:
- PHP server (`localhost:8000`)
- Queue listener
- Vite dev server (hot reload dla CSS/JS)

## Admin Panel

Dostęp do panelu admina:
```
http://localhost:8000/admin/projects?password=admin123
```

Zmień hasło w `.env`:
```env
ADMIN_PASSWORD=your_secure_password
```

## Deployment

Zobacz szczegółowy przewodnik: [DEPLOYMENT.md](DEPLOYMENT.md)

### Quick Deploy (Heroku)

```bash
# Login
heroku login

# Utwórz app
heroku create your-app-name

# Ustaw env variables
heroku config:set APP_KEY=$(php artisan key:generate --show)
heroku config:set ADMIN_PASSWORD=your_password

# Deploy
git push heroku main
heroku run php artisan migrate --force
```

## Struktur projektu

```
app/
├── Http/
│   ├── Controllers/
│   │   ├── HomeController.php
│   │   ├── ContactController.php
│   │   └── Admin/ProjectController.php
│   └── Middleware/
│       └── AdminAuth.php
├── Models/
│   ├── Project.php
│   ├── Contact.php
│   └── Page.php
resources/
├── views/
│   ├── welcome.blade.php
│   ├── sitemap.blade.php
│   ├── pages/
│   ├── admin/
│   └── components/
routes/
└── web.php
```

## Testing

```bash
composer test
```

## License

MIT

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.


## License

MIT
