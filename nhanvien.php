<?php
    require_once("nhanvat.php");

    class nhanvien extends nhanvat{
        private $manhanvien;
        private $bophan;

        public function __construct($hoten_nhanvien, $maquocgia, $bophan){
            parent::__construct($hoten_nhanvien, $maquocgia);
            $this -> bophan = $bophan;
            $this -> manhanvien = $this -> manhanvien_tieptheo();
        }
        public function get_manhanvien(){
            return $this -> manhanvien;
        }
        public function get_bophan(){
            return $this -> bophan;
        }
        private function manhanvien_tieptheo(){
            static $taoma = 1;
            return $taoma++;
        }
    }
?>