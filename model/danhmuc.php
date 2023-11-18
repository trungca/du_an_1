<?php
function insert_danhmuc($tenloai){
    $sql = "INSERT INTO danhmuc(name) VALUES('$tenloai')"; // Sử dụng prepared statement để tránh SQL injection
    pdo_execute($sql);
}
function delete_danhmuc($id){
    $sql="DELETE FROM danhmuc where id=".$id;
    pdo_execute($sql);
}
function loadall(){
    $sql = "SELECT * FROM danhmuc order by id desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function loadone($id){
    $sql = "SELECT * FROM danhmuc where id=".$id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id,$tenloai){
    $sql = "UPDATE danhmuc set name ='".$tenloai."' where id=".$id;
    pdo_execute($sql);
}
?>