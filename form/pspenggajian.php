<?php 
    //class Penggajian
    //{
        //public $jmlhk;
        //public $nama;
        //public $alamat;
        //public $nip;
        //public $ppn = 0.025;
        //public function __construct($jmlhk, $nama , $nip , $ppn,$alamat)
        //{
            //$this->nama = $nama;
            //$this->nip = $nip;
            //$this->ppn = $ppn;
            //$this->jmlhk = $jmlhk;
            //$this->alamat = $alamat;  
        //}
        //public function Gajikotor()
        //{
            //$gajik = $this->jmlhk * 75000;
            //return "$gajik";
        //}
        //public function Gajibersih()
        //{
            //$gajibersih = $this->Gajikotor() - ($this->Gajikotor() * 0.025);
            //return "$gajibersih";
        //}
    //}
    include 'gajipsinclude.php';
    if(isset($_POST['ps'])) {
        $nama = $_POST['nm'];
        $nip = $_POST['no'];
        $alamat = $_POST['almt'];
        $jmlhk = $_POST['jmk'];

    echo "<center>Hasil Gaji Karyawan</center><br>";
    $hasil = new Penggajian($jmlhk,$nama,$nip,$ppn,$alamat);
    echo "Nama Karyawan : $nama<br>";
    echo "NIP Karyawan : $nip<br>";
    echo "Alamat Karyawan : $alamat<br>";
    echo "Gaji Kotor : " . $hasil->Gajikotor() ."<br>";
    echo "gaji Bersih : " . $hasil->Gajibersih() ."<br>";
    }
?>