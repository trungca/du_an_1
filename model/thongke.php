<?php 
function loadall_thongke(){
    $sql="select danhmuc.name, count(sanpham.idsp) as countsp, min(sanpham.giasp) as mingiasp , max(sanpham.giasp) as maxgiasp avg(sanpham.giasp)";
    $sql.=" from sanpham left join danhmuc on danhmuc.id=sanpham.iddm";
    $sql.=" order by danhmuc.id desc";
    $listtk=pdo_query($sql);
    return $listtk;
}

?>