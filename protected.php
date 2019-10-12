<?php
class Laptop {

    protected $pemilik;

    protected function hidupkan_laptop() {
        return "Hidupkan Laptop";
    }

}
$laptop_kimi = new Laptop();

$laptop_kimi->pemilik="Kimi";


echo $laptop_kimi->pemilik;


echo $laptop_kimi->hidupkan_laptop();
?>
