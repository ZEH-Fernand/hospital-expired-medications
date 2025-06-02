# Sistema de control de medicamentos caducos

Este sistema está desarrollado en **Laravel 12** y tiene como objetivo llevar un control de medicamentos, enfocándose en su fecha de caducidad dentro de un entorno hospitalario.

## 🚀 Funcionalidades actuales

- CRUD de medicamentos
- Visualización de medicamentos caducados o por caducar (próximos 30 días)

## 📦 Requisitos

- PHP 8.1 o superior
- Composer
- MySQL
- Apache (o cualquier servidor compatible con PHP)

## ⚙️ Instalación

```bash
git clone git@github.com:ZEH-Fernand/hospital-expired-medications.git
cd hospital-expired-medications
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
