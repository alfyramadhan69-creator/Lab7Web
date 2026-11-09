<?php
$nama = "";
$diproses = false;
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $diproses = true;
}
?>
<!DOCTYPE html>
<html lang="id">
<head><meta charset="UTF-8"><title>Eksperimen 5</title></head>
<body>
<h2>Eksperimen 5 - Tombol Reset vs Proses Ulang di Server</h2>
<form method="POST" action="">
    <label for="nama">Nama:</label>
    <input id="nama" name="nama" type="text" value="<?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?>">
    <button type="submit">Kirim</button>
    <button type="reset">Reset</button>
</form>

<?php if ($diproses): ?>
    <p>Server menerima nama: <strong><?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?></strong>
       (diproses pukul <?= date("H:i:s") ?>)</p>
<?php endif; ?>

<h3>Perbedaan</h3>
<ul>
    <li><b>Tombol reset (type="reset")</b>: dijalankan di browser. Mengembalikan isi field ke nilai awal atribut
        <code>value</code> di HTML. Tidak ada request ke server dan PHP tidak dijalankan.</li>
    <li><b>Pemrosesan ulang di server</b> (submit / reload): browser mengirim request baru, PHP dieksekusi lagi,
        dan halaman dibangun ulang dari data yang dikirim.</li>
</ul>
<p><a href="index.php">&laquo; Kembali</a></p>
</body>
</html>
