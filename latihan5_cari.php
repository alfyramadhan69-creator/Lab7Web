<?php
$kata = isset($_GET["kata"]) ? trim($_GET["kata"]) : null;
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Latihan 5</title></head>
<body>
<h2>Latihan 5 - Form GET</h2>
<form method="GET" action="">
    <label for="kata">Kata kunci:</label>
    <input id="kata" name="kata" type="text" value="<?= htmlspecialchars($kata ?? "", ENT_QUOTES, "UTF-8") ?>">
    <button type="submit">Cari</button>
</form>
<?php
if ($kata !== null) {
    echo "Kata kunci: " . htmlspecialchars($kata, ENT_QUOTES, "UTF-8");
}
?>
<p><small>Amati URL setelah submit (muncul ?kata=...). Jangan kirim kata sandi/data sensitif lewat GET.</small></p>
<p><a href="index.php">&laquo; Kembali</a></p>
</body>
</html>
