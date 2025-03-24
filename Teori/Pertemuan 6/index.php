<?php
echo "Daftar Bilangan Genap kurang dari 100:\n";
for ($i = 0; $i < 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . " ";
    }
}

echo "\n\nDaftar Bilangan Ganjil kurang dari 100:\n";
for ($i = 0; $i < 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . " ";
    }
}
?>
