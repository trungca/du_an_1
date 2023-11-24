<?php
function insert_sanpham($tensp,$giasp,$image,$mota,$iddm,$soluong) {
    $sql = "INSERT INTO sanpham(tensp, giasp, image, mota, iddm , soluong) 
            VALUES('$tensp', '$giasp', '$image', '$mota', '$iddm','$soluong')";
    pdo_execute($sql);
}

function delete_sanpham($idsp) {
    $sql = "DELETE FROM sanpham WHERE idsp = $idsp";
    pdo_execute($sql);
}

function loadall_sanpham_home() {
    $sql = "SELECT * FROM sanpham ORDER BY idsp DESC LIMIT 0,8";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_top10() {
    $sql = "SELECT * FROM sanpham ORDER BY luotxem DESC LIMIT 0,8";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham($kyw = "", $iddm = 0) {
    $sql = "SELECT * FROM sanpham WHERE 1";
    if ($kyw != "") {
        $sql .= " AND name LIKE '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " AND iddm ='" . $iddm . "'";
    }
    $sql .= " ORDER BY idsp DESC";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function load_ten_dm($iddm) {
    if ($iddm > 0) {
        $sql = "SELECT * FROM danhmuc WHERE idsp = $iddm";
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}

function loadone_sanpham($idsp) {
    $sql = "SELECT * FROM sanpham WHERE idsp = $idsp";
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($idsp, $iddm) {
    $sql = "SELECT * FROM sanpham WHERE iddm = $iddm AND idsp <> $idsp";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($iddm, $idsp, $tensp, $giasp, $mota, $image, $soluong) {
    if ($image != "") {
        $sql = "UPDATE sanpham SET iddm='$iddm', tensp='$tensp', giasp='$giasp', mota='$mota', image='$image', soluong='$soluong' WHERE idsp = $idsp";
    } else {
        $sql = "UPDATE sanpham SET iddm='$iddm', tensp='$tensp', giasp='$giasp', mota='$mota', soluong='$soluong' WHERE idsp = $idsp";
    }
    pdo_execute($sql);
}

?>
