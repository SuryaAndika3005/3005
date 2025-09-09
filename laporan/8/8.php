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
          <p class="text-muted">22 Mei 2025 ~ Oleh <strong>Surya Andika</strong></p>
          <h1>Langkah-langkah Praktikum</h1>
            <h3 class="section-title">1. Membuat Project Laravel</h3>
            <p>Ada beberapa cara yang dapat digunakan untuk membuat project baru Laravel yaitu dengan cara install installer Laravel secara globat atau install menggunakan composer</p>
            <ul><strong>Global Installer Laravel</strong>
                <li>Pertama buat folder / workspace terlebih dahulu didalam folder htdocs, kita sepakati dengan nama <strong>Laravel</strong>.</li>
                <li>Selanjutnya buka terminal / command prompt / cmder dan masuk kedalam workspace(C:\xampp\htdocs\laravel)</li>
                <li>Setelah masuk kedalam workspace ketikkan perintah berikut untuk melakukan installasi. <br> <code>composer global require "laravel/installer"</code></li>
                <li>Setelah instalasi selesai, selanjutnya buat project laravel dengan cara mengetikkan perintah berikut: <br> <code>laravel new laravel-sisfo</code></li>
            </ul>
            <ul><strong>Composer</strong>
                <p>Cara kedua yang dapat digunakan untuk membuat project baru Laravel yaitu menggunakan composer, ketikkan perintah berikut pada workspace.</p>
                <p><code>composer create-project laravel/laravel=^12.0 laravel-sisfo --prefer-dist</code></p>
                <p>untuk menjalankan project dapat menggunakan perintah seperti dibawah ini.</p>
                <p><code>php artisan serve</code></p>
                <img src="../8/ss/8.1.png" alt="Dashboard Laravel" class="guide-img" style="height: auto; width:auto">
            </ul>
        </ul>
        <br>

        <h3>2. Konfigurasi Database</h3>
        <ul>
          <p>buka file .env kemudian isikan konfigurasi datababse berikut ini.</p>
          <img src="../8/ss/8.2.png" alt="ENV" class="guide-img" style="height: auto; width:auto">
        </ul>
        <br>

        <h3>3. User Authentication</h3>
        <ul>
            <p>User authentication pada studi kasus ini menggunakan fitur authentication bawaan Laravel</p>
            <li><strong>Install package Laravel/ui</strong></li>
            <p>Buka terminal/cmd kemudian ketikkan perintah berikut ini:</p>
            <code>composer require laravel/ui</code><br>
            <p>jika berhasil maka akan tampil seperti gambar berikut ini.</p>
          <img src="../8/ss/8.3.png" alt="Install package Laravel/ui" class="guide-img" style="height: auto; width:auto">
          <li><strong>Authentication Feature</strong></li>
          <p>Ketikkan perintah berikut pada terminal /cmd</p>
          <code>php artisan ui bootstrap --auth</code><p>Jika berhasil maka akan tampil seperti gambar berikut.</p>
          <img src="../8/ss/8.4.png" alt="Authentication Feature" class="guide-img" style="height: auto; width:auto">
          <li><strong>Install dan Compile</strong></li>
          <p>Ketikkan perintah:</p> <code>npm install && npm run dev</code> <br>
          <img src="../8/ss/8.5.png" alt="Install dan Compile" class="guide-img" style="height: auto; width:auto">
          <p> untuk menginstall dan compile file-file asset bawaan, dengan perintah diatas maka file-file yang dibutuhkan untuk 
            authentication akan di generate secara otomatis, seperti halaman login, register dan forgot password, selain itu juga
            akan generate controller auth seperti gambar berikut.</p>
          <img src="../8/ss/8.6.png" alt="Install dan Compile" class="guide-img" style="height: auto; width:auto"> 
          <p>Selain controller juga degenerate view untuk authenctication seperti gambar berikut</p>
          <img src="../8/ss/8.7.png" alt="Install dan Compile" class="guide-img" style="height: auto; width:auto">
          <li><strong>Migration</strong></li>
          <p>Ketikkan perintah php artisan migrate maka Laravel akan membuat migration table authentication, jika sebelumnya belum 
          terdapat database maka akana da konfirmasi dari larevel apakah akan dibuatkan databasenya atau tidak. Jika migaration 
          berhasil maka akan tampil seperti tampilan berikut.</p>
          <img src="../8/ss/8.8.png" alt="Migration" class="guide-img" style="height: auto; width:auto">
          <p>Jika instalasi berhasil maka aplikasi sisfo sudah memiliki fitur authentication bawaan dari Laravel, berikut tampilan 
            fitur authentication dari Laravel.</p>
        <li><strong>Halaman Login</strong></li>
        <p>Akses url <a href="http://127.0.0.1:8000/login">http://127.0.0.1:8000/login</a> pada browser maka akan tampil halaman login seperti berikut: </p>
          <img src="../8/ss/8.10.png" alt="Registasi" class="guide-img" style="height: auto; width:auto">
        <li><strong>Halaman Register</strong></li>
        <p>Akses url <a href="http://127.0.0.1:8000/register">http://127.0.0.1:8000/register</a> pada browser maka akan tampil halaman register seperti berikut: </p>
          <img src="../8/ss/8.9.png" alt="Register" class="guide-img" style="height: auto; width:auto">
        <li><strong>Halaman Dashboard</strong></li>
        <p>Selanjutnya silahkan coba registrasi dan lakukan login ke aplikasi, jika berhasil maka akan tampil seperti gambar berikut.</p>
        <img src="../8/ss/8.11.png" alt="Dashboard" class="guide-img" style="height: auto; width:auto"> 
        <li><strong>Kesimpulan</strong></li>
        <p>Fitur authentication Laravel akan mengenerate controller, model, view dan route authentication secara otomatis, selain itu juga 
          tampilan view sudah menggunakan framework boostrap sehingga mempermudah dalam membuat fitur authentication pada aplikasi.</p>
        <li><strong>Custom Table Users</strong></li>
        <p>Authentication Laravel secara otomatis akan mengenerate table Users yang berisi tentang informasi data user, berikut struktur table users</p>
        <img src="../8/ss/8.12.png" alt="Tabel Users" class="guide-img" style="height: auto; width:auto">
        <p>Dari stuktur table users diatas maka perlu ditambahken beberapa field yaitu username, level dan status, maka perlu membuat sebuah migration untuk 
          menambahkan field-field diatas, ketikkan perintah berikut pada terminal atau cmd. </p>
        <code>php artisan make:migration costum_table_users</code>
        <p>selanjutnya buka folder database/migration/ seperti gambar berikut.</p>
        <img src="../8/ss/8.13.png" alt="Tabel Users" class="guide-img" style="height: auto; width:auto">    
        <p>Kemudian buka file yang diakhiri costum_table_users.php dan isikan dengan kode program berikut.</p>   
        <img src="../8/ss/8.14.png" alt="Custom Tabel Users" class="guide-img" style="height: auto; width:auto">
        <p>Kemudian jalankan perintah <br> <code>php artisan migrate</code><br> jika berhasil maka struktur table users telah berubah sesuai dengan kebutuhan aplikasi.</p>
        <img src="../8/ss/8.16.png" alt="Migrate" class="guide-img" style="height: auto; width:auto">   
        <img src="../8/ss/8.15.png" alt="Migrate" class="guide-img" style="height: auto; width:auto"> 
        <li><strong>Seeding User</strong></li>    
        <p>Setelah berhasil melakukan costum table users selanjutnya membuat user menggunakan fitur seeding pada Laravel, buat seeder dengan nama AdminSeeder dengan perintah : <br>
        <code>php artisan make:seeder AdminSeeder</code><br>maka secara otomatis file AdminSeeder.php akan dibuat pada folder database/Seeder. Kemudian buka file tersebut 
        dan buat akun admin seperti kode program berikut. </p>
        <img src="../8/ss/8.17.png" alt="Migrate" class="guide-img" style="height: auto; width:auto">
        <p>Selanjutnya untuk menjalankan seeding dengan cara menjalankan perintah berikut. </p>
        <code>php artisan db:seed --class=AdminSeeder</code> <br>
        <p>jika berhasil maka akan tampil seperti gambar berikut.</p>
        <img src="../8/ss/8.18.png" alt="Seeding Users" class="guide-img" style="height: auto; width:auto"> 
        <p>Jika sudah berhasil menambahkan user maka dapat login ke aplikasi menggunakan akun tersebut.</p>
        <img src="../8/ss/8.19.png" alt="Admin" class="guide-img" style="height: auto; width:auto">
    </ul>

    <h3>4. Templating atau Layouting</h3>
    <ul>
      <p>Authentication Laravel secara otomatis mengenerate tampilan dashboard aplikasi, Langkah selanjutnya kita akan konfigurasi
      tampilan aplikasi sesuai dengan template yang kita pilih, ada studi kasus ini kita akan menggunakan template SB Admin 2 dengan 
      framework bootstrap, silahkan downloah template pada link <a href="https://startbootstrap.com/theme/sb-admin-2">https://startbootstrap.com/theme/sb-admin-2</a>
      kemudian extract, selanjutnya buat folder pada public project Laravel dengan nama sbadmin dan copy pastekan seluruh asset template sbadmin kedalam folder tersebut.</p>
      <li><strong>Halaman Login Aplikasi</strong></li>
      <p>Buka file <strong>app.blade.php</strong> pada folder view/layouts kemudian ganti dengan kode program dibawah ini.</p>
      <img src="../8/ss/8.20.png" alt="AppBlade" class="guide-img" style="height: auto; width:auto"> 
      <p>Sehingga tampilan login akan berubah seperti gambar dibawah ini.</p>
      <img src="../8/ss/8.21.png" alt="View AppBlade" class="guide-img" style="height: auto; width:auto"> 
    </ul>
    <ul>
      <li><strong>Layout Global</strong></li>
      <p>Selanjutnya membuat layout global yang mana layout ini akan digunakan sebagai layout utama
        aplikasi dan view-view lain akan mengambil resource disini, karena app.blade.php sudah 
        digunakan untuk view login, maka kita perlu membuat layout baru, silahkan buat file dengan nama
        <strong>main.blade.php</strong> pada folder <strong>view/layouts </strong>dan isikan dengan kode program berikut ini.
      </p>
      <img src="../8/ss/8.22.png" alt="View AppBlade" class="guide-img" style="height: auto; width:auto">
      <strong>Penjelasan</strong>
      <p>Pada layouts main.blade.php diatas layout ini akan memanggil view <strong>sidebar.blade.php</strong> dan
      view <strong>topbar.blade.php</strong> kedalam layout main.blade.php dengan menggunakan perintah
      @include sehingga tampilan kedua view tersebut akan tampil pada layout main. Selanjutnya
      juga akan menampilkan data <strong> judul & konten</strong> dari view yang akan menggunakan layouts
      <strong>main.blade.php</strong> dengan perintah <code>@yeild(‘judul’) & @yeild(‘konten)</code>.</p>
      <strong>Sidebar</strong>
      <p>Buat file pada folder layouts dengan nama sidebar.blade.php dan isi dengan kode program berikut.</p>
      <img src="../8/ss/8.23.png" alt="View AppBlade" class="guide-img" style="height: auto; width:auto"> <br>
      <strong>Topbar</strong> <br>
      <p>Buat file pada folder layouts dengan nama topbar.blade.php dan isi dengan kode program berikut.</p>
      <img src="../8/ss/8.24.png" alt="View AppBlade" class="guide-img" style="height: auto; width:auto"> <br>
      <strong>Cara Penggunaan layouts main.blade.php</strong>
      <p>Sebagai contoh kita akan menggunakan view <a href="http://127.0.0.1:8000/home">home.blade.php</a> , buka file tersebut dan isikan
      dengan kode program berikut.</p>
      <img src="../8/ss/8.25.png" alt="View AppBlade" class="guide-img" style="height: auto; width:auto"> <br>
      <strong>Penjelasan:</strong>
      <p>Untuk menggunakan layouts main menggunakan <strong>@extends(‘layouts.main’)</strong> sehingga seluruh
        tampilan main.blade.php akan ditampilkan pada view home, untuk menampilkan data judul
        pada layout main dengan perintah <strong>@section(‘judul’)</strong>Dashboard @endsection dan konten
        dengan cara <strong>@section(‘judul’)Dashboard @endsection</strong> <br>
      </p>
      <p>
        Jika konfigurasi layout berhasil maka akan tampil seperti gambar berikut.
      </p>
      <img src="../8/ss/8.26.png" alt="View AppBlade" class="guide-img" style="height: auto; width:auto"> <br>
    </ul>
        
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
