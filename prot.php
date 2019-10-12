<?php
class Mobil {

    protected $pemilik;

    protected function Kemudikan_Mobil() {
        return "Kemudikan Mobil";
    }
}

$mob = new Mobil();
$mob->pemilik="Kimi";


echo $mob->pemilik;


echo $mob->Kemudikan_Mobil();
?>