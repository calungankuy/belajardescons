<?php
class rpl2
{
    public $wali_kelas;
    public $ketua_murid;
    public $seker;
    public $bendhara;
    public $nama;

    public function bersuara()
    {
      return"Dukstakdukstak";
    }
       
}

$kimi = new rpl2();
$kimi -> wali_kelas = "Pak Wildan";
$kimi -> ketua_murid = "Raihan";
$kimi -> sekretaris = "Naila";
$kimi -> nama = "Hilmi";

echo "Kelas XI RPL 2<br> Wali Kelas:$kimi-> wali_kelas
    <br> Ketua Murid : $kimi -> ketua_murid
    <br> Sekretaris : $kimi -> sekretaris
    <br> Nama Siswa : $kimi -> nama";
    ?>