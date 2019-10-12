<?php
class Mobil {

    public $jln = "Toyota Agya";
    public function __construct()
    {
        echo "Mobil masuk garasi <br>";
    }
    public function __destruct() {
        echo "Mobil masuk halaman rumah";
    }   
}
class Watak extends Mobil
{
    public function __construct()
    {
        parent::__construct();
        echo "Mobil masuk halaman rumah <br>";
    }
    public function type()
    {
        echo "type mobil";
    }
    public function __destruct()
    {
        echo "Mobil masuk garasi <br>";
        parent:: __destruct();
    }
}
$mob = new Watak();
$mob->type();
echo $mob->jenis . "<br>";
?>