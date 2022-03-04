<?php
    require_once("hotro.php");
    class thanhvien{
        private $hoten;
        private $email;
        private $idthanhvien;
    
        public function __construct($hoten, $email){
            $this -> hoten = $hoten;
            $this -> email = $email;
            $this -> idthanhvien = idtieptheo();
        }
        public function __destruct(){
            $this -> hoten = NULL;
            $this -> email = NULL;
            $this -> trangthai = NULL;
            $this -> idthanhvien = NULL;
        }
        public function get_hoten(){
            return $this -> hoten;
        }
        public function get_email(){
            return $this -> email;
        }
        public function get_id(){
            return $this -> idthanhvien;
        }
    }
?>