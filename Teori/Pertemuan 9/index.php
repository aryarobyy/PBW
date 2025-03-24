<?php
$mahasiswa = array("Roby" ,"Akmal", "Budi", "Ilham", "Yayan", "Asep", "Adi");

echo "Daftar Mahasiswa:\n";
foreach ($mahasiswa as $nama) {
    echo $nama . "\n";
}

echo "\nMahasiswa yang dimulai dengan huruf 'A':\n";
foreach ($mahasiswa as $nama) {
    if (strtoupper(substr($nama, 0, 1)) === "A") {
        echo $nama . "\n";
    }
}
?>