<?php
class laptop {

    var $pemilik;
    var $merk;
    var $ukuran_layar;

    function Hidupkan_laptop() {
        return "Hidupkan Laptop";
    }
    function Matikan_laptop() {
        return "Matikan Laptop";
    }
}

$laptop_anto = new laptop();
$laptop_anto->pemilik = "Anto";
$laptop_anto->merk = "Asus";
$laptop_anto->ukuran_layar = "15 inchi";

echo $laptop_anto->pemilik;
echo "<br />";
echo $laptop_anto->merk;
echo "<br />";
echo $laptop_anto->ukuran_layar;
echo "<br />";

echo $laptop_anto->hidupkan_laptop();
echo "<br />";
echo $laptop_anto->matikan_laptop();
?>