<?php
  include '../../navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Praktikum 9</title>
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
          <p class="text-muted">11 Juni 2025 ~ Oleh <strong>Surya Andika</strong></p>
          <h1>Laporan Praktikum 9</h1>
            <h3 class="section-title">Langkah-Langkah Praktikum</h3>
            <p>Untuk membuat fitur manajemen users, kita akan menggunakan fungsi keseluruhan CRUD, maka kita akan membuat Controller Resource. Jalankan perintah berikut di terminal:</p>
            <ul><code>php artisan make:controller UserController --resource</code>
            <img src="../9/ss/9.1.png" alt="CMD" class="guide-img" style="height: auto; width:auto">
          </ul>
          <p>Selanjutnya tambahkan route berikut pada web.php</p>
            <ul><code>use App\Http\Controllers\UserController;
              <br>Route::resource('users', UserController::class);</code>
            </ul>
            <p>Sehingga jika dilihat pemetaan route php artisan route:list menjadi seperti gambar berikut.</p>
            <img src="../9/ss/9.2.png" alt="CMD" class="guide-img" style="height: auto; width:auto">
        </ul>
        <p><strong>Buka file app/Http/Controllers/UserController dan isi dengan fungsi-fungsi CRUD berikut:</strong></p>
        <img src="../9/ss/9.3.png" alt="UserController" class="guide-img" style="height: auto; width:auto">

        <h3>Create Users</h3>
        <ul>
            <p>Perintah <code>return view('user.create')</code> artinya menampilkan view create pada folder user. Selanjutnya buat folder user didalam folder view, kemudian tambahkan file create.blade.php dan isikan dengan kode program berikut ini.</p>
            <img src="../9/ss/9.4.png" alt="user.create" class="guide-img" style="height: auto; width:auto">
            <p>Selanjutnya tambahkan file css dan javascript select2 ke dalam layouts main.blade.php. Tambahkan program berikut di bagian tag head:</p>
            <img src="../9/ss/9.5.png" alt="main.blade.php" class="guide-img" style="height: auto; width:auto">
            <p>Berikut adalah tampilan form input user</p>
            <img src="../9/ss/9.6.png" alt="main.blade.php" class="guide-img" style="height: auto; width:auto">            

        <h3>Create Users</h3>
        <p>Form create user menggunakan method <strong>POST</strong> yang akan dikirimkan ke <strong>action store</strong> dengan route <strong>users.store</strong>, 
          selanjutnya pada action store akan ditangkap isi form create user dengan cara <code>$request->get(‘nama input’).</code> 
          Kemudian disimpan pada table user dengan cara instance model User dengan <code>$user = new \App\Models\User</code>. 
          Setelah itu assign sesuai dengan nama field. Untuk menyimpan kedalam database User, gunakan perintah 
          <code>$user->save</code>. Jika data berhasil disimpan, maka akan di redirect ke route <strong>users.index</strong> dengan membawa 
          session status.</p>

        <h3>Read/List Users</h3>
        <p>Selanjutnya setelah fungsi create selesai kita akan menampilkan data user. Untuk menampilkan data user kita akan 
          menggunakan method <strong>GET</strong> yaitu <a href="http://localhost/users">http://localhost/users</a>, yang mana route ini merupakan action index pada UserController. 
          Buat file index.blade.php pada folder view/user dan isi dengan kode program berikut:</p>
        <img src="../9/ss/9.7.png" alt="main.blade.php" class="guide-img" style="height: auto; width:auto">                      
        <p>Karena menggunakan <strong>datatables</strong>, tambahkan file css datatable pada bagian head main.blade.php</p>
        <img src="../9/ss/9.8.png" alt="main.blade.php" class="guide-img" style="height: auto; width:auto">                      
        <p>Sehingga tampilan list user menjadi seperti gambar dibawah ini</p>
        <img src="../9/ss/9.9.png" alt="main.blade.php" class="guide-img" style="height: auto; width:auto">                      

        <h3>Update Users</h3>
        <p>Untuk melakukan proses update data user, terlebih dahulu buat tombol action yang mengarahkan pada 
          route <strong>users/edit/{user}/edit</strong> atau action edit pada UserController untuk menampilkan form dan menggunakan 
          route users/edit/{user} untuk method <strong>PUT</strong>. Pertama-tama kita akan membuat tombol edit pada tampilan list 
          user, silahkan buka file user/index.blade.php pada kolom [action] ganti dengan kode berikut ini.</p>
        <img src="../9/ss/9.10.png" alt="main.blade.php" class="guide-img" style="height: auto; width:auto">                      
        <p>Jika salah satu tombol diatas diklik maka akan menghasilkan string url <a href="http://localhost/users/{user}/edit">http://localhost/users/{user}/edit</a> 
          yang mana {user} merupakan id dari user yang di klik. Update users menggunakan fungsi edit dan update dari 
          UserController. Fungsi edit akan mengambil data user berdasarkan id user yang diidapatkan dan ditampung pada 
          variable $user dan dikrimkan ke view user.edit. Selanjutnya data yang telah diedit akan disimpan menggunakan 
          fungsi Update. Buat view edit.blade.php didalam folder user dan isikan dengan kode program berikut:</p>
        <img src="../9/ss/9.11.png" alt="main.blade.php" class="guide-img" style="height: auto; width:auto">    
        <p>Sehingga tampilan form edit user menjadi seperti gambar dibawah ini</p>                  
        <img src="../9/ss/9.12.png" alt="main.blade.php" class="guide-img" style="height: auto; width:auto">    

        <h3>Delete Users</h3>
        <p>Tambahkan tombol untuk menghapus user pada list user. Buka <strong>view/user/index.blade.php </strong>dan 
          tambahkan kode berikut dibawah kode tombol edit.</p>
        <img src="../9/ss/9.13.png" alt="main.blade.php" class="guide-img" style="height: auto; width:auto">    
        <p>Penghapusan data user diatur oleh fungsi destroy pada UserController. Ketika di klik tombol hapus, maka akan muncul pop up 
          dialog peringatan apakah data akan dihapus. Jika di klik OK, maka data akan dihapus.</p>
        <img src="../9/ss/9.14.png" alt="main.blade.php" class="guide-img" style="height: auto; width:auto">    

        <h3>Menambahkan Menu User di Sidebar</h3>
        <p>Buka <strong>view/layouts/sidebar.blade.php</strong> kemudian tambahkan kode program berikut dibawah item dashboard.</p>
        <img src="../9/ss/9.15.png" alt="main.blade.php" class="guide-img" style="height: auto; width:auto">    
        <img src="../9/ss/9.16.png" alt="main.blade.php" class="guide-img" style="height: auto; width:auto">    
        
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
