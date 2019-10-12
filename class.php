<?php
    //1.Class adalah sebuah blueprint / template
    //Untuk membuat instance dari object
    //2.Class mendefinisikan object
    //3.Menyimpan data(property) dan
    //prilaku(method)

    //Membuat class dengan nama Kucing
    class Kucing 
    {
        //Membuat Property
        public $kimi;
        public $jml_kaki; 
        public $mkn_fav;
        
        //membuat method dengan nanma bersuara
        public function bersuara()
        {
            return"Miawww";
        }
    }
    //membuat objek baru
    //ditandai dengan keyword "new"
    $Kucing1 = new Kucing();
    $Kucing1 -> warna = "putih";
    // var_dump($Kucing);
        echo "Warna Kucing : " . $Kucing1 -> warna;
        ?>
