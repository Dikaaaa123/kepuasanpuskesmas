<?php
session_start();
require 'config.php';

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

$user_id = $_SESSION['user_id'];

// Ambil data dari form
$medis = [];
$fasilitas = [];

for ($i = 0; $i < 3; $i++) {
    $medis[] = isset($_POST["medis_$i"]) ? (int)$_POST["medis_$i"] : null;
    $fasilitas[] = isset($_POST["fasilitas_$i"]) ? (int)$_POST["fasilitas_$i"] : null;
}

$kepuasan_umum = $_POST['kepuasan_umum'] ?? '';
$kelebihan = $_POST['kelebihan'] ?? '';
$kekurangan = $_POST['kekurangan'] ?? '';
$saran_lain = $_POST['saran_lain'] ?? '';

// Simpan ke database
$stmt = $pdo->prepare("INSERT INTO responses (
    user_id, 
    medis_0, medis_1, medis_2,
    fasilitas_0, fasilitas_1, fasilitas_2,
    kepuasan_umum, kelebihan, kekurangan, saran_lain
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

$stmt->execute([
    $user_id,
    $medis[0], $medis[1], $medis[2],
    $fasilitas[0], $fasilitas[1], $fasilitas[2],
    $kepuasan_umum, $kelebihan, $kekurangan, $saran_lain
]);

// Redirect setelah sukses
header("Location: thankyou.php");
exit;
?>
