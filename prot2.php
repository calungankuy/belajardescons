<?php
 
// buat class laptop
class Mobil {
 
   // buat protected property
   protected $pemilik="Abimanyu <br />";
 
   public function akses_pemilik() {
      return $this->pemilik;
   }
   protected function Kemudikan_Mobil() {
      return "Hidupkan Laptop";
   }
   public function paksa_hidup() {
      return $this->Kemudikan_Mobil();
   }
}
  
// buat objek dari class laptop (instansiasi)
$mob = new Mobil();
  
// jalankan method akses_pemilik()
echo $mob->akses_pemilik(); // "Anto"
  
// jalankan method paksa_hidup()
echo $mob->paksa_hidup(); // "Hidupkan Laptop"
?>