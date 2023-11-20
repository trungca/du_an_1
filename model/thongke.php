<?php
    function loadall_thongke(){
        $sql = "SELECT danhmuc.id as madm, danhmuc.name as tendm, count(sanpham.idsp) as countsp, min(sanpham.giasp) as minprice, max(sanpham.giasp) as maxprice, avg(sanpham.giasp) as avgprice";
        $sql.=" FROM sanpham left join danhmuc on danhmuc.id=sanpham.iddm ";
        $sql.= "  group by danhmuc.id order by danhmuc.id desc";
        $listtk = pdo_query($sql);
        return $listtk;
    }
?>