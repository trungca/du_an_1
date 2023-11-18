<?php
include("../model/pdo.php");
include("../model/danhmuc.php");
include("../model/sanpham.php");

include "header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "dssp":
                if(isset($_POST['listok']) && ($_POST['listok'])){
                    $kyw=$_POST['kyw'];
                    $iddm=$_POST['iddm'];
                }else{
                    $kyw="";
                    $iddm=0;
                }
                $listdanhmuc=loadall();
                $listsanpham=loadall_sanpham($kyw,$iddm);
                include "sanpham/dssp.php";
                break;
                
                
            case 'themsp': // Đổi ; thành :
                    // Kiểm tra người dùng click vào nút add
                    if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                        $tensp = $_POST['tensp'];
                        $giasp = $_POST['giasp'];
                        $soluong = $_POST['soluong'];
                        $mota = $_POST['mota'];
                        $iddm = $_POST['iddm'];
                        $image=$_FILES['image']['name'];
                        $target_dir = "../upload/";
                        $target_file = $target_dir . basename($_FILES["image"]["name"]);
                        if(move_uploaded_file($_FILES["image"]["tmp_name"],$target_file)){
                            // echo "file". htmlspecialchars(basename($_FILES['name']))
                        }else{    
                        }
                        insert_sanpham($tensp,$giasp,$image,$mota,$iddm,$soluong);
                        $thongbao = "Thêm thành công";
                    }
                    $listdanhmuc=loadall();
                    include "sanpham/themsp.php";
                    break;
            case 'xoasp':
                    if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                        delete_sanpham($_GET['idsp']);
                    }
                    $listsanpham=loadall_sanpham("",0);
                    include "sanpham/dssp.php";
                    break;
            case 'suasp';
                    if(isset($_GET['idsp'])&&($_GET['idsp']>0)){
                        $sanpham = loadone_sanpham(($_GET['idsp']));
                    }
                    $listdanhmuc=loadall(); 
                    include "sanpham/update.php";
                    break;
            case 'updatesp';
                if(isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                    $idsp = $_POST['idsp'];
                    $tensp = $_POST['tensp'];
                    $giasp = $_POST['giasp'];
                    $mota = $_POST['mota'];
                    $iddm = $_POST['iddm'];
                    $image = $_FILES['image']['name'];
                    $soluong = $_POST['soluong'];

                    update_sanpham($iddm, $idsp, $tensp, $giasp, $mota, $image,$soluong);
                    $thongbao = "Cập nhật thành công";
                }
                    $kyw = '';
                    $listdanhmuc = loadall();
                    $listsanpham = loadall_sanpham($kyw, $iddm);
                    include "sanpham/dssp.php";
                    break;  
            case 'ctsp';
                    include "ctsp.php";
                    break;
            case "dsdm":
                $listdanhmuc=loadall();
                include "danhmuc/dsdm.php";
                break;
            case "themdm":
                // Kiểm tra người dùng click vào nút add
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $tenloai = $_POST['tenloai'];
                    insert_danhmuc($tenloai);
                    $thongbao = "Thêm thành công";
                }
                include "danhmuc/themdm.php";
                break;
            case "xoadm";
                if(isset($_GET['id'])&&($_GET['id']>0)){
                    delete_danhmuc($_GET['id']);
                }
                $listdanhmuc=loadall();
                include "danhmuc/dsdm.php";
                break;
            case 'updatedm';
             if(isset($_POST['capnhat']) && ($_POST['capnhat'])){
                    $tenloai = $_POST['tenloai'];
                    $id = $_POST['id'];
                    update_danhmuc($id,$tenloai);
                    $thongbao = "Cap nhat thành công";
                }
                include "danhmuc/themdm.php";
                break;
                
            case "dstk":
                include "taikhoan/dstk.php";
                break;
            case "xoatk":
                include "taikhoan/xoatk.php";
                break;    
            case "suatk":
                include "taikhoan/suatk.php" ;                          
                break;                
            case "dsbl" :
                include "binhluan/dsbl.php";
                break;
            case "xoabl" : 
                include "xoabl.php";
                break;
            case "dsdh" :   
                include "donhang/dsdh.php";
                break;
            case "suadh":   
                include "donhang/suadh.php";
                break;
            case "themdh" :   
                include "donhang/themdh.php";
                break;
            case "xoadh" :   
                include "donhang/xoadh.php";
                break;
        }
    }else{
        include "home.php";
    }
    include "footer.php";
?>