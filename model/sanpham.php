<?php 
function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by idsp desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
?>