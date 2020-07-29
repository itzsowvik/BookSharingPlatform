<?php

    include_once '../Model/function.php';
    //include_once '../View/signup.php';
    
    if(isset($_POST['username']) &&  isset($_POST['name']) && isset($_POST['email']) && isset($_POST['address'])&&isset($_POST['phone'])&&isset($_POST['sec_money'])&&isset($_POST['password'])){
        signupVerify($_POST['username'],$_POST['name'] ,$_POST['email'],$_POST['address'],$_POST['phone'],$_POST['sec_money'],$_POST['password']);
    }
    else{
        echo "All field must be filled";
    }

?>