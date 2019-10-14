<?php 
    class Penggajian
    {
        public $jmlhk;
        public $nama;
        public $alamat;
        public $nip;
        public $ppn = 0.025;
        public function __construct($jmlhk, $nama , $nip , $ppn,$alamat)
        {
            $this->nama = $nama;
            $this->nip = $nip;
            $this->ppn = $ppn;
            $this->jmlhk = $jmlhk;
            $this->alamat = $alamat;  
        }
        public function Gajikotor()
        {
            $gajik = $this->jmlhk * 75000;
            return "$gajik";
        }
        public function Gajibersih()
        {
            $gajibersih = $this->Gajikotor() - ($this->Gajikotor() * 0.025);
            return "$gajibersih";
        }
    }
?>