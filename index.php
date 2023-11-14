<?php 
    include "view/header.php";
    
    if(isset($_GET["act"])){
    $act=$_GET["act"];
    switch ($act) {
        case 'contact':
            include "view/contact.php";  
            break;
        case 'shop':
            include "view/shop.php";  
            break;
        case 'chitietsp':
            include "view/chitietsp.php";  
            break;
        case 'thanhtoan':
            include "view/thanhtoan.php";  
            break;    
        case 'cart':
            include "view/cart.php";  
            break;  
        default:
            include "view/home.php";  
            break;
    }
}else{
    include "view/home.php";  
}
    include "view/footer.php";

?>