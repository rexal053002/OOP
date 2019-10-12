<?php 
    class Komputer{
        public $processor = "Intel Core I 7";
        public function __construct() {
            echo "Construct dari Komputer <br>";
        }
        public function __destruct(){
            echo "Destruct dari Komputer <br>";
        }
    }
    class Laptop{
        public extends Komputer(){
        
            public function __construct(){
                parent::__construct();
                echo "Construct dari Laptop <br>";
            }
            public function spesifikasi(){
                echo "Spesifikasi Laptop :";
            }
            public function __destruct(){
                echo "Desctruct dari Laptop <br>";
                parent::__destruct();    
            }    
            }
        }
    $asus = new Laptop();
    $asus->spesifikasi();
    echo $asus->prosessor . "<br>"; 
?>