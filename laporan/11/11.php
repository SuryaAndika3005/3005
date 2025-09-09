<?php
  include '../../navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Praktikum 11</title>
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
          <p class="text-muted">17 Juni 2025 ~ Oleh <strong>Surya Andika</strong></p>
          <h1>Laporan Praktikum 11</h1>
            <h3 class="section-title">API dan RESTful API</h3>
            <h4>Tujuan Pembelajaran</h4>
            <ol>
                <li>Memahami konsep dasar API dan manfaatnya</li>
                <li>Menjelaskan arsitektur RESTful API</li>
                <li>Mengimplementasikan API endpoints menggunakan Laravel</li>
                <li>Melakukan testing dan debugging API</li>
                <li>Menerapkan best practices dalam pengembangan API</li>
            </ol>
            <h4>API</h4>
            <p>API (Application Programming Interface) merupakan sekumpulan aturan dan protokol yang memungkinkan aplikasi berbeda platform untuk berkomunikasi dan saling terintegrasi.</p>
            <h4>Mengapa API Penting</h4>
            <p>API (Application Programming Interface) adalah media untuk komunikasi antara aplikasi yang berbeda. Dalam era digital saat ini, hampir semua aplikasi modern menggunakan API untuk:</p>
            <ol>
                <li>Integrasi dengan layanan pihak ketiga</li>
                <li>Memisahkan frontend dan backend</li>
                <li>Mendukung multiple platform (web, mobile, desktop)</li>
                <li>Memungkinkan microservices architecture</li>
            </ol>
            <h4>Konsep Dasar API</h4>
            <p>Agar lebih memahami konsep dasar API berikut analogi API pemesanan makanan pada restoran.</p>
            <img src="../11/ss/11.1.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">
            <h4>Komponen Utama API(Request dan Response)</h4>
            <h6>1. Request(Permintaan)</h6>
            <ul>
                <li>URL/Endpoint</li>
                <li>HTTP Method</li>
                <li>Headers</li>
                <li>Body/Payload</li>
            </ul>
            <h6>2. Response(Respons)</h6>
            <ul>
                <li>Status Code</li>
                <li>Headers</li>
                <li>Body/Data</li>
            </ul>
            <p>Berikut ini merupakan ilustrasi komponen utama API</p>
            <img src="../11/ss/11.2.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">

            <h4>Jenis-Jenis API</h4>
            <ul>
                <li>Web API : Menggunakan protokol HTTP/HTTPS</li>
                <li>REST API: Mengikuti arsitektur REST</li>
                <li>GraphQL API: Query language untuk API</li>
                <li>SOAP API: Protocol berbasis XML</li>
                <li>Library API: Interface untuk library atau framework</li>
                <li>Operating System API: Interface dengan sistem operasi</li>
                <li>Database API: Interface untuk mengakses database</li>
            </ul>

            <h4>RESTful API</h4>
            <p>REST (Representational State Transfer) adalah arsitektur untuk merancang web services. REST bukan protokol atau standar, melainkan seperangkat prinsip desain.</p>

            <h4>Prinsip REST (Representational State Transfer)</h4>
            <ol>
                <li>Client-Server Architecture
                    <p>Client dan server terpisah dan dapat berkembang secara independen.</p>
                </li>
                <li>Stateless
                    <p>Setiap request harus berisi semua informasi yang diperlukan server untuk memproses request tersebut.</p>
                </li>
                <li>Cacheable
                    <p>Response harus dapat di-cache untuk meningkatkan performa.</p>
                </li>
                <li>Uniform Interface
                    <p>Interface yang konsisten antara client dan server.</p>
                </li>
                <li>Layered System
                    <p>Arsitektur berlapis yang memungkinkan scalability.</p>
                </li>
                <li>Code on Demand (Opsional)
                    <p>Server dapat mengirim kode executable ke client</p>
                </li>                                                
            </ol>

            <h4>Struktur URL REST</h4>
            <table style="width:100%">
                <tr>
                    <td>GET</td>
                    <td>/api/users</td>
                    <td># Mendapatkan semua users</td>
                </tr>
                <tr>
                    <td>GET</td>
                    <td>/api/users/1</td>
                    <td># Mendapatkan user dengan ID 1</td>
                </tr>
                <tr>
                    <td>POST</td>
                    <td>/api/users</td>
                    <td># Membuat user baru</td>
                </tr>
                <tr>
                    <td>PUT</td>
                    <td>/api/users/1</td>
                    <td># Update user dengan ID 1</td>
                </tr>
                <tr>
                    <td>DELETE</td>
                    <td>/api/users/1</td>
                    <td># Hapus user dengan ID 1</td>
                </tr>
            </table>

            <h4>Langkah-Langkah Praktikum</h4>
            <ol>
                <li>Setup Project</li>
                <p>Buat Project Laravel baru atau bisa juga mengunakan project laravel yang sudah ada. Untuk membuat project laravel baru ketikkan kode berikut pada aplikasi CMD</p>
                <code>composer create-project laravel/laravel api-project</code>
                <img src="../11/ss/11.3.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">
                
                <li>Database dan Migration</li>
                <p>Migrasi database dengan menggunakan kode berikut:</p>
                <code>php artisan make:migration create_products_table</code>
                <p>Apabila sudah, lalu buat kode pada api-project/database/migration/****_**_**_******_create_product_table.php menjadi seperti ini</p>
                <img src="../11/ss/11.4.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">         
                <p>lalu jalankan migration</p>
                <code>php artisan migrate</code>    
                
                <li>Model</li>
                <p>Ketikkan pada terminal kode berikut ini</p>   
                <code>php artisan make:model Product</code>
                <img src="../11/ss/11.5.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">         
                
                <li>API Routes</li>
                <p>Karena membuat API pertama kali, jadi harus instalasi untuk API terlebih dahulu dengan menuliskan kode program berikut ini:</p>
                <code>php artisan install:api</code>
                <img src="../11/ss/11.6.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">         

                <li>API Controller</li>
                <p>Membuat controller pada terminal dengan nama ProductController </p>
                <code>php artisan make:controller ProductController --api</code>
                <p>Lalu buatkan kode pada app/Http/Controllers/ProductController.php menjadi seperti ini:</p>
                <img src="../11/ss/11.7.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">                
                
                <li>API Resources (Data Transformation)</li>
                <p>Fitur yang memungkinkan untuk mentransformasi model data atau collection menjadi format JSON yang konsisten dan mudah dikustomisasi untuk API response. API Resource berfungsi sebagai layer transformasi antara model Eloquent dan JSON response yang dikirim ke client sehingga dapat digunakan untuk Mengontrol format output JSON, Menyembunyikan field sensitive, Menambahkan field computed dan Membuat response yang konsisten.</p>
                
                <li>Membuat Resource</li>
                <p>Gunakan kode berikut ini pada CMD yang digunakan</p>
                <code>php artisan make:resource ProductResource</code>
                <p>Lalu buat kode pada api-project/app/Http/Resource/ProductResource.php menjadi seperti ini</p>
                <img src="../11/ss/11.8.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">                

                <li>Menggunakan Resource di Controller</li>
                <p>Cari file Controller yang telah dibuat dan ubah function_index() dan show() pada ProductController menjadi seperti ini:</p>
                <img src="../11/ss/11.9.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">                

                <li>Validasi dan Error Handling</li>
                <li>Form Request Validation</li>
                <p>Masukkan kode berikan pada CMD yang digunakan</p>
                <code>php artisan make:request StoreProductRequest</code>
                <p>Lalu tambahkan kode program untuk menanggani Exception, buat folder baru dengan nama Exception dan buat file Handler didalamnya, pada app/Exceptions/Handler.php. silahkan masukkan kode program berikut ini :</p>
                <img src="../11/ss/11.10.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">                

                <li>Mengakses API Products dengan Postman</li>
                <p>Untuk memastikan API yang telah dibuat berjalan dengan baik maka perlu dilakukan percobaan mengakses API tersebut, untuk testing menggunakan POSTMAN, silahkan download dan install POSTMAN pada computer dan lakukan testing API yang telah dibuat, sebelum melakukan testing silahkan tonton video tutorial cara penggunaan POSTMAN pada link berikut :</p>
                <a href="https://www.youtube.com/watch?v=7cJy1pFubAc">Klik Disini </a>atau <a href="https://www.youtube.com/watch?v=VcYuIsKlOfg">Disini</a>
                <img src="../11/ss/11.11.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">                
                <p>silahkan buka project laravel yang sudah dibuat tadi lalu masukkan kode ini pada terminalnya</p>
                <code>php artisan serve</code>
                
                <p>Setelah itu masuk ke aplikasi postman tadi, lalu untuk mengambil semua product nya gunakan url dan method berikut ini</p>
                <p>Method = GET</p>
                <p>URL = <a href="http://127.0.0.1:8000/api/products">http://127.0.0.1:8000/api/products</a></p>
                <p>silahkan masukkan pada postman dan apabila sukses maka akan menghasilkan tampilan berikut ini</p>
                <img src="../11/ss/11.12.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">  
                <p>Mengapa URL yang diperlukan adalah api/products bukan /products? Karena, route kita berada di api.php sehingga Laravel akan otomatis menggunakan prefix berdasarkan routes yang dibuat. Namun, jika kita masukkan API Routes tadi kedalam file web.php, maka prefix yang digunakan adalah 127.0.0.1:8000/products.</p>                              
                
                <p>Kemudian, kita akan mencoba untuk menambahkan product, caranya dengan menggunakan URL berikut di Postman :</p>
                <br>Method = GET              
                <br>URL = <a href="http://127.0.0.1:8000/api/products">http://127.0.0.1:8000/api/products</a>
                <br>lalu pada body di method post tersebut, pilih raw dan masukkan kode berikut ini
                <img src="../11/ss/11.13.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">  
                <p>Jika kita ingin menerapkan handling untuk exception memasukkan data yang salah, tambahkan kode berikut di Controller/ProductController :</p>
                <img src="../11/ss/11.14.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">  
                <p>untuk menguji nya, akan kita masukkan data yang salah, sebagai contohnya adalah sebagai berikut</p>
                <img src="../11/ss/11.15.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">  
                
                <p>GET - Mengambil Product Berdasarkan ID</p>
                <p>Caranya dengan menggunakan url berikut di Postman:
                <br>URL: <a href="http://localhost:8000/api/products/{id}">http://localhost:8000/api/products/{id}</a></p>
                <p>Contoh: <a href="http://localhost:8000/api/products/1">http://localhost:8000/api/products/1</a></p>
                <br>Method: GET
                <br>Maka hasilnya akan terlihat seperti berikut ini:
                <img src="../11/ss/11.16.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">  
                <p>jika ingin menampilkan kode error yaitu kode 404 maka bisa dengan menambahkan ini pada function view di file ProductController.php</p>
                <img src="../11/ss/11.17.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">  
                
                <p>GET - Update Product</p>
                <p>selanjutnya adalah melakukan update data gunakan, URL berikut di Postman
                    <br>URL: http://localhost:8000/api/products/{id}
                    <br>contohnya URL: http://localhost:8000/api/products/{1}
                <br>Method: PUT
            </p>
                <img src="../11/ss/11.18.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">  

                <p>DELETE - Hapus Product
                    <br>Selanjutnya apabila ingin melakukan delete data, maka bisa dengan menggunakan ini
                    <br>URL: http://localhost:8000/api/products/{id}
                    <br>contohnya: http://localhost:8000/api/products/1
                    <br>Method: DELETE
                    <br>maka tampilannya akan menjadi seperti ini
                </p>
                <img src="../11/ss/11.19.png" alt="Alur API" class="guide-img" style="height: auto; width:auto">              
                <p>Link Github:
                    <a href="https://github.com/SuryaAndika3005/Surya3005_PWEB.git">Klik Disini</a>
                </p>
            </ol>

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
