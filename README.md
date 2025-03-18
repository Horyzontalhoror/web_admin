Laravel untuk Admin

Langkah-Langkah Instalasi

1. Instal Dependensi dengan Composer
Setelah berada di dalam direktori proyek Laravel, jalankan perintah berikut untuk menginstal semua dependensi yang terdaftar di file `composer.json`:

```bash
composer install
```
Perintah ini akan mengunduh dan menginstal semua dependensi yang diperlukan untuk menjalankan proyek Laravel.

2. Buat File .env
Di dalam proyek Laravel, ada file bernama .env.example. Kamu perlu menyalinnya menjadi file .env, yang akan digunakan untuk menyimpan konfigurasi aplikasi seperti database, cache, dan lain-lain.

Jalankan perintah berikut untuk menyalin file .env.example menjadi .env:
```bash
cp .env.example .env
```
3. Instal Dependensi Frontend (Jika Diperlukan)
Jika proyek Laravel kamu menggunakan dependensi frontend seperti npm (misalnya, untuk Bootstrap, Vue.js, atau React), kamu perlu menginstalnya juga.

Jalankan perintah berikut untuk menginstal dependensi frontend menggunakan npm (Node Package Manager):
```bash
npm install
```
4. Migrasi Database (Jika Ada)
Jika proyek Laravel menggunakan database dan memiliki migrasi, kamu perlu menjalankan migrasi untuk membuat tabel yang diperlukan di database.

Jalankan perintah berikut untuk menjalankan migrasi database:
```bash
php artisan migrate
```
Jika kamu menggunakan database yang belum ada atau belum diatur, pastikan kamu sudah mengonfigurasi database di file .env sebelum menjalankan migrasi.

5. Menjalankan Aplikasi Laravel
Setelah semua dependensi diinstal dan migrasi database (jika ada) berhasil, kamu dapat menjalankan server lokal Laravel menggunakan perintah Artisan berikut:

```bash
php artisan serve
```
Aplikasi akan berjalan di http://localhost:8000 secara default.