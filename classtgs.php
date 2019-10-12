<?php
class rpl2
{
    public $wali_kelas;
    public $ketua_murid;
    public $seker;
    public $bendhara;
    public $nama;

        public function berisik()
        {
            return"Dukstakdukstak";
        }
       
}

$kimi = new kimi();
$kimi -> wali_kelas = "Pak Wildan";

echo "Wali_Kelas : " . $kimi -> wali_kelas;
?>