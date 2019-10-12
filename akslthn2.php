<?php 
    class identi{
        public $nama;
        protected $password;
        private $izin;
        

        public function buka_identi() {
            return $this->nama;
        }
        protected function masuk_identi() {
            return "Masuk Identitas";
        }
        private function tampilkan_identi() {
            return "Tampilkan Identitas";
        }
    }

    $identis = new identi();

    $identis->nama = "Ariz";
    $identis->pass = "1234567";
    $identis->izin = "PT.Indoda";

    echo ;
?>