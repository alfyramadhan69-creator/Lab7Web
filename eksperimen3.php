<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Eksperimen 3</title></head>
<body>
<h2>Eksperimen 3 - Function Format Rupiah</h2>
<?php
function formatRupiah($angka) {
    return "Rp" . number_format($angka, 0, ",", ".");
}

echo formatRupiah(150000) . "<br>";
echo formatRupiah(1250000) . "<br>";
echo formatRupiah(999) . "<br>";
?>
<p><a href="index.php">&laquo; Kembali</a></p>
</body>
</html>
