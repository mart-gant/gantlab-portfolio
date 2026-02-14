# Gantlab Portfolio - Deployment Guide

## Wymagania
- PHP 8.2+
- Composer
- Node.js & npm
- SQLite lub MySQL/PostgreSQL

## Deployment na Heroku

### 1. Przygotowanie
```bash
# Zainstaluj Heroku CLI
# https://devcenter.heroku.com/articles/heroku-cli

# Zaloguj się
heroku login
```

### 2. Utwórz aplikację
```bash
heroku create your-app-name
```

### 3. Ustaw zmienne środowiskowe
```bash
heroku config:set APP_NAME="Gantlab Portfolio"
heroku config:set APP_ENV=production
heroku config:set APP_DEBUG=false
heroku config:set APP_KEY=$(php artisan key:generate --show)
heroku config:set APP_URL=https://your-app-name.herokuapp.com

# Admin password
heroku config:set ADMIN_PASSWORD=your_secure_password

# Database (Heroku automatycznie dodaje DATABASE_URL dla Postgres)
heroku addons:create heroku-postgresql:essential-0

# Mail (opcjonalnie - Mailgun, SendGrid, etc.)
# heroku config:set MAIL_MAILER=smtp
# heroku config:set MAIL_HOST=smtp.mailgun.org
# heroku config:set MAIL_PORT=587
# heroku config:set MAIL_USERNAME=your_username
# heroku config:set MAIL_PASSWORD=your_password
```

### 4. Deploy
```bash
git push heroku main

# Uruchom migracje
heroku run php artisan migrate --force

# Uruchom seeders (opcjonalnie)
heroku run php artisan db:seed --force
```

### 5. Dostęp do admin panelu
```
https://your-app-name.herokuapp.com/admin/projects?password=your_secure_password
```

---

## Deployment na VPS/Shared Hosting

### 1. Przygotowanie plików
```bash
# Build assets
npm install
npm run build

# Install dependencies (production only)
composer install --optimize-autoloader --no-dev
```

### 2. Upload plików
- Uploaduj wszystkie pliki do serwera
- Upewnij się, że `public/` jest document root

### 3. Konfiguracja .env
```bash
cp .env.example .env
php artisan key:generate
```

Edytuj `.env`:
```env
APP_ENV=production
APP_DEBUG=false
APP_URL=https://your-domain.com
ADMIN_PASSWORD=your_secure_password

# Database
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### 4. Uprawnienia
```bash
chmod -R 755 storage bootstrap/cache
```

### 5. Migracje
```bash
php artisan migrate --force
php artisan db:seed --force
```

---

## Deployment na Laravel Forge

1. Połącz serwer z Forge
2. Utwórz nową stronę
3. Deploy ze swojego repozytorium Git
4. Ustaw zmienne środowiskowe w panelu Forge
5. Uruchom deployment script

---

## Po Deployment

### Optymalizacja cache
```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
```

### Czyszczenie cache
```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

---

## Security Checklist

- ✅ `APP_DEBUG=false` w production
- ✅ Zmień `ADMIN_PASSWORD` na silne hasło
- ✅ Włącz HTTPS
- ✅ Zmień `APP_KEY`
- ✅ Ustaw odpowiednie uprawnienia (755/644)
- ✅ Ukryj folder `.git` przed dostępem web
- ✅ Backup bazy danych regularnie

---

## Troubleshooting

### Error 500
```bash
php artisan config:clear
chmod -R 755 storage bootstrap/cache
```

### CSS/JS nie działa
```bash
npm run build
php artisan view:clear
```

### Database issues
```bash
php artisan migrate:fresh --force
php artisan db:seed --force
```
