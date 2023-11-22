<?php
session_start();
include "model/pdo.php";
include "view/header.php";
include "model/taikhoan.php";
include "model/binhluan.php";

if (isset($_GET["act"]) && ($_GET['act'] != "")) {
    $act = $_GET["act"];
    switch ($act) {
        case 'contact':
            include "view/contact.php";
            break;
        case 'shop':
            include "view/shop.php";
            break;
        case 'chitietsp':
            include "view/chitietsp.php";
            break;
        case 'thanhtoan':
            include "view/thanhtoan.php";
            break;
        case 'cart':
            include "view/cart.php";
            break;
        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $name = $_POST['name'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $passconfirm = $_POST['passconfirm'];
                if ($pass == $passconfirm) {
                    insert_taikhoan($name, $user, $pass, $email, $address, $tel);
                    $thongbao = "Đã đăng ký thành công. Vui lòng đăng nhập để thực hiện chúc năng";
                } else {
                    $thongbao = "Vui lòng nhập lại mật khẩu";
                    // header('location:index.php?act=dangky');
                    // exit();
                }
            }
            include "./view/taikhoan/dangky.php";
            break;
        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $kq = checkuser($user, $pass);
                $rolo = $kq['rolo'];

                if ($rolo == 1) {
                    $_SESSION['rolo'] = $rolo;
                   echo" <script> location.replace('admin/index.php'); </script>";
                } else if (is_array($kq)) {
                    $_SESSION['rolo'] = $rolo;
                    $_SESSION['idtk'] = $kq['idtk'];
                    $_SESSION['user'] = $kq['user'];
                    echo "<script>window.location.herf='index.php'</script>";
        
                } else {
                    header('location:index.php?act=dangnhap');
                    
                }
            }
            
            include "./view/taikhoan/dangnhap.php";
            break;
        case 'dangxuat':
            session_unset();
            echo "<script>window.location.herf='index.php'</script>";
            include "./view/taikhoan/dangnhap.php";
            break;

        case 'doimk':
            if (isset($_POST['doimk'])) {
                $user = $_POST['user'];
                $passcu = $_POST['passcu'];
                $passmoi = $_POST['passmoi'];
                $checkdoimk = checkdoimk($user, $passcu, $passmoi);
                if (is_array($checkdoimk)) {
                    $thongbao = "Đổi mật khẩu thành công";
                } else {
                    $thongbao = "Tài khoản mật khẩu không tồn tại";
                }
            }
            include "./view/taikhoan/doimk.php";
            break;

        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                update_taikhoan($id, $email, $name, $address, $tel);

                header('location:index.php?act=edit_taikhoan');
            }

            include "./view/taikhoan/edit_taikhoan.php";
            break;

        case 'quenmk':
            if (isset($_POST['quenmk']) && ($_POST['quenmk'])) {
                $user = $_POST['user'];
                $email = $_POST['email'];
                $tel = $_POST['tel'];
                $checkquenmk = checkquenmk($user, $email, $tel);
                //$thongbao="Cập nhật thành công";
                if (is_array($checkquenmk)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkquenmk['pass'];
                } else {
                    $thongbao = "Tài khoản này không tồn tại";
                }
            }
            include "./view/taikhoan/quenmk.php";
            break;

        case 'guibinhluan':
            if (isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])) {
                $noidung = $_POST['noidung'];
                $idsp = $_SESSION['idsp'];
                $idtk =  $_SESSION['idtk'];
                $ngaybinhluan = date('G:i:s A d/m/Y');

                // $ngaybinhluan=date('l jS \of F Y h:i:s A');
                insert_binhluan($noidung, $idtk, $idsp, $ngaybinhluan);
                header("location: " . $_SERVER['HTTP_REFERER']);
            }
            include ".view/binhluan.php";
            break;
        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
