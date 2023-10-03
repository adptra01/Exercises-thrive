# Proyek Laravel

- Tugas praktis Laravel: Dokumen ini berisi 15 soal yang harus diselesaikan dalam lingkungan Laravel. Soal-soal ini menguji kemampuan pengembangan web dengan Laravel.
- Instruksi penyelesaian: Peserta harus menjalankan tugas sesuai instruksi dan mengirimkan hasilnya ke email dalam waktu paling lambat 12 jam dari waktu Exercises diterima.
- Topik-topik tugas: Tugas-tugas meliputi sistem autentikasi, migration dan seeder, blade templating, rute dasar, validasi input form, model eloquent, middleware, tugas yang dijadwalkan, API sederhana, environment variables, keamanan dasar, Laravel Dusk, validasi kustom, dependency injection, dan fungsionalitas "Tambah Produk".

## Instalasi

Untuk menginstal proyek ini, Anda perlu melakukan beberapa langkah berikut:

1. Kloning repositori ini ke komputer lokal Anda dengan menggunakan perintah `git clone https://github.com/username/proyek-laravel.git`.
2. Masuk ke direktori proyek dengan menggunakan perintah `cd proyek-laravel`.
3. Jalankan perintah `composer install` untuk menginstal dependensi yang dibutuhkan oleh Laravel.
4. Salin file `.env.example` ke file `.env` dengan menggunakan perintah `cp .env.example .env`.
5. Buat kunci aplikasi dengan menggunakan perintah `php artisan key:generate`.
6. Buat basis data MySQL dengan nama `proyek_laravel` dan atur kredensialnya di file `.env`.
7. Jalankan perintah `php artisan migrate` untuk membuat tabel yang dibutuhkan oleh aplikasi.
8. Jalankan perintah `php artisan db:seed` untuk mengisi tabel dengan data awal.
9. Jalankan perintah `php artisan serve` untuk menjalankan server pengembangan lokal.
