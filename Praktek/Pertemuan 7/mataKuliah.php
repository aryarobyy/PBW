<?php
include "connect.php";

if (isset($_POST['tambah'])) {
    $kode = $_POST['kodemk'];
    $nama = $_POST['nama'];
    $sks  = $_POST['sks'];
    $conn->query("INSERT INTO matakuliah (kodemk, nama, jumlah_sks) VALUES ('$kode', '$nama', $sks)");
}

$data = $conn->query("SELECT * FROM matakuliah");

if (isset($_GET['hapus'])) {
    $conn->query("DELETE FROM matakuliah WHERE kodemk = '$_GET[hapus]'");
    header("Location: mataKuliah.php");
}
?>

<h2>Data Mata Kuliah</h2>
<form method="post">
    <input type="text" name="kodemk" placeholder="Kode MK" required><br>
    <input type="text" name="nama" placeholder="Nama Mata Kuliah" required><br>
    <input type="number" name="sks" placeholder="SKS" required><br>
    <button name="tambah">Tambah</button>
</form>

<table border="1">
    <tr><th>Kode</th><th>Nama</th><th>SKS</th><th>Aksi</th></tr>
    <?php while($mk = $data->fetch_assoc()): ?>
    <tr>
        <td><?= $mk['kodemk'] ?></td>
        <td><?= $mk['nama'] ?></td>
        <td><?= $mk['jumlah_sks'] ?></td>
        <td><a href="?hapus=<?= $mk['kodemk'] ?>" onclick="return confirm('Hapus?')">Hapus</a></td>
    </tr>
    <?php endwhile; ?>
</table>
