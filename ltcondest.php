<?php 
    class Handphone
    {
        public $merk = "OPPO Realme";
        public function __construct()
        {
            echo "Realme C1";
        }
        public function __destruct()
        {
            echo "Realme 2";
        }
    }
    class Harga extends Handphone
    {
        public function __construct()
        {
            parent::__construct();
            echo "Harga Realme C1 = Rp.1.500.000";
        }
        public function warna(){
            echo "Warna Handphone Realme :<br>";
        }
        public function __destruct(){
            echo "Harga Realme 2 = Rp.2.000.000";
            parent::__destruct();
        }
    }
    $hp = new Harga();
    $hp->warna();
    echo $hp->warna . "<br>"; 
?>