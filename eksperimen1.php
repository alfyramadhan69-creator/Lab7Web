<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Eksperimen 1</title></head>
<body>
<h2>Eksperimen 1 - Rata-rata Tiga Komponen Nilai</h2>
<?php
function hitungRataRata($a, $b, $c) {
    return ($a + $b + $c) / 3;
}

$tugas = 85;
$uts = 78;
$uas = 90;

echo "Tugas: $tugas, UTS: $uts, UAS: $uas<br>";
echo "Rata-rata: " . number_format(hitungRataRata($tugas, $uts, $uas), 2);
?>
<p><a href="index.php">&laquo; Kembali</a></p>
</body>
</html>
