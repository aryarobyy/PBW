<?php
include "connect.php";

if (isset($_POST['tambah'])) {
    $npm = $_POST['npm'];
    $kodemk = $_POST['kodemk'];
    $conn->query("INSERT INTO krs (mahasiswa_npm, matakuliah_kodemk) VALUES ('$npm', '$kodemk')");
}

$mhsList = $conn->query("SELECT * FROM mahasiswa");
$mkList = $conn->query("SELECT * FROM matakuliah");

$data = $conn->query("
    SELECT m.nama AS nama_mahasiswa, mk.nama AS nama_mk, mk.jumlah_sks
    FROM krs k
    JOIN mahasiswa m ON k.mahasiswa_npm = m.npm
    JOIN matakuliah mk ON k.matakuliah_kodemk = mk.kodemk
");
?>

<h2>Tambah KRS</h2>
<form method="post">
    <select name="npm">
        <?php while($m = $mhsList->fetch_assoc()): ?>
            <option value="<?= $m['npm'] ?>"><?= $m['nama'] ?></option>
        <?php endwhile; ?>
    </select>

    <select name="kodemk">
        <?php while($mk = $mkList->fetch_assoc()): ?>
            <option value="<?= $mk['kodemk'] ?>"><?= $mk['nama'] ?></option>
        <?php endwhile; ?>
    </select>

    <button name="tambah">Tambah</button>
</form>

<h2>Data KRS</h2>
<table border="1">
    <tr><th>No</th><th>Nama Lengkap</th><th>Mata Kuliah</th><th>Keterangan</th></tr>
    <?php
    $no = 1;
    while ($row = $data->fetch_assoc()):
        $keterangan = "{$row['nama_mahasiswa']} Mengambil Mata Kuliah {$row['nama_mk']} ({$row['jumlah_sks']} SKS)";
    ?>
    <tr>
        <td><?= $no++ ?></td>
        <td><?= $row['nama_mahasiswa'] ?></td>
        <td><?= $row['nama_mk'] ?></td>
        <td><?= $keterangan ?></td>
    </tr>
    <?php endwhile; ?>
</table>
