<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Eksperimen 2</title></head>
<body>
<h2>Eksperimen 2 - Cari Nama dari Array (GET)</h2>
<form method="GET" action="">
    <label for="kata">Cari nama:</label>
    <input id="kata" name="kata" type="text">
    <button type="submit">Cari</button>
</form>
<?php
$data = ["Alya", "Bima", "Citra", "Doni", "Eka", "Fajar", "Gita"];

if (isset($_GET["kata"])) {
    $kata = trim($_GET["kata"]);
    echo "<p>Kata kunci: " . htmlspecialchars($kata, ENT_QUOTES, "UTF-8") . "</p>";

    if ($kata === "") {
        echo "<p>Masukkan kata kunci terlebih dahulu.</p>";
    } else {
        $hasil = [];
        foreach ($data as $nama) {
            if (stripos($nama, $kata) !== false) {
                $hasil[] = $nama;
            }
        }
        if ($hasil) {
            echo "<p>Ditemukan " . count($hasil) . " nama:</p><ul>";
            foreach ($hasil as $nama) {
                echo "<li>" . htmlspecialchars($nama) . "</li>";
            }
            echo "</ul>";
        } else {
            echo "<p>Tidak ada nama yang cocok.</p>";
        }
    }
}
?>
<p><a href="index.php">&laquo; Kembali</a></p>
</body>
</html>
