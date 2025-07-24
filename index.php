<?php session_start(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Survey Kepuasan Pelanggan Puskesmas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
        }
        .hero {
            padding: 60px 20px;
            background-color: #f8f9fa;
            text-align: center;
        }
        .info-box {
            padding: 20px;
            border-radius: 8px;
            background-color: #ffffff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }
        .step-circle {
            width: 40px;
            height: 40px;
            background-color: #0d6efd;
            color: white;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            margin-bottom: 10px;
        }
        footer {
            background-color: #212529;
            color: #f8f9fa;
            padding: 40px 20px;
        }
        .navbar-brand {
            font-weight: bold;
        }
        a.btn-primary {
            background-color: #0d6efd;
            border: none;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">PUSKESMAS</a>
        <div class="collapse navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item"><a class="nav-link" href="#">Beranda</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Survey</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Tentang</a></li>
                <li class="nav-item"><a class="nav-link" href="login.php">Masuk</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <h1 class="fw-bold text-primary">Survey Kepuasan<br>Pelanggan Puskesmas</h1>
        <p class="mt-3">Bantu kami meningkatkan pelayanan dengan memberikan penilaian dan masukan Anda terhadap layanan Puskesmas.</p>
        <a href="login.php" class="btn btn-primary btn-lg mt-3">Isi Survey</a>
    </div>
</section>

<!-- Mengapa Pendapat Anda Penting -->
<section class="py-5">
    <div class="container">
        <h4 class="text-center mb-4 fw-bold">Mengapa Pendapat Anda Penting?</h4>
        <div class="row text-center g-4">
            <div class="col-md-4">
                <div class="info-box">
                    <div class="text-primary fs-1">📈</div>
                    <h6 class="mt-3">Peningkatan Layanan</h6>
                    <p>Masukan Anda membantu kami mengetahui area apa yang perlu ditingkatkan agar pelayanan menjadi lebih baik.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <div class="text-primary fs-1">👥</div>
                    <h6 class="mt-3">Fokus pada Pasien</h6>
                    <p>Kami ingin memastikan semua pasien merasa puas dan terlayani dengan baik.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-box">
                    <div class="text-primary fs-1">🔄</div>
                    <h6 class="mt-3">Evaluasi Berkelanjutan</h6>
                    <p>Data dari survey digunakan sebagai dasar dalam evaluasi dan pengambilan keputusan.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Cara Mengisi Survey -->
<section class="py-5 bg-light">
    <div class="container text-center">
        <h4 class="fw-bold mb-4">Cara Mengisi Survey</h4>
        <div class="row g-4">
            <div class="col-md-3">
                <div class="step-circle mx-auto">1</div>
                <h6>Daftar / Masuk</h6>
                <p>Buat akun atau masuk untuk memulai survey.</p>
            </div>
            <div class="col-md-3">
                <div class="step-circle mx-auto">2</div>
                <h6>Isi Data Diri</h6>
                <p>Lengkapi informasi dasar yang diperlukan.</p>
            </div>
            <div class="col-md-3">
                <div class="step-circle mx-auto">3</div>
                <h6>Isi Survey</h6>
                <p>Berikan penilaian dan masukan Anda.</p>
            </div>
            <div class="col-md-3">
                <div class="step-circle mx-auto">4</div>
                <h6>Kirim</h6>
                <p>Kirim survey Anda untuk dikumpulkan.</p>
            </div>
        </div>
        <a href="register.php" class="btn btn-primary mt-4">Mulai Survey Sekarang</a>
    </div>
</section>

<!-- Footer -->
<footer class="mt-5">
    <div class="container">
        <div class="row text-center text-md-start">
            <div class="col-md-4 mb-3">
                <h6>PUSKESMAS</h6>
                <p>Melayani dengan sepenuh hati untuk kesehatan masyarakat yang lebih baik.</p>
            </div>
            <div class="col-md-4 mb-3">
                <h6>Link Cepat</h6>
                <p><a href="#" class="text-white text-decoration-none">Survey</a></p>
                <p><a href="#" class="text-white text-decoration-none">Tentang</a></p>
                <p><a href="login.php" class="text-white text-decoration-none">Masuk</a></p>
            </div>
            <div class="col-md-4 mb-3">
                <h6>Kontak</h6>
                <p>Jl. Sehat No. 123, Kota</p>
                <p>+62 123-456-789</p>
                <p>info@puskesmas.go.id</p>
            </div>
        </div>
        <hr class="bg-white">
        <p class="text-center">&copy; 2025 Puskesmas. Hak Cipta Dilindungi.</p>
    </div>
</footer>

</body>
</html>
