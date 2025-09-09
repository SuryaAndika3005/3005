<?php
  include '../../navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Laporan Praktikum 10</title>
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
          <h1>Laporan Praktikum 10</h1>
            <h3 class="section-title">Laravel Relationship (Student, Major, dan Subject)</h3>
            <h5>1. Struktur Database dan Relationship</h5>
            <p>Dalam praktikum ini, kita akan membuat sistem akademik sederhana dengan relationship:</p>
            <ul>
                <li>Student belongs to Major (Many-to-One)</li>
                <li>Student belongs to many Subject through pivot table (Many-to-Many)</li>
                <li>Major has many Student (One-to-Many)</li>
                <li>Subject belongs to many Student through pivot table (Many-to-Many)</li>
          </ul>
          <h5>2. ERD (Entity Relationship Diagram)</h5>
          <ul>
              <li>ERD Major dan Student</li>
              <img src="../10/ss/ERD1.png" alt="ERD" class="guide-img" style="height: auto; width:auto">
              <li>ERD Student dan Subject</li>
              <img src="../10/ss/ERD2.png" alt="ERD" class="guide-img" style="height: auto; width:auto">
          </ul>

          <h5>Langkah 1 : Membuat Migration</h5>
          <ol>
            <li>Migration untuk tabel majors</li>
            <p>php artisan make:migration create_majors_table</p>
              <img src="../10/ss/10.1.png" alt="ERD" class="guide-img" style="height: auto; width:auto">
            <li>Migration untuk tabel students</li>
            <p>php artisan make:migration create_students_table</p>
                <img src="../10/ss/10.2.png" alt="ERD" class="guide-img" style="height: auto; width:auto">
            <li>Migration untuk tabel subjects</li>
            <p>php artisan make:migration create_subjects_table</p>
                <img src="../10/ss/10.3.png" alt="ERD" class="guide-img" style="height: auto; width:auto">
            <li>Migration untuk tabel pivot student_subject</li>
            <p>php artisan make:migration create_student_subject_table</p>
                <img src="../10/ss/10.4.png" alt="ERD" class="guide-img" style="height: auto; width:auto">
            <li>Jalankan Migration</li>
            <p>php artisan migrate</p>          
            </ol>

          <h5>Langkah 2 : Membuat Model dengan Relationship</h5>
          <ol>
            <li>Model Major</li>
            <p>php artisan make:model Major</p>
              <img src="../10/ss/10.6.png" alt="ERD" class="guide-img" style="height: auto; width:auto">
            <li>Model Student</li>
            <p>php artisan make:model Student</p>
                <img src="../10/ss/10.7.png" alt="ERD" class="guide-img" style="height: auto; width:auto">
            <li>Model Subject</li>
            <p>php artisan make:model Subject</p>
                <img src="../10/ss/10.8.png" alt="ERD" class="guide-img" style="height: auto; width:auto"> 
            </ol>            

          <h5>Langkah 3 : Seeder untuk Data Sample</h5>
          <ol>
            <li>Seeder untuk Major</li>
            <p>php artisan make:seeder MajorSeeder</p>
              <img src="../10/ss/10.9.png" alt="ERD" class="guide-img" style="height: auto; width:auto">
            <li>Seeder untuk Subject</li>
            <p>php artisan make:seeder SubjectSeeder</p>
                <img src="../10/ss/10.10.png" alt="ERD" class="guide-img" style="height: auto; width:auto">
            <li>Seeder untuk Student</li>
            <p>php artisan make:seeder StudentSeeder</p>
                <img src="../10/ss/10.11.png" alt="ERD" class="guide-img" style="height: auto; width:auto"> 
            <li>Update DatabaseSeeder</li>
                <img src="../10/ss/10.12.png" alt="ERD" class="guide-img" style="height: auto; width:auto">
            <li>Jalankan Seeder</li>
            <p>php artisan db:seed</p>
            </ol>   
            
          <h5>Langkah 4 : Membuat Controller</h5>
          <ol>
            <li>StudentController</li>
            <p>php artisan make:controller StudentController</p>
              <img src="../10/ss/10.13.png" alt="ERD" class="guide-img" style="height: auto; width:auto"> 
            </ol>   

          <h5>Langkah 5 : Membuat Routes</h5>
          <ol>
            <li>Model Major</li>
              <img src="../10/ss/10.14.png" alt="ERD" class="guide-img" style="height: auto; width:auto">
            </ol>              


          <h5>Langkah 6 : Membuat Views</h5>
          <ol>
            <li>Layout utama</li>
            <p>{{-- resources/views/layouts/app.blade.php --}}</p>
              <img src="../10/ss/10.15.png" alt="ERD" class="guide-img" style="height: auto; width:auto">
            <li>Index Students</li>
            <p>{{-- resources/views/students/index.blade.php --}}</p>
                <img src="../10/ss/10.16.png" alt="ERD" class="guide-img" style="height: auto; width:auto">
            <li>Create Student</li>
            <p>{{-- resources/views/students/create.blade.php --}}</p>
                <img src="../10/ss/10.17.png" alt="ERD" class="guide-img" style="height: auto; width:auto"> 
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
