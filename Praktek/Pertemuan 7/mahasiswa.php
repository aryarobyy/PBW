<?php
include "connect.php";

if (isset($_POST['tambah'])) {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    $conn->query("INSERT INTO mahasiswa (npm, nama, jurusan, alamat) VALUES ('$npm', '$nama', '$jurusan', '$alamat')");
}

$data = $conn->query("SELECT * FROM mahasiswa");

if (isset($_GET['hapus'])) {
    $conn->query("DELETE FROM mahasiswa WHERE npm = '$_GET[hapus]'");
    header("Location: mahasiswa.php");
}
?>

<h2>Data Mahasiswa</h2>
<form method="post">
    <input type="text" name="npm" placeholder="NPM" required><br>
    <input type="text" name="nama" placeholder="Nama" required><br>
    <select name="jurusan">
        <option value="Teknik Informatika">Teknik Informatika</option>
        <option value="Sistem Operasi">Sistem Operasi</option>
    </select><br>
    <textarea name="alamat" placeholder="Alamat"></textarea><br>
    <button name="tambah">Tambah</button>
</form>

<table border="1">
    <tr><th>NPM</th><th>Nama</th><th>Jurusan</th><th>Alamat</th><th>Aksi</th></tr>
    <?php while($mhs = $data->fetch_assoc()): ?>
    <tr>
        <td><?= $mhs['npm'] ?></td>
        <td><?= $mhs['nama'] ?></td>
        <td><?= $mhs['jurusan'] ?></td>
        <td><?= $mhs['alamat'] ?></td>
        <td><a href="?hapus=<?= $mhs['npm'] ?>" onclick="return confirm('Hapus?')">Hapus</a></td>
    </tr>
    <?php endwhile; ?>
</table>
