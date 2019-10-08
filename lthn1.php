<?php 
    class oppo{
       var $merk;
       var $warna;
       var $harga;

        function eli_hp(){
            return "Beli hp";
        }
        function jangan_beli(){
            return "Jangan beli";
        }
    }

    $oppo_shop = new oppo();

    $oppo_shop->merk = "OPPO";
    $oppo_shop->warna = "Blue";
    $oppo_shop->harga = "RP.1.5 Jt";

    echo $oppo_shop->merk;
    echo "<br />";
    echo $oppo_shop->warna;
    echo "<br />";
    echo $oppo_shop->harga;
    echo "<br />";

    echo $oppo_shop->beli_hp();
?>