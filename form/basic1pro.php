<?php 
    //Logika
    class Aritmatika
    {
        public $bil1;
        public $bil2;
        public function __construct($bil1, $bil2)
        {
            $this->bil1 = $bil1;
            $this->bil2 = $bil2; 
        }
        public function tambah()
        {
            $tambah = $this->bil1 + $this->$bil2;
            return "Hasil Pertambahan : $tambah<br>";
        }
        public function kurang()
        {
            $kurang = $this->bil1 - $this->bil2;
            return "Hasil Bilangan $this->bil1 - $this->bil2 : $kurang<br>";
        }
        public function kali()
        {
            $kali = $this->bil1 * $this->bil2;
            return "Hasil Perkalian : $kali<br>";
        }
        public function bagi()
        {
            $bagi = $this->bil1 / $this->bil2;
            return "Hasil Pembagian : $bagi<br>";
        }
    }

    //bisa menggunakan include 'lokasi';
    //jika mau memisahkan antara Logika dan Isi/Tampilan nya harus membuat file baru
    //dan memindahkanya logika ke file yang baru


    //Isi/tampilan
    if(isset($_POST['ps'])) {
        $a = $_POST['1'];
        $b = $_POST['2'];
    }
    echo "<center>Hasil Perhitungan </center><br>";
    $hasil = new Aritmatika($a,$b);
    echo $hasil->tambah();
    echo $hasil->kurang();
    echo $hasil->kali();
    echo $hasil->bagi();
?>