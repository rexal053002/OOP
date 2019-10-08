<?php 
    //buat class laptop
    class laptop{

        //buat protected property
        protected $pemilik;

        //buat protected method
        protected function hidupkan_laptop(){
            return "Hidupkan Laptop";
        }
    }

    //buat objek dari class laptop (instansiasi)
    $laptop_anto = new laptop();

    //set protected property akan menghasilkan eror
    $laptop_anto->pemilik = "Anto";
    //fatal error:cannot acsess protected property laptop:: $pemilik
    
    //tampilkan protected property akan mengahasilkan error
    echo $laptop_anto->hidupkan_laptop();
    //Fatal error : call to protected method laptop::hidupkan_laptop()
    //from context
?>