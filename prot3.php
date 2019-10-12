<?php
 
// buat class komputer
class Tipe{
 
   // property dengan hak akses protected
   protected $jenis_mobil = "Intel Core i7-4790 3.6Ghz";
}
  
// buat class laptop
class Mobil extends Tipe{
   public function tampilkan_jenis_mobil() {
     return $this->jenis_mobil;
   }
}
  
// buat objek dari class laptop (instansiasi)
$mob = new Mobil();
  
// jalankan method
echo $mob->tampilkan_jenis_mobil(); // "In