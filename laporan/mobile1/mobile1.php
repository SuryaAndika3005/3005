<?php
  include '../../navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Praktikum Aplikasi Mobil 1</title>
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
          <p class="text-muted">08 September 2025 ~ Oleh <strong>Surya Andika</strong></p>
          <h1>Laporan Praktikum Aplikasi Mobile 1</h1>
            <h3 class="section-title">Setup Environment, Dart Dasar dan OOP Dart</h3>
            <h4>1.1. Tujuan</h4>
            <p>Tujuan praktikum ini yaitu mahasiswa membuat menginstall kebutuhan Praktikum Aplikasi Mobile
                menggunakan bahasa Dart pada framework Flutter, mahasiswa menguasai dasar-dasar Bahasa pemrograman
                Dart serta konsep OOP Dart :</p>
            <ol>
                <li>Install SDK Dart dan Integrated Development Editor (IDE)</li>
                <li>Membuat program sederhana untuk memahami dasar Bahasa pemrograman dart</li>
                <li>Membuat program sederhana menggunakan konsep OOP</li>
            </ol>
            <h4>1.2. API</h4>
            <ol>
                <li>Computer / laptop yang telah terinstall SDK Dart, SDK Flutter</li>
                <li>IDE (Visual Studio Code / Android Studio)</li>
            </ol>
            <h4>1.3. Teori</h4>
            <h4>1.4. Langkah-Langkah</h4>
            <p>
                Install SDK Dart Sebelum install SDK Dart pastikan arsitektur hardware telah memenuhi persyaratan
                minimum, Adapun persyaratan minimum yang dibutuhkan untuk install SDK Dart seperti gambar berikut :
            </p>
            <img src="../mobile1/ss/1.png" alt="System Requirement" class="guide-img" style="height: auto; width:auto">
            <p>
                Untuk menginstall SDK Dart dapat menggunakan beberapa cara yaitu dapat menggunakan Chocolatey atau
                dapat langsung download file SDK dalam bentuk ZIP kemudian di extract pada computer. Berikut
                Langkah-langkah install SDK Dart.
            </p>

            <h6><i><strong>Windows</strong></i></h6>
            <ol>
                <li>Menggunakan Chocolatey</li>
                <ul>
                    <li>Install Chocolatey = <a href="https://chocolatey.org/install">https://chocolatey.org/install</a></li>
                    <li>Buka command promt atau powershell kemudian ketikan perintah choco install dart-sdk</li>
                    <li>Menganti PATH
                        <p>
                            Secara default Ketika menginstall SDK Dart menggunakan Chocolatey akan terinstall pada Directory <strong>C:\tools\dart-sdk</strong>
                        </p>
                    </li>
                </ul>
                <li>Extract SDK Dart ZIP</li>
                <ul>
                    <li>Download SDK Dart pada halaman Dart SDK archive <a href="https://dart.dev/getdart/archive#stable-channel">
                        https://dart.dev/getdart/archive#stable-channel</a></li>
                    <img src="../mobile1/ss/2.png" alt="Download" class="guide-img" style="height: auto; width:auto">
                    <li>Selanjutnya extract SDK Dart yang telah di zip</li>            
                </ul>                
            </ol>

            <h6><strong>Mengatur PATH SDK Dart</strong></h6>
            <p>Agar dart dapat dijalankan secara global maka perlu menambahkan pada PATH Environment, 
                berikut Langkah-langkah menambahkan PATH </p>
                <ul>
                    <li>Buka Edit the system Environment variable</li>
                    <img src="../mobile1/ss/3.png" alt="Download" class="guide-img" style="height: auto; width:auto">
                    <li>Klik Environment Variables maka akan muncul tampilan seperti berikut</li>
                    <img src="../mobile1/ss/4.png" alt="Download" class="guide-img" style="height: auto; width:auto">
                    <li>Pilih Path → Edit dan tambahkan Path dari SDK Dart <strong>C:\tools\dart sdk\bin atau directory_extract\dart-sdk\bin</strong></li>
                    <li>Cek apakah dart sudah terinstall atau belum dengan mengetikkan dart pada command prompt</li>    
                    <img src="../mobile1/ss/5.png" alt="Download" class="guide-img" style="height: auto; width:auto">                                
                </ul>
            
            <h6><i><strong>MacOS</strong></i></h6>
            <p>Jika menggunakan system operasi MacOS maka dapat mengsintall SDK Dart menggunakan Homebrew</p>
            <ul>
                <li>Install homebrew <a href="https://brew.sh/">https://brew.sh/</a></li>
                <li>Ketikkan perintah brew tap dart-lang/dart</li>
                <li>Install Dart SDK menggunakan perintah brew install dart </li>
                <li>Sesuaikan PATH dengan directory bin</li>
            </ul>

            <h6><i><strong>Project Pertama</strong></i></h6>
            <p>Dart Membuat project pertama menggunakan Bahasa Dart, berikut ini Langkah-langkahnya.</p>
            <ul>
                <li>Buka command prompt kemudian pilih directory yang akan digunakan untuk menyimpak proyek dart dan
                    ketikkan dart create halo maka proyek dart pertama dengan nama halo akan terbentuk.</li>
                    <img src="../mobile1/ss/6.png" alt="Download" class="guide-img" style="height: auto; width:auto">                                
                <li>Untuk menjalankannya masuk ke directory halo dan ketikkan dart run</li>
                    <img src="../mobile1/ss/7.png" alt="Download" class="guide-img" style="height: auto; width:auto">                                
            </ul>

            <h6><i><strong>Dart x Visual Studio Code</strong></i></h6>
            <p>Setelah berhasil membuat proyek pertama Dart dengan nama halo, agar lebih memudahkan dalam mempelajari
                Bahasa Dart, maka kita perlu membuat proyek dart pada Visual Studio Code, buka Visual Studio Code
                kemudian buka proyek halo, berikut ini tampilannya pada Visual Studio Code.</p>
                <img src="../mobile1/ss/8.png" alt="Download" class="guide-img" style="height: auto; width:auto">                                
            <p>Penjelasan Struktur Utama Dart:</p>
                <img src="../mobile1/ss/9.png" alt="Download" class="guide-img" style="height: auto; width:auto">                                

            <h6><i><strong>Dart x Visual Studio Code</strong></i></h6>
            <strong>List</strong>
            <p>List tipe data yang berisi kumpulan data atau dalam bahasa pemrograman lain disebut array, Untuk membuat list yaitu List<Tipe Data> variabel=[] atau var variabel = <Tipe Data>[] </p>
                <ul>
                    <li>Buat file baru pada folder bin dengan nama dart_dasar.dart kemudian buat function main </li>
                    <li>Buat List dengan tipe string yang berisi nama-nama buah seperti kode program berikut ini.</li>
                    <code>List fruits = ['Apel', 'Alpukat', 'Nanas', 'Mangga','Pisang'];</code>
                    <p>Selanjutnya untuk menampilkan list dapat menggunakan perintah</p>
                    <p><code>print(fruits.toString());</code></p>
                    <img src="../mobile1/ss/10.png" alt="Download" class="guide-img" style="height: auto; width:auto">
                    <li>Manipulasi List, silahkan tambahkan kode programnya menjadi seperti berikut ini.</li>
                    <img src="../mobile1/ss/11.png" alt="Download" class="guide-img" style="height: auto; width:auto">
                    <li>Output Program</li>
                    <img src="../mobile1/ss/12.png" alt="Download" class="guide-img" style="height: auto; width:auto">
                </ul>

            <strong>Set</strong>
            <p>Set merupakan sebuah tipe data yang mirip dengan list, akan tetapi set tidak memiliki index sehingga
                data yang ada pada set tidak berurutan, Set tidak menerima duplikasi data Tidak bisa mengakses
                menggunakan index, Untuk membuat set yaitu Set namaVariabel={}; atau var namaVariabel={}; </p>
                <ul>
                    <li>Tambahkan kode program berikut pada file dart_dasar.dart</li>
                    <img src="../mobile1/ss/13.png" alt="Download" class="guide-img" style="height: auto; width:auto">
                    <li>Output Program</li>
                    <img src="../mobile1/ss/14.png" alt="Download" class="guide-img" style="height: auto; width:auto">
                </ul>

            <strong>Map</strong>
            <ul>
                <li>Map adalah tipe data key-value yang mana key seperti index dan value sebagai datanya</li>
                <li>Menggunakan kurung kurawal {} dan menggunakan : untuk memisahkan key-value</li>
                <li>Jika ada data key yang sama maka yang akan digunakan data key yang terakhir. </li>
                <li>Untuk membuat map yaitu:
                    <ol>
                        <li>Map namaVariabel = {};</li>
                        <li>var namaVariabel = Map();</li>
                        <li>var namaVariabel = {};</li>
                </ol>
            </li>
                <p>berikut ini kode program contoh penggunaan Map pada Dart.</p>
                    <img src="../mobile1/ss/15.png" alt="Download" class="guide-img" style="height: auto; width:auto">
                    <li>Output Program</li>
                    <img src="../mobile1/ss/16.png" alt="Download" class="guide-img" style="height: auto; width:auto">
            </ul>

            <strong>Set</strong>
            <p>Cara Pertama</p>
                <img src="../mobile1/ss/17.png" alt="Download" class="guide-img" style="height: auto; width:auto">
            <p>Cara Kedua</p>
                <img src="../mobile1/ss/18.png" alt="Download" class="guide-img" style="height: auto; width:auto">
                
            <strong>Set</strong>
            <p>Kode program berikut ini merupakan contoh konsep penerapan OOP pada Bahasa Dart. Buat file baru pada folder bin dengan nama oop.dart dan tambahkan kode program berikut</p>
                <img src="../mobile1/ss/18.png" alt="Download" class="guide-img" style="height: auto; width:auto">
            <p>Jalankan program maka akan muncul output seperti gambar berikut :</p>
                <img src="../mobile1/ss/19.png" alt="Download" class="guide-img" style="height: auto; width:auto">


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
