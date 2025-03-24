<?php
echo "Masukkan Umurmu:";

$n = 16; //gaada umur yang make koma

if ($n < 13) {
    echo "$n Termasuk kategori Anak\n";
} else if ($n <= 17) {
    echo "$n Termasuk kategori Remaja\n";
} else if ($n >= 18 && $n < 80) {
    echo "$n Termasuk kategori Dewasa\n";
} else if ($n >= 80 && $n <= 120) {
    echo "$n Termasuk sesepuh kehidupan\n";
} else {
    echo "Sepertinya mustahil punya umur segini";
}


?>
