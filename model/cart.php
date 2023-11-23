<?php 
function viewcart1(){
         $tong=0;
                $i=0;
                foreach($_SESSION['mycart'] as $cart){
                    $ttien=$cart[3]*$cart[4];
                    $tong+=$ttien;
                    $xoasp='<a href="index.php?act=delcart&idcart='.$i.'"><button class="btn btn-sm btn-danger">Xóa<i class="fa fa-times"></i></button></a> ';
                    echo ' <tr>
                    <td class="align-middle"><img src="'.$cart[2].'" alt="" style="width: 50px;"></td>
                    <td class="align-middle">'.$cart[3].'</td>
                </tr>';
                $i+=1;
                }
                
            }
            
function  viewcart2(){
            $tong2=$tong+10; 
            echo '<div class="bg-light p-30 mb-5">
        <div class="border-bottom pb-2">
            <div class="d-flex justify-content-between mb-3">
                <h6>Tổng Tiền</h6>
                <h6>'.$tong.'</h6>
            </div>
            <div class="d-flex justify-content-between">
                <h6 class="font-weight-medium">Phí Ship</h6>
                <h6 class="font-weight-medium">$10</h6>
            </div>
        </div>
        <div class="pt-2">

            <div class="d-flex justify-content-between mt-2">
                <h5>Tổng Tiền</h5>
                <h5>'.$tong2.'</h5>
            </div>
            <a href="index.php?act=bill">
            <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">ThanhToán</button>
            </a>
        </div>
        </div>';

}
?>

