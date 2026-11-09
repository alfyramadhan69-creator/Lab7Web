<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Latihan 3</title></head>
<body>
<h2>Latihan 3 - Perulangan dan Array</h2>
<?php
// 4 nama awal dari modul + 3 nama tambahan (minimal tiga nama)
$mahasiswa = ["Alya", "Bima", "Citra", "Doni", "Eka", "Fajar", "Gita"];

echo "<h3>Daftar Mahasiswa</h3><ol>";
foreach ($mahasiswa as $nama) {
    echo "<li>" . htmlspecialchars($nama) . "</li>";
}
echo "</ol>";
?>
<p><a href="index.php">&laquo; Kembali</a></p>
</body>
</html>
