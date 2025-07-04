
# User Management System (Laravel 12 + Filament)

Sistem manajemen user modern berbasis Laravel 12 & Filament. Mendukung RBAC, menu dinamis, audit trail, dan UI admin yang responsif. Cocok untuk aplikasi multi-platform, bisnis, dan organisasi.

---
## Author
- **Author** : Kusuma Dewangga (@sukasapi)
- **Date Create** : 08.11.2024
- **Git Date** : 04.07.2025
- **Site** : kerjabareng.my.id
## Fitur Utama
- **Landing Page**: Halaman depan modern, responsif, dengan menu, banner, about, portofolio, artikel, dan footer.
- **Panel Admin Filament**: UI admin powerful, responsif (web/tablet/mobile), berbasis Blade & Tailwind.
- **User Management**: CRUD user, assign multi-role, reset password.
- **Role & Permission Management**: CRUD role, assign permission ke role.
- **Menu Management**: CRUD menu hirarki, assign akses ke role/permission.
- **Audit Trail**: Log aktivitas user otomatis (login, CRUD, dsb).
- **RBAC**: Role-Based Access Control, menu & fitur dinamis sesuai role.
- **Keamanan**: Validasi input, proteksi CSRF, audit trail, pembatasan akses, dan best practice Laravel.

---

## Cara Akses
- **Landing Page**: [http://localhost:8000/](http://localhost:8000/)
- **Panel Admin**: [http://localhost:8000/admin](http://localhost:8000/admin)

### Akun Default (Seeder)
- **Superadmin**:  
  - username/email: `superadmin` / `superadmin@example.com`  
  - password: `1234qwer`
- **Admin**:  
  - username/email: `admin` / `admin@example.com`  
  - password: `1234qwer`
- **User**:  
  - username/email: `user` / `user@example.com`  
  - password: `1234qwer`

---

## Instalasi & Setup
1. **Clone & Install**
   ```bash
   composer install
   npm install
   cp .env.example .env
   php artisan key:generate
   # Edit .env sesuai kebutuhan (DB, APP_URL, dsb)
   php artisan migrate --seed
   npm run dev
   php artisan serve
   ```
2. **Akses**
   - Buka `/` untuk landing page
   - Buka `/admin` untuk panel admin Filament

---

## Teknologi
- Laravel 12
- Filament v3 (Blade, Livewire, Tailwind)
- Sanctum (API, jika dibutuhkan)
- MySQL/MariaDB

---

## Struktur Fitur
- **resources/views/landing.blade.php** — Landing page
- **app/Filament/Resources/** — Resource admin (User, Role, Menu, ActivityLog)
- **app/Models/** — Model utama (User, Role, Permission, Menu, ActivityLog)
- **database/seeders/** — Seeder role, user, menu, permission

---

## Catatan
- Semua fitur admin hanya bisa diakses user dengan role Superadmin/Admin.
- Semua input tervalidasi dan aman dari XSS/CSRF.
- Audit trail otomatis aktif untuk semua aktivitas user.


## Database
- feel free contact me for the database by send email to angganteng@gmail.com -
- or **just run seeder** -

## Lisensi
MIT — Bebas digunakan dan dikembangkan.
