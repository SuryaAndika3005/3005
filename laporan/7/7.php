<?php
  include '../../navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Konfigurasi Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../../style.css" />
</head>

<body>
  <!-- Main Content -->
  <div class="container-fluid px-4 py-4">
    <div class="container-custom  mb-5">
      <a href="../../index.php" class="back-btn"><i class="fas fa-arrow-left"></i></a>
      <div class="container">
        <span class="badge badge-info mb-2">Laporan Praktikum</span>
        <p class="text-muted">20 Mei 2025 ~ Oleh <strong>Surya Andika</strong></p>
            <h1 class="section-title">Pendahuluan</h1>
            <p>Laravel merupakah satu framework PHP yang populer yang dikembangkan oleh Taylor Otwell. Laravel merupakan proyek open source yang digunakan untuk mengembangkan aplikasi berbasis web dengan arsitektur MVC (Model – View – Controller). Beberapa fitur yang tersedia pada Laravel :</p>
        <ul class="list-group mb-4">
            <li class="list-group-item"><strong>Eloquent ORM (Object-Relational Mapping):</strong> Memudahkan interaksi dengan database menggunakan sintaks PHP yang intuitif. Anda dapat mendefinisikan model untuk setiap tabel database dan melakukan operasi CRUD (Create, Read, Update, Delete) dengan mudah. Eloquent juga mendukung relasi antar tabel (one-to-one, one-to-many, many-to-many).</li>
            <li class="list-group-item"><strong>Blade Templating Engine:</strong> Sistem templating yang sederhana namun powerful, memungkinkan Anda menggunakan sintaks PHP dalam template HTML dengan cara yang bersih dan aman. Blade menyediakan direktif-direktif seperti @if, @foreach, @extends, @yield, dan komponen untuk membuat tampilan dinamis.</li>
            <li class="list-group-item"><strong>Artisan Console:</strong> Command-line interface (CLI) yang disertakan dengan Laravel. Artisan menyediakan banyak perintah berguna untuk otomatisasi tugas-tugas umum seperti membuat model, migration, controller, seeder, menjalankan pengujian, membersihkan cache, dan banyak lagi.</li>
            <li class="list-group-item"><strong>Routing:</strong> Sistem perutean yang fleksibel memungkinkan Anda mendefinisikan URL aplikasi Anda dan mengaitkannya dengan controller atau closure functions. Laravel mendukung berbagai jenis rute dan middleware untuk mengontrol akses.</li>
            <li class="list-group-item"><strong>Form Request Validation:</strong> Memudahkan proses validasi data yang dikirim melalui form. Anda dapat membuat kelas Form Request khusus dengan aturan validasi yang jelas dan Laravel akan secara otomatis menangani proses validasi dan menampilkan pesan kesalahan.</li>
            <li class="list-group-item"><strong>Security:</strong> Laravel dibangun dengan mempertimbangkan keamanan. Beberapa fitur keamanan bawaan meliputi proteksi terhadap CSRF (Cross-Site Request Forgery), XSS (Cross-Site Scripting), dan SQL injection.</li>
            <li class="list-group-item"><strong>Authentication & Authorization:</strong> Menyediakan sistem otentikasi (login, registrasi, lupa kata sandi) dan otorisasi (hak akses pengguna) yang mudah diimplementasikan. Laravel Breeze dan Jetstream menyediakan scaffolding UI untuk fitur-fitur ini.</li>
            <li class="list-group-item"><strong>Testing:</strong> Dukungan bawaan untuk berbagai jenis pengujian, termasuk unit testing, integration testing, dan end-to-end testing. Laravel menyediakan helper functions dan assertion methods untuk memudahkan penulisan tes.</li>
            <li class="list-group-item"><strong>Queues:</strong> Sistem antrian yang memungkinkan Anda menunda tugas-tugas yang memakan waktu (seperti pengiriman email atau pemrosesan data) dan menjalankannya di latar belakang. Ini meningkatkan responsivitas aplikasi Anda.</li>
            <li class="list-group-item"><strong>Caching:</strong> Mendukung berbagai sistem caching (seperti Redis, Memcached, file) untuk meningkatkan performa aplikasi dengan menyimpan data yang sering diakses dalam memori.</li>
            <li class="list-group-item"><strong>Events & Listeners:</strong> Implementasi dari pola Observer, memungkinkan Anda membuat event dan listener untuk menjalankan kode tertentu ketika event tersebut terjadi dalam aplikasi Anda.</li>
            <li class="list-group-item"><strong>Notifications:</strong>  Memudahkan pengiriman notifikasi ke berbagai saluran, seperti email, SMS, database, atau layanan pihak ketiga.</li>
            <li class="list-group-item"><strong>Broadcasting:</strong> Memungkinkan Anda melakukan siaran event secara real-time melalui WebSockets. Ini berguna untuk fitur seperti live chat atau notifikasi real-time.</li>
            <li class="list-group-item"><strong>Task Scheduling:</strong> Memungkinkan Anda menjadwalkan tugas-tugas cron menggunakan sintaks yang ekspresif dalam kode PHP Anda.</li>
            <li class="list-group-item"><strong>Passport(OAuth2 Server):</strong> Paket resmi untuk mengimplementasikan otentikasi OAuth2, memungkinkan aplikasi Anda menjadi penyedia otentikasi untuk aplikasi lain.</li>
            <li class="list-group-item"><strong>Sanctum (API Authentication):</strong> Paket ringan untuk mengimplementasikan sistem otentikasi berbasis token untuk Single-Page Applications (SPAs), mobile applications, dan simple APIs.</li>
            <li class="list-group-item"><strong>Socialite (Social Authentication):</strong> Memudahkan integrasi otentikasi dengan berbagai penyedia layanan OAuth seperti Facebook, Twitter, Google, dan lainnya.</li>
            <li class="list-group-item"><strong>Filesystem:</strong>  Abstraksi untuk berinteraksi dengan berbagai sistem penyimpanan file, baik lokal maupun cloud (seperti Amazon S3 atau Google Cloud Storage).</li>
            <li class="list-group-item"><strong>Mail:</strong> Memudahkan pengiriman email dengan dukungan untuk berbagai driver seperti SMTP, Mailgun, dan Amazon SES.</li>
            <li class="list-group-item"><strong>Pusher (Realtime Services):</strong> Integrasi mudah dengan layanan Pusher untuk menambahkan fitur realtime ke aplikasi Anda.</li>
            <li class="list-group-item"><strong>Localization:</strong> Memudahkan pembuatan aplikasi multibahasa dengan fitur untuk mengelola terjemahan.</li>
            <li class="list-group-item"><strong>Packages:</strong>Ekosistem paket yang kaya dan berkembang pesat melalui Composer, memungkinkan Anda dengan mudah menambahkan fungsionalitas tambahan ke aplikasi Anda.</li>

        </ul>
        <h1>Langkah-langkah Membuat CRUD Sederhana OOP PHP dan MySQL</h1>

        <h3>1. Tujuan</h3>
        <p>Tujuan praktikum ini yaitu mampu installasi Laravel, membuat project baru Laravel, mengenal struktur Laravel, konsep MVC laravel.</p>
        <br>

        <h3>2. Alat yang digunakan</h3>
        <ul>
          <li>XAMPP (SQL)</li>
          <li>Visual Studio Code</li>
          <li>Composer</li>
          <li>Git (jika perlu)</li>
        </ul>
        <br>

        <h3>3. Langkah-langkah</h3>

        <h4>A. Install XAMPP</h4>
        <ul>
          <li>Download XAMPP dari <a href="https://www.apachefriends.org">apachefriends.org</a></li>
          <li>Jalankan installer dan pilih komponen:
          <ul>
            <li><code>Apache</code></li>
            <li><code>MySQL</code></li>
            <li><code>PHP</code></li>
            <li><code>phpMyAdmin</code></li>
          </ul>
        </li>
        <li>Verifikasi instalasi dengan buka <code>localhost</code></li>
            <img src="../7/ss/7.1.png" alt="Website XAMPP" class="guide-img" style="height: 450px; width:auto">
          <li>Versi PHP</li>
            <img src="../7/ss/7.2.png" alt="Versi XAMPP" class="guide-img" style="height: 100px; width:auto">          
        </ul>
        <br>

        <h4>B. Install Composer</h4>
        <ul>
          <li>Composer merupakan package manager untuk PHP, composer akan digunakan untuk menambahkan package-package yang dibutuhkan pada saat development. Download compose pada link <a href="https://getcomposer.org/Composer-Setup.exe">https://getcomposer.org/Composer-Setup.exe</a>, selanjutnya install sesuai dengan Langkah-langkah wizard</li>
          <code># Download installer
          php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
          <br>
          # Jalankan installer
          php composer-setup.php
          <br>
          # Pindahkan ke PATH global
          mv composer.phar /usr/local/bin/composer</code>
            <img src="../7/ss/7.3.png" alt="Instalasi Composer" class="guide-img" style="height: 450px; width:auto">
          <li>Versi Composer</li>
            <img src="../7/ss/7.4.png" alt="Versi Composer" class="guide-img" style="height: 100px; width:auto">          
        </ul>
        <br>

        <h4>C. Install GIT</h4>
        <ul>
          <li>Silahkan download dan install GIT pada link berikut <a href="https://git-scm.com/downloads/win">https://git-scm.com/downloads/win</a></li>
            <img src="../7/ss/7.5.png" alt="Instalasi Composer" class="guide-img" style="height: 450px; width:auto">
          </ul>
        <br>

        <h4>D. Install Node JS dan NPM</h4>
        <ul>
          <li>Node JS pada Laravel berfungsi untuk menangani masalah frontedn dan build asset UI (Library UI). Buka situs resmi node js https://nodejs.org/ kemudian download dan install sesuai dengan Langkah-langkah wizard. NPM (Node Package Manager) yang berfungsi mengelola paket untuk ekosistem Javascript, NPM biasanya secara otomatis terinstall Ketika menginstall node js.</li>
            <img src="../7/ss/7.6.png" alt="Instalasi Composer" class="guide-img" style="height: 250px; width:auto">
          </ul>
        <br>

        <h4>E. Buat Project Laravel</h4>
        <ul>
          <li>Via Composer: <br>
                  <code>composer create-project laravel/laravel nama-project</code></li>
          <li>Atau menggunakan Laravel Installer: <br>
                  <code>composer global require laravel/installer <br>
                    laravel new nama-project</code></li>
            <img src="../7/ss/7.7.png" alt="Project Laravel" class="guide-img" style="height: 450px; width:auto">
          </ul>
          <ul>
            <li>
              Untuk menjalankan project laravel dapat membuat dengan <code>npm install && npm run build</code>
            </li>
            <img src="../7/ss/7.8.png" alt="Open Project" class="guide-img" style="height: 450px; width:auto">
          </ul>
          <ul>
            <li>
              Setelah itu untuk mendapatkan localhost dari laravel dapat memasukkan php artisan serve di cmd/cmder nya
            </li>
            <img src="../7/ss/7.9.png" alt="Start Laravel" class="guide-img" style="height: 450px; width:auto">
          </ul>
        <br>

        <ul>
          <li>Hello World</li>
            <img src="../7/ss/7.12.png" alt="Hello World" class="guide-img" style="height: 250px; width:auto">
          </ul>
        <br>
        
        <h4>F. MVC Laravel</h4>
        <ul>
            <img src="../7/ss/7.10.png" alt="Instalasi Composer" class="guide-img" style="height: 350px; width:auto">
          <li>Model<br>
            Berfungsi untuk mengakses dan mengelola data / database seperti query ke database, insert, update, delete dll</li>
            <img src="../7/ss/7.11.png" alt="Open Project" class="guide-img" style="height: 150px; width:auto">
          <li>View<br>
            Berfungsi sebagai tampilan atau antarmuka aplikasi, yaitu menampilkan data yang didapatkan dari suatu model melalui controller.</li>
          <li>Controller <code>(php artisan make:controller SiswaController)</code><br>
            Berfungsi untuk menangani request dan response, menerima request dan memproses request kemduian mengembalikannya dalam bentuk data atau view dari suatu model.</li>
          <img src="../7/ss/7.13.png" alt="Open Project" class="guide-img" style="height: 450px; width:auto">
          </ul>
        <br>
  
  <!-- Footer Section -->
<footer class="footer-section py-5 bg-light">
    <div class="text-center text-muted small">
      &copy; 2025 Surya Andika. All rights reserved.
    </div>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
