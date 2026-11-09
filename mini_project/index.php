<?php require __DIR__ . "/proses.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Formulir Data Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 520px; margin: 30px auto; }
        label { display: block; margin-top: 10px; }
        input { width: 100%; padding: 6px; box-sizing: border-box; }
        button { margin-top: 15px; padding: 8px 16px; }
        .error { background: #fdecea; border: 1px solid #f5c6cb; padding: 10px; margin-top: 15px; }
        .ok { background: #e8f5e9; border: 1px solid #c3e6cb; padding: 10px; margin-top: 15px; }
    </style>
</head>
<body>
<h2>Formulir Data Mahasiswa</h2>

<form method="POST" action="">
    <label for="nama">Nama</label>
    <input id="nama" name="nama" type="text" value="<?= htmlspecialchars($old['nama'], ENT_QUOTES, 'UTF-8') ?>">

    <label for="nim">NIM</label>
    <input id="nim" name="nim" type="text" value="<?= htmlspecialchars($old['nim'], ENT_QUOTES, 'UTF-8') ?>">

    <label for="prodi">Program Studi</label>
    <input id="prodi" name="prodi" type="text" value="<?= htmlspecialchars($old['prodi'], ENT_QUOTES, 'UTF-8') ?>">

    <label for="semester">Semester (1–14)</label>
    <input id="semester" name="semester" type="text" value="<?= htmlspecialchars($old['semester'], ENT_QUOTES, 'UTF-8') ?>">

    <label for="email">Email</label>
    <input id="email" name="email" type="text" value="<?= htmlspecialchars($old['email'], ENT_QUOTES, 'UTF-8') ?>">

    <button type="submit">Kirim</button>
</form>
<!-- Sengaja tanpa atribut required/type=email agar validasi server-side bisa diuji -->

<?php if ($error): ?>
    <div class="error">
        <strong>Terdapat kesalahan:</strong>
        <ul>
            <?php foreach ($error as $pesan): ?>
                <li><?= htmlspecialchars($pesan, ENT_QUOTES, 'UTF-8') ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php elseif ($data): ?>
    <div class="ok">
        <h3>Data Mahasiswa Diterima</h3>
        <table>
            <tr><td>Nama</td><td>: <?= htmlspecialchars($data['nama'], ENT_QUOTES, 'UTF-8') ?></td></tr>
            <tr><td>NIM</td><td>: <?= htmlspecialchars($data['nim'], ENT_QUOTES, 'UTF-8') ?></td></tr>
            <tr><td>Program Studi</td><td>: <?= htmlspecialchars($data['prodi'], ENT_QUOTES, 'UTF-8') ?></td></tr>
            <tr><td>Semester</td><td>: <?= (int)$data['semester'] ?></td></tr>
            <tr><td>Email</td><td>: <?= htmlspecialchars($data['email'], ENT_QUOTES, 'UTF-8') ?></td></tr>
        </table>
    </div>
<?php endif; ?>

<p><a href="../index.php">&laquo; Kembali</a></p>
</body>
</html>
