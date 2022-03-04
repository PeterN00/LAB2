<?php
    class nhanvat{
        private $hoten;
        private $maquocgia;

        public function __construct($hoten, $maquocgia){
            $this -> hoten = $hoten;
            $this -> maquocgia = $maquocgia;
        }
        public function get_hoten(){
            return $this -> hoten;
        }
        public function get_maquocgia(){
            return $this -> maquocgia;
        }
    }
?>