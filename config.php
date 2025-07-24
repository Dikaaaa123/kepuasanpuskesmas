<?php
// Konfigurasi database
$host = 'localhost';         // biasanya localhost
$db   = 'survey_puskesmas';  // nama database kamu
$user = 'root';              // default XAMPP user
$pass = '';                  // default password kosong
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION, // aktifkan mode error exception
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,       // fetch data as associative array
    PDO::ATTR_EMULATE_PREPARES   => false,                  // gunakan prepared statement asli
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    die('Koneksi database gagal: ' . $e->getMessage());
}
?>
