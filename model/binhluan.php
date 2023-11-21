<?php
 function insert_binhluan($noidung, $idtk, $idsp , $ngaybinhluan ){
    $sql = "insert into binhluan (noidung,idtk,idsp,ngaybinhluan) 
    values ('$noidung','$idtk','$idsp','$ngaybinhluan')";
    pdo_execute($sql);
}

function delete_binhluan($idbl){
    $delete="delete from binhluan where idbl =" .$idbl;
    pdo_execute($delete);
}

function loadall_binhluan($idsp){
    $sql="select b.*,
     u.name as name, 
     u.user as nameuser  
     from binhluan b 
     inner join taikhoan u on b.idtk = u.idtk where 1";
    if($idsp>0){
      $sql.=" AND b.idsp='".$idsp."' ";
      $sql.=" order by b.id desc";
    }
    $listbinhluan=pdo_query($sql);
    return $listbinhluan;
}




?>