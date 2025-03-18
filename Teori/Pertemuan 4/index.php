<?php
//Nomor 1
$nomor1 = 20;
echo "ini adalah variabel dengan tipe data integer : $nomor1\n" ;
//Nomor 2
$nomor2 = 3.14;
echo "ini adalah variabel dengan tipe data float : $nomor2\n";
//Nomor 3
$nomor3 = "Pemrograman Web";
echo "ini adalah variabel dengan tipe data String : $nomor3\n";
//Nomor 4
$nomor4 = true;
echo "ini adalah variabel dengan tipe data boolean : $nomor4\n";
//Nomor 5
$nomor5 = ["cecep", "asep", "dudu"];
echo "ini adalah nama pertama pada array : $nomor5[0]\n";
//Nomor 6
class mobil {
    var $merk;
    var $tahun;
    function set_mobil ($merk, $tahun) {
        $this->merk = $merk;
        $this->tahun = $tahun;
    }
    function get_mobil () {
        return "Merk: ".$this->merk.", Tahun: ".$this->tahun;
    }
}
$nomor6 = new mobil();
$nomor6->set_mobil("Daihatsu", 2025);
echo $nomor6->get_mobil();
?>