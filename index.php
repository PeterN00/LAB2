<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LAB2 PHP</title>
</head>
<body>
    <div id="wrapper">
        <div class="row">
            <?php
                require_once("thanhvien.php");
                $sv = new thanhvien("Huynh Hung", "info@huynhthaihung.com");
                echo "<h2>---Thông tin thành viên--</h2>";
                echo "Mã: ".$sv -> get_id()."<br/>";
                echo "Họ tên: ".$sv -> get_hoten()."<br/>";
                echo "Email: ".$sv -> get_email()."<br/>";
            ?>
            <?php
                $sv2 = new thanhvien("Nguyen Van A", "email@gmail.com");
                echo "<h2>---Thêm thông tin--</h2>";
                echo "Mã: ".$sv2 -> get_id()."<br/>";
                echo "Họ tên: ".$sv2 -> get_hoten()."<br/>";
                echo "Email: ".$sv2 -> get_email()."<br/>";
            ?>

            <?php
                include("nhanvien.php");
                $nhanvat = new nhanvat("Do Nam Trung", 5678);
                echo "<h2>---Thêm: Hướng Đối Tượng PHP--</h2>";
                echo "Họ tên: ".$nhanvat -> get_hoten()."<br/>";
                echo "Mã quốc gia: ".$nhanvat -> get_maquocgia()."<br/>";
            ?>
            <?php
                $nhanvien = new nhanvien("Nguyen Thanh Tung", 1234, "Bao Ve");
                echo "<h2>---Nhân viên--</h2>";
                echo "Mã nhân viên: ".$nhanvien -> get_manhanvien()."<br/>";
                echo "Họ tên: ".$nhanvien -> get_hoten()."<br/>";
                echo "Mã QG: ".$nhanvien -> get_maquocgia()."<br/>";
                echo "Bộ phận: ".$nhanvien -> get_bophan()."<br/>";
            ?>
        </div>
        <footer>
            <p>Huỳnh Thái Hưng: 
                <a href="mailto:info@huynthaihung.com">info@huynthaihung.com
                </a>
            </p>
        </footer>
    </div>
</body>
</html>