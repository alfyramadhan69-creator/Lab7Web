<?php
// Ketentuan NIM: hanya angka, panjang tepat 9 digit
$error = "";
$nim = "";
$valid = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nim = trim($_POST["nim"] ?? "");

    if ($nim === "") {
        $error = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim)) {
        $error = "NIM hanya boleh berisi angka.";
    } elseif (strlen($nim) !== 9) {
        $error = "NIM harus terdiri dari 9 digit.";
    } else {
        $valid = true;
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Eksperimen 4</title></head>
<body>
<h2>Eksperimen 4 - Validasi NIM (angka, 9 digit)</h2>
<form method="POST" action="">
    <label for="nim">NIM:</label>
    <input id="nim" name="nim" type="text" value="<?= htmlspecialchars($nim, ENT_QUOTES, 'UTF-8') ?>">
    <button type="submit">Cek</button>
</form>
<?php
if ($error !== "") {
    echo "<p style='color:red'>" . htmlspecialchars($error) . "</p>";
} elseif ($valid) {
    echo "<p style='color:green'>NIM " . htmlspecialchars($nim) . " valid.</p>";
}
?>
<p><a href="index.php">&laquo; Kembali</a></p>
</body>
</html>
