<?php
function insert_taikhoan($user,$pass,$email)
{
    $sql = "insert into taikhoan(user,pass,email) values('$user','$pass','$email')";
    pdo_execute($sql);
} 
function check_user($user, $pass)
{
    $sql = "select * from taikhoan where user='" . $user . "' AND pass='" . $pass . "' ";
    $sp = pdo_query_one($sql);
    return $sp;
}

?>