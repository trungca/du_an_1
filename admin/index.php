<?php
session_start();
// if (isset($_SESSION['rolo']) && ($_SESSION['rolo'] == 1)) {

include '../model/binhluan.php';
include '../model/pdo.php';
include '../model/taikhoan.php';
include "header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "dssp":
                include "sanpham/dssp.php";
                break;
            case "themsp":
                include "sanpham/themsp.php";
                break;    
            case "xoasp":
                include "sanpham/dssp.php";                        
                break;
            case "suasp":
                include "sanpham/suasp.php";                        
                break;  
            case "ctsp":
                include "sanpham/ctsp.php";                        
                break;   
            case "dsdm":
                include "danhmuc/dsdm.php";
                break;
            case "themdm":
                // if(isset($_POST['themmoi'])&& ($_POST['themmoi'])){
                //     $tenloai=$_POST['tenloai'];
                //     insert_danhmuc($tenloai);
                //     $thongbao="thêm thành công";
                // }

                include "./danhmuc/themdm.php";
                break;    
            case "suadm":
                include "danhmuc/suadm.php" ;                        
                break;               
            case 'dstk':
                $listtaikhoan = loadall_taikhoan();
                include "taikhoan/dstk.php";
                break;
            case "xoatk":
               
                if (isset($_GET['idtk']) && ($_GET['idtk'] > 0)) {
                    delete_taikhoan($_GET['idtk']);
                }
                $sql = "select * from taikhoan order by idtk arc";
                $listtaikhoan = pdo_query($sql);
               
                include "../taikhoan/dstk.php";
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
            case "dsbanner" :   
                include "banner/dsbanner.php";
                break;
            case "suabanner"  :
                include "banner/suabanner.php";
                break;
     
        }
    }else{
        include "home.php";
    }
    include "footer.php";
// }
