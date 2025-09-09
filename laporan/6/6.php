<?php
  include '../../navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CRUD PHP - Konsep OOP</title>
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
        <p class="text-muted">17 Mei 2025 ~ Oleh <strong>Surya Andika</strong></p>
            <h1 class="section-title">Konsep OOP</h1>
        <ul class="list-group mb-4">
            <li class="list-group-item"><strong>Class</strong> − a template for making many instances of the same kind (or class) of object.</li>
            <li class="list-group-item"><strong>Object</strong> − individual instance of the data structure defined by a class.</li>
            <li class="list-group-item"><strong>Member Variable</strong> − These are the variables defined inside a class. This data will be invisible to the outside of the class and can be accessed via member functions. These variables are called attribute of the object once an object is created. object data. variables of a parent class. or super class.</li>
            <li class="list-group-item"><strong>Member function</strong> − These are the function defined inside a class and are used to access.</li>
            <li class="list-group-item"><strong>Inheritance</strong> − When a class is defined by inheriting existing function of a parent class then it is called inheritance. Here child class will inherit all or few member functions and.</li>
            <li class="list-group-item"><strong>Parent class</strong> − A class that is inherited from by another class. This is also called a base class.</li>
            <li class="list-group-item"><strong>Child Class</strong> − A class that inherits from another class. This is also called a subclass or derived class.</li>
            <li class="list-group-item"><strong>Polymorphism</strong> − Same function can be used for different purposes.</li>
            <li class="list-group-item"><strong>Overloading</strong> − a type of polymorphism in which some or all of operators have different implementations depending on the types of their arguments. Similarly functions can also be overloaded with different implementation.</li>
            <li class="list-group-item"><strong>Data Abstraction</strong> − Any representation of data in which the implementation details are hidden (abstracted).</li>
            <li class="list-group-item"><strong>Encapsulation</strong> − refers to a concept where we encapsulate all the data and member functions together to form an object.</li>
            <li class="list-group-item"><strong>Constructor</strong> − refers to a special type of function which will be called automatically whenever there is an object formation from a class.</li>
            <li class="list-group-item"><strong>Destructor</strong> − refers to a special type of function which will be called automatically whenever an object is deleted or goes out of scope.</li>
        </ul>
        <h1>Langkah-langkah Membuat CRUD Sederhana OOP PHP dan MySQL</h1>

        <h3>1. Tujuan</h3>
        <p>Agar mahasiswa mampu mengimplementasikan konsep OOP pada PHP dengan membuat suatu aplikasi CRUD sederhana.</p>
        <br>

        <h3>2. Alat yang digunakan</h3>
        <ul>
          <li>XAMPP (SQL)</li>
          <li>Visual Studio Code (code editor)</li>
          <li>Git (jika perlu)</li>
        </ul>
        <br>

        <h3>3. Langkah-langkah</h3>

        <h4>A. Persiapan</h4>
        <ul>
          <li>Pertama buat folder baru <code>crud</code> di dalam folder htdocs yang ada pada folder XAMPP</li>
          <li>Kemudian buat beberapa file dan folder seperti berikut di dalam folder crud sebelumnya.</li>
            <img src="../6/ss/list_folder_crud.png" alt="List Folder CRUD" class="guide-img" style="height: 500px; width:auto">
          <li>Download dan simpan file css dan js <code>Bootstrap</code> kemudian masukkan hasil download css dan js ke dalam folder <code>assets</code>.</li>
        </ul>
        <br>

        <h4>B. Koneksi ke Database</h4>
        <ul>
          <li>Buat database <code>pemrograman_web</code> dengan menggunakan kode SQL kemudian buat juga tabel <code>mahasiswa</code>.</li>
            <img src="../6/ss/create_database.png" alt="Buat Database" class="guide-img">
            <img src="../6/ss/create_table.png" alt="Buat Tabel" class="guide-img">
          <li>Buka file <code>Database.php</code> pada folder config lalu buat kode berikut untuk membuat koneksi ke database</li>
            <img src="../6/ss/connect_database.png" alt="Koneksi Database" class="guide-img">
        </ul>
        <br>

        <h4>C. File Config</h4>
        <ul>
          <li>Buka file <code>Config.php</code> pada folder config lalu tambahkan kode variabel <code>BASE_URL</code> ini agar nanti bisa diakses dari kelas manapun.</li>
            <img src="../6/ss/config_url.png" alt="Config BASE URL" class="guide-img">
        </ul>
        <br>

        <h4>D. Alert</h4>
        <ul>
          <li>Buka file <code>Alert.php</code> pada folder function lalu buat kode berikut untuk menampilkan pesan berhasil/gagalnya aktifitas yang dijalankan.</li>
            <img src="../6/ss/alert.png" alt="Alert" class="guide-img">
        </ul>
        <br>

        <h4>E. Class Model Mahasiswa</h4>
        <ul>
          <li>Buka file <code>mahasiswa.php</code> pada folder model lalu tambahkan fungsi <code>session_start()</code> dan juga <code>class Mahasiswa</code> yang berisi deklarasi variabel-variabel yang nanti akan dibutuhkan.</li>
          <li>Tambahkan fungsi <code>constructor</code> serta operasi Create, Read, Update dan Delete di dalamnya.</li>
            <img src="../6/ss/model_mahasiswa_merge.png" alt="Model Mahasiswa" class="guide-img">
        </ul>
        <br>

        <h4>F. Class Function Mahasiswa</h4>
        <ul>
          <li>Buat file <code>mahasiswa.php</code> pada folder function lalu buat kode ini.</li>
          <li>Panggil file Database.php, Config.php, dan model/mahasiswa.php dengan menggunakan fungsi <code>include</code> atau <code>include_once</code></li>
          <li>Kemudian buat objek <code>new Database</code> dan <code>new mahasiswa</code> yang akan disambungkan koneksinya.</li>
          <li>Tambahkan kode program <code>$_GET['action']</code> ini pada kode sebelumnya.</li>
            <img src="../6/ss/function_mahasiswa.png" alt="Function Mahasiswa" class="guide-img">
        </ul>
        <br>

        <h4>G. View</h4>
        <ul>
          <li><code>Index.php</code>: file ini akan menampilkan data-data mahasiswa  yang sudah berhasil di input.</li>
            <img src="../6/ss/index_merge.png" alt="Code Index" class="guide-img">
            <img src="../6/ss/index_result.png" alt="Result Index" class="guide-img">
          <li><code>Create.php</code>: file ini adalah tempat untuk menambahkan data mahasiswa.</li>
            <img src="../6/ss/create_1.png" alt="Code Create" class="guide-img">
            <img src="../6/ss/create_result.png" alt="Result Create" class="guide-img">
          <li><code>Edit.php</code>: file ini adalah tempat pengguna mengedit data mahasiswa yang sudah di input sebelumnya.</li>
            <img src="../6/ss/edit_merge.png" alt="Code Edit" class="guide-img">
            <img src="../6/ss/edit_result.png" alt="Result Edit" class="guide-img">
        </ul>
        <br>
        </div>
    </div>
  </div>
  
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
