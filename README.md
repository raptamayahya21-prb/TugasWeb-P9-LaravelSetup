# Laravel Setup — Tugas Pertemuan 9: Setup & Dasar Routing Blade

Repositori ini berisi implementasi lengkap **Tugas Rutin 9 — Setup Laravel** pada mata kuliah Pemrograman Web. Proyek ini dibangun menggunakan framework **Laravel 11**, **PHP 8.x**, **Tailwind CSS** (via CDN & styling modern), serta pengujian otomatis (**Automated Feature Tests**). Memenuhi seluruh kriteria wajib (**8/8 Requirements**) serta seluruh fitur bonus (**2/2 Bonus**) termasuk routing kustom, rendering view Blade dengan data dinamis, pemanfaatan Artisan CLI generator, pengujian otomatis, serta dokumentasi struktur direktori berstandar industri.

- **Repository**: [https://github.com/raptamayahya21-prb/TugasWeb-P9-LaravelSetup](https://github.com/raptamayahya21-prb/TugasWeb-P9-LaravelSetup)

---

## 📋 Pemenuhan Kriteria Tugas (Tugas Rutin 9 — Setup Laravel)

Berikut matriks pemenuhan lengkap terhadap seluruh kriteria wajib (**8/8 Requirements**) serta seluruh fitur bonus (**2/2 Bonus**):

### ✅ Matriks Kesesuaian Kriteria Wajib (8/8)

| No | Kriteria Wajib | Status | Bukti & Lokasi Implementasi dalam Proyek |
|:--:|:---|:---:|:---|
| 1 | **Install Composer & buat project (`composer create-project`)** | ✅ **Terpenuhi** | Inisialisasi proyek Laravel dengan Composer. Bukti tangkapan layar instalasi Composer ([`docs/composer-installed.png`](docs/composer-installed.png)) dan proses pembuatan proyek ([`docs/project-creation.png`](docs/project-creation.png)). |
| 2 | **Buat DB di phpMyAdmin & konfigurasi `.env` (MySQL)** | ✅ **Terpenuhi** | Konfigurasi database MySQL pada berkas [`.env`](.env) (`DB_DATABASE=myproduct_db`), dibuktikan dengan screenshot konfigurasi dan database di phpMyAdmin ([`docs/configured-env-for-db-conn.png`](docs/configured-env-for-db-conn.png)). |
| 3 | **`artisan serve` berjalan + screenshot welcome page** | ✅ **Terpenuhi** | Server lokal berhasil dijalankan dengan `php artisan serve` ([`docs/artisan-serve.png`](docs/artisan-serve.png)) dan tampilan browser halaman welcome default terpasang rapi ([`docs/welcome-page.png`](docs/welcome-page.png)). |
| 4 | **3 route custom (`/`, `/about`, `/contact`) return Blade view** | ✅ **Terpenuhi** | Didefinisikan pada [`routes/web.php`](routes/web.php) yang merender view [`resources/views/welcome.blade.php`](resources/views/welcome.blade.php), [`resources/views/about.blade.php`](resources/views/about.blade.php), dan [`resources/views/contact.blade.php`](resources/views/contact.blade.php). Teruji mengembalikan HTTP status 200 OK di [`tests/Feature/RequirementTest.php`](tests/Feature/RequirementTest.php). |
| 5 | **View menampilkan data dinamis (array dari route)** | ✅ **Terpenuhi** | Rute `/about` mengirimkan integer dinamis acak (`['x' => random_int(1, 10)]`), rute `/contact` mengirimkan associative array identitas diri, dan view mencetak data melalui direktif Blade `@for` dan `@foreach`. Diuji secara komprehensif pada [`tests/Feature/RequirementTest.php`](tests/Feature/RequirementTest.php). |
| 6 | **Gunakan `make:controller` & `make:model -m` minimal 1x** | ✅ **Terpenuhi** | Membuat controller [`app/Http/Controllers/ProductController.php`](app/Http/Controllers/ProductController.php) via `php artisan make:controller` dan model [`app/Models/Product.php`](app/Models/Product.php) beserta berkas migrasinya [`database/migrations/xxxx_create_products_table.php`](database/migrations/) via `php artisan make:model Product -m` ([`docs/artisan-usage.png`](docs/artisan-usage.png)). |
| 7 | **README: langkah install + penjelasan struktur folder** | ✅ **Terpenuhi** | Dokumentasi lengkap alur instalasi, instruksi eksekusi, serta penjabaran hierarki struktur direktori proyek tercantum secara rinci pada berkas ini ([`README.md`](README.md)). |
| 8 | **Repo: `TugasWeb-P9-LaravelSetup`** | ✅ **Terpenuhi** | Proyek di-push ke GitHub dengan penamaan repositori sesuai ketentuan: [`raptamayahya21-prb/TugasWeb-P9-LaravelSetup`](https://github.com/raptamayahya21-prb/TugasWeb-P9-LaravelSetup). |

---

### ⭐ Matriks Kesesuaian Fitur Bonus (2/2)

| No | Fitur Bonus | Status | Bukti & Lokasi Implementasi dalam Proyek |
|:--:|:---|:---:|:---|
| 1 | **Styling welcome / view dengan Tailwind CDN** | ✅ **Terpenuhi** | Seluruh tampilan Blade (`welcome.blade.php`, `about.blade.php`, `contact.blade.php`, `hello.blade.php`) dihias menggunakan **Tailwind CSS** untuk tampilan yang modern, elegan, dan responsif. |
| 2 | **Route parameter `/hello/{nama}`** | ✅ **Terpenuhi** | Didefinisikan pada [`routes/web.php`](routes/web.php) yang menangkap segmen URL dinamis `{nama}` dan merendernya pada view [`resources/views/hello.blade.php`](resources/views/hello.blade.php). Teruji secara otomatis dengan pengujian berbagai variasi nama pada [`tests/Feature/RequirementTest.php`](tests/Feature/RequirementTest.php). |

---

## 🧪 Pengujian Otomatis (Automated Testing)

Proyek ini dilengkapi suite pengujian otomatis pada [`tests/Feature/RequirementTest.php`](tests/Feature/RequirementTest.php) untuk memvalidasi seluruh kriteria tugas:

```bash
php artisan test
```

### Hasil Pengujian:
```text
   PASS  Tests\Unit\ExampleTest
  ✓ that true is true

   PASS  Tests\Feature\ExampleTest
  ✓ the application returns a successful response

   PASS  Tests\Feature\RequirementTest
  ✓ kriteria 4 rute utama mengembalikan respon 200 dan view welcome
  ✓ kriteria 4 rute about mengembalikan respon 200 dan view about
  ✓ kriteria 4 rute contact mengembalikan respon 200 dan view contact
  ✓ kriteria 5 rute about mengirimkan data dinamis x
  ✓ kriteria 5 rute contact mengirimkan data dinamis array
  ✓ bonus 2 rute parameter hello nama

  Tests:    8 passed (39 assertions)
  Duration: 0.66s
```

---

## 🚀 Panduan Menjalankan Proyek Secara Lokal

### 1. Kloning Repositori
```bash
git clone https://github.com/raptamayahya21-prb/TugasWeb-P9-LaravelSetup.git
cd TugasWeb-P9-LaravelSetup
```

### 2. Instalasi Dependensi
```bash
composer install
```

### 3. Konfigurasi Environment & Application Key
Salin template konfigurasi `.env` dan generate Application Encryption Key:
```bash
cp .env.example .env
php artisan key:generate
```

Sesuaikan konfigurasi database pada `.env`:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=myproduct_db
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Storage Link & Menjalankan Migrasi Database
```bash
php artisan storage:link
php artisan migrate
```

### 5. Menjalankan Server Pengembangan
```bash
php artisan serve
```

Buka browser dan kunjungi:
- **Welcome Page**: [http://127.0.0.1:8000](http://127.0.0.1:8000)
- **About Page (Data Dinamis Random `x`)**: [http://127.0.0.1:8000/about](http://127.0.0.1:8000/about)
- **Contact Page (Data Dinamis Array)**: [http://127.0.0.1:8000/contact](http://127.0.0.1:8000/contact)
- **Hello Parameter (Bonus Route Parameter)**: [http://127.0.0.1:8000/hello/Rapta](http://127.0.0.1:8000/hello/Rapta)

---

## 📂 Penjelasan Struktur Folder & Direktori Proyek

Berikut susunan arsitektur direktori proyek Laravel beserta peran fungsional setiap komponennya:

```text
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       ├── Controller.php            # Base controller Laravel
│   │       └── ProductController.php     # Controller dari 'php artisan make:controller' (Kriteria 6)
│   └── Models/
│       ├── Product.php                   # Model Eloquent dari 'make:model Product -m' (Kriteria 6)
│       └── User.php                      # Model otentikasi user bawaan
├── bootstrap/
│   └── app.php                           # Konfigurasi routing, middleware, dan exception handler
├── config/                               # Berkas konfigurasi aplikasi (app, database, session, dll.)
├── database/
│   ├── factories/                        # Model factories untuk testing data
│   ├── migrations/                       # Skema migrasi database (users, cache, jobs, products)
│   └── seeders/                          # Database seeders
├── docs/                                 # Tangkapan layar bukti pemenuhan kriteria penugasan
│   ├── SCREENSHOT_GUIDE.md               # Panduan nama dan isi file screenshot
│   ├── composer-installed.png            # Bukti instalasi Composer (Kriteria 1)
│   ├── project-creation.png              # Bukti pembuatan proyek Laravel via Composer (Kriteria 1)
│   ├── configured-env-for-db-conn.png    # Bukti konfigurasi .env & koneksi database (Kriteria 2)
│   ├── artisan-serve.png                 # Bukti eksekusi 'php artisan serve' (Kriteria 3)
│   ├── welcome-page.png                  # Bukti tampilan welcome page browser (Kriteria 3)
│   └── artisan-usage.png                 # Bukti penggunaan 'make:controller' & 'make:model' (Kriteria 6)
├── public/
│   ├── index.php                         # Front controller HTTP entry point
│   ├── robots.txt                        # Pengaturan crawler mesin pencari
│   └── storage/                          # Symlink ke storage/app/public
├── resources/
│   ├── css/                              # Entry point stylesheet
│   ├── js/                               # Entry point JavaScript
│   └── views/                            # Template Blade aplikasi
│       ├── about.blade.php               # View About dengan perulangan dinamis $x (Kriteria 4 & 5)
│       ├── contact.blade.php             # View Contact dengan iterasi array $data (Kriteria 4 & 5)
│       ├── hello.blade.php               # View sapaan dinamis parameter URL (Bonus 2)
│       └── welcome.blade.php             # View welcome dengan Tailwind styling (Kriteria 3 & Bonus 1)
├── routes/
│   ├── console.php                       # Definisi perintah artisan closure console
│   └── web.php                           # Definisi rute HTTP (/, /about, /contact, /hello/{nama})
├── storage/                              # Direktori penyimpanan file upload, log, dan cache
├── tests/
│   ├── Feature/
│   │   ├── ExampleTest.php               # Contoh feature test bawaan
│   │   └── RequirementTest.php           # Pengujian komprehensif Kriteria 4, 5, dan Bonus 2
│   └── Unit/
│       └── ExampleTest.php               # Contoh unit test bawaan
├── .editorconfig                         # Standarisasi format editor
├── .env.example                          # Templat environment variable
├── artisan                               # Antarmuka CLI bawaan Laravel
├── composer.json                         # Dependensi PHP & script Composer
├── package.json                          # Dependensi frontend
├── phpunit.xml                           # Konfigurasi runner test PHPUnit
└── vite.config.js                        # Konfigurasi bundler Vite
```
