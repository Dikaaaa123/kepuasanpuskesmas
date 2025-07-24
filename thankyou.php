<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

// Ambil semua data dari tabel responses
$stmt = $pdo->query("SELECT * FROM responses");
$responses = $stmt->fetchAll();

// Hitung jumlah responden per nilai kepuasan_umum (1-5)
$kepuasan = [1 => 0, 2 => 0, 3 => 0, 4 => 0, 5 => 0];
foreach ($responses as $res) {
    $nilai = $res['kepuasan_umum'];
    if (isset($kepuasan[$nilai])) {
        $kepuasan[$nilai]++;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Terima Kasih - Survey Puskesmas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body class="bg-light">
    <div class="container py-5 text-center">
        <h2 class="mb-4">Terima kasih telah mengisi survei!</h2>
        <p>Berikut adalah ringkasan hasil dari responden lainnya:</p>

        <div class="card shadow-sm p-4 my-4">
            <h5 class="mb-3">Kepuasan Umum Pelayanan</h5>
            <canvas id="chartKepuasan" height="120"></canvas>
        </div>

        <a href="logout.php" class="btn btn-danger mt-3">Keluar</a>
    </div>

    <script>
        const ctx = document.getElementById('chartKepuasan').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['1 - Sangat Tidak Puas', '2 - Tidak Puas', '3 - Cukup', '4 - Puas', '5 - Sangat Puas'],
                datasets: [{
                    label: 'Jumlah Responden',
                    data: [
                        <?= $kepuasan[1] ?>,
                        <?= $kepuasan[2] ?>,
                        <?= $kepuasan[3] ?>,
                        <?= $kepuasan[4] ?>,
                        <?= $kepuasan[5] ?>
                    ],
                    backgroundColor: 'rgba(54, 162, 235, 0.6)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: { precision: 0 }
                    }
                }
            }
        });
    </script>
</body>
</html>
