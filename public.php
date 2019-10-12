<?php
class Laptop {

    public $pemilik;

    public function Hidupkan_Laptop() {
        return "Hidupkan Laptop";
    }
}
$laptop_kimi = new Laptop();
$laptop_kimi->pemilik="Hilmi";
echo $laptop_kimi->pemilik;
echo $laptop_kimi->Hidupkan_Laptop();
?>