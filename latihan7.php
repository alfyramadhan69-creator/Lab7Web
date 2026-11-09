<?php
$barang = "";
$hargaInput = "";
$jumlahInput = "";
$error = null;
$subtotal = null;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $barang = trim($_POST["barang"] ?? "");
    $hargaInput = trim($_POST["harga"] ?? "");
    $jumlahInput = trim($_POST["jumlah"] ?? "");

    // harga: angka desimal biasa (maks. 2 desimal), tanpa notasi ilmiah seperti 1e3
    $hargaValid = preg_match('/^\d+(\.\d{1,2})?$/', $hargaInput) === 1;
    $jumlahValid = ctype_digit($jumlahInput) && (int)$jumlahInput >= 1;

    if ($barang === "" || !$hargaValid || !$jumlahValid) {
        $error = "Periksa kembali nama barang, harga, dan jumlah.";
    } else {
        $harga = (float)$hargaInput;
        $jumlah = (int)$jumlahInput;
        $subtotal = $harga * $jumlah;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Latihan 7</title></head>
<body>
<h2>Latihan 7 - Pengolahan Data Sederhana</h2>
<form method="POST">
    <label>Nama barang <input name="barang" value="<?= htmlspecialchars($barang, ENT_QUOTES, "UTF-8") ?>" required></label><br>
    <label>Harga <input name="harga" type="number" min="0" step="0.01" value="<?= htmlspecialchars($hargaInput, ENT_QUOTES, "UTF-8") ?>" required></label><br>
    <label>Jumlah <input name="jumlah" type="number" min="1" step="1" value="<?= htmlspecialchars($jumlahInput, ENT_QUOTES, "UTF-8") ?>" required></label><br>
    <button type="submit">Hitung</button>
</form>
<?php
if ($error !== null) {
    echo "<p>" . htmlspecialchars($error, ENT_QUOTES, "UTF-8") . "</p>";
} elseif ($subtotal !== null) {
    echo "<p>Barang: " . htmlspecialchars($barang, ENT_QUOTES, "UTF-8") . "</p>";
    echo "<p>Harga: Rp" . number_format($harga, 2, ",", ".") . "</p>";
    echo "<p>Jumlah: " . $jumlah . "</p>";
    echo "<p>Subtotal: Rp" . number_format($subtotal, 0, ",", ".") . "</p>";
}
?>
<p><a href="index.php">&laquo; Kembali</a></p>
</body>
</html>
