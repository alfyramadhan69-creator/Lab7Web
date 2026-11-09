<?php
$nama = "";
$prodi = "";
$diproses = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $diproses = true;
}
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Latihan 6</title></head>
<body>
<h2>Latihan 6 - Form POST</h2>
<form method="POST" action="">
    <label for="nama">Nama:</label>
    <input id="nama" name="nama" type="text" value="<?= htmlspecialchars($nama, ENT_QUOTES, "UTF-8") ?>">
    <label for="prodi">Program Studi:</label>
    <input id="prodi" name="prodi" type="text" value="<?= htmlspecialchars($prodi, ENT_QUOTES, "UTF-8") ?>">
    <button type="submit" name="kirim">Kirim Data</button>
</form>
<?php
if ($diproses) {
    if ($nama === "" || $prodi === "") {
        echo "<p>Semua kolom wajib diisi.</p>";
    } else {
        echo "<h3>Data diterima</h3>";
        echo "Nama: " . htmlspecialchars($nama, ENT_QUOTES, "UTF-8") . "<br>";
        echo "Program Studi: " . htmlspecialchars($prodi, ENT_QUOTES, "UTF-8");
    }
}
?>
<p><a href="index.php">&laquo; Kembali</a></p>
</body>
</html>
