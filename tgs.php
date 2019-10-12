<?php
class Produk {

    var $pemilik;
    var $merk;
    var $buatan;

    function Jalankan_Mobil() {
        return "Jalankan Mobil";
    }
    function Matikan_Mobil() {
        return "Matikan Mobil";
    }
    
}
echo "____________________________ <br />";
$kimi = new Produk();
echo "Identitas Bray <br />";
$kimi->pemilik =" 1. Hilmi";
$kimi->merk = "2. Toyota Agya";
$kimi->buatan = "3. Jepang";

$aku = new Produk();
$aku->pemilik = "1. Dahlan Suhandi";
$aku->merk = "2. Daihastu Xenia";
$aku->buatan = "3. Jepang";

echo $kimi->pemilik;
echo "<br />";
echo $kimi->merk;
echo "<br />";
echo $kimi->buatan;
echo "<br />";

echo $kimi->Jalankan_Mobil();
echo "<br />";
echo $kimi->Matikan_Mobil();
echo "<br />";
echo "__________________________ <br />";

echo $aku->pemilik;
echo "<br />";
echo $aku->merk;
echo "<br />";
echo $aku->buatan;
echo "<br />";

echo $aku->Jalankan_Mobil();
echo "<br />";
echo $aku->Matikan_Mobil();
echo "<br />";
echo "__________________________ <br />";
?>


