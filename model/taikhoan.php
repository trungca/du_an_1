<?php
    function insert_taikhoan($name, $user, $pass, $email, $address, $tel){
        
        $sql = "insert into taikhoan(name,user,pass,email,address,tel) 
        values('$name','$user','$pass','$email','$address','$tel')";
        pdo_execute($sql);
        
    }

    function checkUser($user,$pass){
        $sql = "select * from taikhoan where user='".$user."' and pass='".$pass."'";
        $dm= pdo_query_one($sql);
        return $dm;
    }
    function checkUseradmin($user, $pass){
        $sql="select * from taikhoan where user= '".$user."' and pass='".$pass."'";
        $dm=pdo_query_one($sql);
        if($dm >0 ) return $dm['rolo'];
        else return 0;
    }
    function checkquenmk($user,$email,$tel){
        $sql="select * from taikhoan where user = '".$user."' and  email= '".$email."' and tel = '".$tel."'";
        $dm=pdo_query_one($sql);
        return $dm;
    }
    function update_taikhoan($idtk, $email, $name,$address, $tel){
        $sql = " update taikhoan set  email='".$email."'
        , name='".$name."' , address='".$address."' , tel='".$tel."' where idtk=".$idtk;
        pdo_execute($sql);
    }
    function loadall_taikhoan(){
        $sql="select * from taikhoan order by idtk asc";
        $listtaikhoan=pdo_query($sql);
        return $listtaikhoan;
    }
    function loadone_taikhoan($user){
        $sql="select * from taikhoan where user like '%$user%' ";
        $tk=pdo_query_one($sql);
        return $tk;
    }
    function delete_taikhoan($idtk){
        $delete="delete from taikhoan where idtk =" .$idtk;
        pdo_execute($delete);
    }
    function checkdoimk($user, $passcu, $passmoi){
        $sql="select * from taikhoan where user= '".$user."' and pass='".$passcu."' limit 1";
        $dmk=pdo_query_one($sql);
        if($dmk>0){
            $sql = " update taikhoan set user= '".$user."', pass='".$passmoi."' where user= '".$user."' and pass='".$passcu."'  ";
            $thongbao = "Đổi mật khẩu thành công";
            pdo_execute($sql);
            
        }
        return $dmk;
    }
    // function logout(){
    //     $_SESSION = array(); // Xóa tất cả các biến phiên
    //     session_destroy(); // Hủy bỏ phiên làm việc
    // }
    
?>