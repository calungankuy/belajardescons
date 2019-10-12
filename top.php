<?php
class Laptop {

    public $pemilik;
    public $merk;
    public $ukuran_layar;

    public function hidupkan_laptop() {
        return "Hidupkan Laptop";
    }
    public function matikan_laptop() {
        return "Matikan Laptop";
    }
}
$laptop_anto = new Laptop();
$laptop_andi = new Laptop();
?>