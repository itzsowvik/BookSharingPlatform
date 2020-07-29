<?php

    include_once '../Model/function.php';
    //include_once '../View/index.php';

    if(isset($_POST['username']) && isset($_POST['password'])){
        loginVerify($_POST['username'], $_POST['password']);
    }
    


?>