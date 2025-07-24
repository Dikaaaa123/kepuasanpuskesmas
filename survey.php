<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Isi Survey - Puskesmas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f8f9fa; }
        .card { margin-top: 40px; }
        .rating-label {
            display: block;
            text-align: center;
            font-size: 12px;
        }
        .rating-options {
            display: flex;
            justify-content: space-between;
            max-width: 350px;
            margin: 0 auto 15px;
        }
        .rating-options input[type="radio"] {
            display: none;
        }
        .rating-options label {
            cursor: pointer;
            text-align: center;
        }
        .rating-options label span {
            display: block;
            font-size: 24px;
        }
        .rating-options input[type="radio"]:checked + label {
            color: #0d6efd;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="card shadow">
        <div class="card-body">
            <h4 class="mb-4 text-primary text-center">Survey Kepuasan Pelayanan Puskesmas</h4>
            <form action="submit.php" method="POST">

                <!-- Bagian 1: Pelayanan Medis -->
                <h5 class="mb-3">Berikan penilaian Anda terhadap pelayanan medis di Puskesmas kami.</h5>
                <?php
                $pertanyaan_medis = [
                    "Kecepatan penanganan medis",
                    "Kejelasan informasi dari dokter/perawat",
                    "Keterampilan dan profesionalisme dokter/perawat"
                ];
                foreach ($pertanyaan_medis as $i => $q) {
                    echo "<div class='mb-4'>";
                    echo "<label class='form-label'>" . ($i + 1) . ". $q</label>";
                    echo "<div class='rating-options'>";
                    for ($r = 1; $r <= 5; $r++) {
                        $id = "medis_{$i}_$r";
                        $label = match($r) {
                            1 => "😠<br>Sangat Lambat",
                            2 => "☹️<br>Lambat",
                            3 => "😐<br>Cukup",
                            4 => "🙂<br>Cepat",
                            5 => "😃<br>Sangat Cepat",
                        };
                        echo "
                        <div>
                            <input type='radio' id='$id' name='medis_$i' value='$r' required>
                            <label for='$id'><span>$label</span></label>
                        </div>";
                    }
                    echo "</div></div>";
                }
                ?>

                <!-- Bagian 2: Fasilitas -->
                <h5 class="mt-5 mb-3">Fasilitas</h5>
                <?php
                $pertanyaan_fasilitas = [
                    "Kebersihan ruangan",
                    "Kenyamanan ruang tunggu",
                    "Kelengkapan peralatan medis"
                ];
                foreach ($pertanyaan_fasilitas as $i => $q) {
                    echo "<div class='mb-4'>";
                    echo "<label class='form-label'>" . ($i + 1) . ". $q</label>";
                    echo "<div class='rating-options'>";
                    for ($r = 1; $r <= 5; $r++) {
                        $id = "fasilitas_{$i}_$r";
                        $label = match($r) {
                            1 => "😠<br>Sangat Buruk",
                            2 => "☹️<br>Buruk",
                            3 => "😐<br>Cukup",
                            4 => "🙂<br>Baik",
                            5 => "😃<br>Sangat Baik",
                        };
                        echo "
                        <div>
                            <input type='radio' id='$id' name='fasilitas_$i' value='$r' required>
                            <label for='$id'><span>$label</span></label>
                        </div>";
                    }
                    echo "</div></div>";
                }
                ?>

                <!-- Bagian 3: Saran dan Masukan -->
                <h5 class="mt-5 mb-3">Saran dan Masukan</h5>

                <div class="mb-3">
                    <label class="form-label">Secara keseluruhan, seberapa puas Anda dengan pelayanan kami?</label>
                    <select name="kepuasan_umum" class="form-select" required>
                        <option value="">Pilih tingkat kepuasan</option>
                        <option value="Sangat Puas">Sangat Puas</option>
                        <option value="Puas">Puas</option>
                        <option value="Cukup">Cukup</option>
                        <option value="Kurang">Kurang</option>
                        <option value="Sangat Kurang">Sangat Kurang</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label class="form-label">Menurut Anda, apa kelebihan dari pelayanan Puskesmas kami?</label>
                    <textarea class="form-control" name="kelebihan" rows="2"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Apa yang perlu ditingkatkan?</label>
                    <textarea class="form-control" name="kekurangan" rows="2"></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Saran dan masukan lainnya:</label>
                    <textarea class="form-control" name="saran_lain" rows="2"></textarea>
                </div>

                <div class="d-grid mt-4">
                    <button type="submit" class="btn btn-primary">Kirim Survey</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
