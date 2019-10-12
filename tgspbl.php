<?php 
class Mobil{
    
 /*ini properties*/
 public $roda = 4;
 public $kecepatan = 0;
 public $warna = 'putih'; 
 public $gigi = 0; //gigi normal
 protected $pabrikan = 'Honda'; //hak akses protected
 private $jml_kursi = 4;
 
 public function infoMobil(){
  
  echo "Jumlah kursinya : ". $this->jml_kursi;
  echo "Pabrikan : ". $this->pabrikan;
 }