<?php 
    //buat class laptop
    class laptop{

        //buat property untuk class laptop
        public $pemilik = "Ariz";
        public $merk = "Lenovo";
        public $ukuran_layar = "15 Inchi";

        //buat method untuk class laptop
        public function hidupkan_laptop() {
            return "Hidupkan Laptop";
        }
        public function matikan_laptop() {
            return "Matikan Laptop";
        }
    }

    //buat objek dari class laptop (instansiasi)
    $laptop_anto = new laptop();
    $laptop_andi = new laptop();
    echo "Pemilik : $laptop_anto->pemilik<br>";
    echo "Merk : $laptop_anto->merk<br>";
    echo "Ukuran Layar : $laptop_anto->ukuran_layar<br>";

    echo $laptop_anto->hidupkan_laptop();
    echo "<br>";
    echo $laptop_anto->matikan_laptop();
?>