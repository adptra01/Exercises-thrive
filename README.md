# Proyek Laravel

- Instruksi penyelesaian: Peserta harus menjalankan tugas sesuai instruksi dan mengirimkan hasilnya ke email dalam waktu paling lambat 12 jam dari waktu Exercises diterima.
- Topik-topik tugas: Tugas-tugas meliputi sistem autentikasi, migration dan seeder, blade templating, rute dasar, validasi input form, model eloquent, middleware, tugas yang dijadwalkan, API sederhana, environment variables, keamanan dasar, Laravel Dusk, validasi kustom, dependency injection, dan fungsionalitas "Tambah Produk".

## Instalasi

1. Kloning repositori ini ke komputer lokaldengan menggunakan perintah `git clone https://github.com/adptra01/Exercises-thrive.git`.
2. Masuk ke direktori proyek dengan menggunakan perintah `cd proyek-laravel`.
3. Jalankan perintah `composer install` untuk menginstal dependensi yang dibutuhkan oleh Laravel.
4. Salin file `.env.example` ke file `.env` dengan menggunakan perintah `cp .env.example .env`.
5. Buat kunci aplikasi dengan menggunakan perintah `php artisan key:generate`.
6. Buat basis data MySQL dengan nama `proyek_laravel` dan atur kredensialnya di file `.env`.
7. Jalankan perintah `php artisan migrate` untuk membuat tabel yang dibutuhkan oleh aplikasi.
8. Jalankan perintah `php artisan db:seed` untuk mengisi tabel dengan data awal.
9. Jalankan perintah `php artisan serve` untuk menjalankan server pengembangan lokal.
10. Buka browserdan kunjungi alamat `http://localhost:8000`.

## Tambahkan

1. Validasi Input: Laravel menyediakan fasilitas validasi input dengan mudah dan efisien. Dapat menentukan aturan validasi untuk setiap field input dengan menggunakan fitur validasi bawaan Laravel atau membuat aturan validasi kustom sendiri.

2. Penggunaan Parameterized Query: Laravel menggunakan fitur Eloquent ORM yang secara otomatis menghasilkan parameterized query, sehingga dapat membantu mencegah serangan SQL Injection.

3. Keamanan Session: Laravel menyediakan driver session yang dapat disesuaikan, seperti driver cookie, database, atau cache.dapat mengatur waktu kadaluarsa sesi dan memastikan bahwa token sesi tidak dapat diprediksi atau dicuri.

4. Perlindungan terhadap Serangan Cross-Site Request Forgery (CSRF): Laravel menyediakan fitur CSRF protection dengan token CSRF yang dihasilkan secara otomatis dan dapat digunakan dalam form HTML atau AJAX.

5. Enkripsi Data: Laravel menyediakan fasilitas enkripsi data dengan mudah menggunakan fitur bawaan Laravel seperti encrypt() dan decrypt() serta bcrypt().

6. Perlindungan terhadap Serangan Cross-Site Scripting (XSS): Laravel secara otomatis melakukan sanitasi data yang dimasukkan oleh pengguna sebelum menampilkannya di halaman web, sehingga mencegah pengeksekusian kode JavaScript yang tidak sah.

7. Update Sistem dan Framework: Pastikan selalu memperbarui versi Laravel dan paket-paket dependensinya ke versi terbaru yang mengandung perbaikan keamanan.

8. Pengujian Keamanan: Lakukan pengujian keamanan secara teratur untuk mengidentifikasi kerentanan potensial dan melakukan perbaikan yang diperlukan.

8. Proteksi terhadap Serangan Brute Force: Terapkan kebijakan pembatasan percobaan login dengan menggunakan paket keamanan seperti Laravel Throttle atau Lockout.

## Tambahkan

1. 'php artisan schedule:work' untuk menjalankan Tugas (Task Scheduling) untuk menghapus isi pada file '/storage/logs/laravel.log'.
2. Akses api dari 'http://127.0.0.1:8000/api/products' untuk mendapatkan data produk dalam bentuk json.

