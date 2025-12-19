# Profile SMK Al-Basyariah - Laravel CMS

Website Profil Sekolah SMK Al-Basyariah yang dibangun menggunakan Laravel 11 dan Filament CMS 3. Proyek ini menggantikan versi statis sebelumnya dengan sistem yang lebih dinamis, modern, dan mudah dikelola.

## 🚀 Fitur Utama

- **Landing Page Modern**: Desain premium menggunakan Tailwind CSS dengan animasi scroll (AOS).
- **CMS Berita (Filament)**: Dashboard admin untuk mengelola berita, pengumuman, dan prestasi sekolah tanpa menyentuh kode.
- **Halaman Detail Berita**: Fitur baca selengkapnya untuk konten berita yang lebih mendalam.
- **Desain Responsif**: Tampilan optimal di berbagai perangkat (Mobile, Tablet, Desktop).
- **SEO Friendly**: Struktur HTML semantik dan meta tags dasar.

## 🛠️ Tech Stack

- **Backend**: [Laravel 11](https://laravel.com)
- **CMS**: [Filament v3](https://filamentphp.com)
- **Frontend**: Tailwind CSS & Blade Templating
- **Database**: MySQL
- **Animasi**: AOS (Animate On Scroll)

## 📋 Prasyarat

- PHP >= 8.2
- Composer
- PHP Extension: `intl` (Sangat disarankan untuk fitur penuh Filament)

## ⚙️ Instalasi

1. **Clone Repositori**:
   ```bash
   git clone https://github.com/mohrgg/profilalbasyariah.git
   cd profilalbasyariah
   ```

2. **Instal Dependensi**:
   ```bash
   composer install
   npm install && npm run build
   ```

3. **Konfigurasi Environment**:
   Salin `.env.example` menjadi `.env` dan sesuaikan kredensial database Anda.
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Migrasi Database**:
   ```bash
   php artisan migrate
   ```

5. **Storage Link**:
   ```bash
   php artisan storage:link
   ```

6. **Jalankan Aplikasi**:
   ```bash
   php artisan serve
   ```

## 🔐 Akses Admin

Gunakan kredensial berikut untuk masuk ke portal admin (`/admin`):
- **URL**: `http://localhost:8000/admin`
- **Default Email**: `admin@admin.com`
- **Default Password**: `password`

## 📄 Lisensi

Proyek ini dibuat untuk keperluan profil sekolah SMK Al-Basyariah.
