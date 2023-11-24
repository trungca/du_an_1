<?php 
    session_start();
    include "model/pdo.php";
    include "model/danhmuc.php";
    include "model/sanpham.php";
    include "view/header.php";
    include "model/taikhoan.php";
    include "global.php";

    if(!isset($_SESSION['mycart'])) $_SESSION['mycart']=[];

    $spnew = loadall_sanpham_home();
    $dsdm = loadall();
    $dstop10 = loadall_sanpham_top10();

    if(isset($_GET["act"])){
    $act=$_GET["act"];
    switch ($act) {
        case 'sanpham':
            if(isset($POST['kyw'])&&($_POST['kyw']!="")){
                $kyw= $_POST['kyw'];
            }else{
                $kyw="";
            }
            if(isset($_GET['iddm'])&&($_GET['iddm']>0)){
                $iddm= $_GET['iddm'];
            }else{
                $iddm=0;
            }
            $dssp = loadall_sanpham("",$iddm);
            $tendm= load_ten_dm($iddm);
            include "view/sanpham.php";
            break; 
        case 'sanphamct':
                if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                    $idsp= $_GET['idsp'];
                    $onesp=loadone_sanpham($idsp);
                    extract($onesp);
                    $sp_cung_loai = load_sanpham_cungloai($idsp,$iddm);
                    include "view/chitietsp.php";
                }else{
                    include "view/home.php";
                }
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
        case 'addtocart':
                if(isset($_POST['addtocart'])&&($_POST['addtocart'])){
                    $idsp=$_POST['idsp'];
                    $tensp=$_POST['tensp'];
                    $image=$_POST['image'];
                    $giasp=$_POST['giasp'];
                    $soluong=1;
                    $ttien=$soluong*$giasp;
                    $spadd=[$idsp,$tensp,$image,$giasp,$soluong,$ttien];
                    array_push($_SESSION['mycart'],$spadd);   
                }
                    include "view/cart/viewcart.php";
                    break;
        case 'dangky':
            if(isset($_POST['dangky'])&&($_POST['dangky'])){
                $email= $_POST['email'];
                $user= $_POST['user'];
                $pass= $_POST['pass'];
                insert_taikhoan($user, $pass,$email,);
                $thongbao="Đã đăng kí thành công. Vui lòng đăng nhập để thực hiện chức năng";
            }
            include "view/taikhoan/dangky.php";  
            break;
         case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $user= $_POST['user'];
                    $pass= $_POST['pass'];
                    $checkuser=check_user($user, $pass);
                if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;
                        $thongbao="Bạn đã đăng nhập thành công";
                        echo "<script>window.location.herf='index.php'</script>";
                }else {
                    $thongbao="Tài khoản không tồn tại";
                }
    }
            include "view/taikhoan/dangnhap.php";  
            break;         
        default:
            include "view/home.php";  
            break;
    }
}else{
    include "view/home.php";  
}
    include "view/footer.php";

?>