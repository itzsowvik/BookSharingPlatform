<?php
   
    include_once '../Model/function.php';

    //fix this file errors
    $filename = $_FILES["bookimg"]["name"];
    $tempname = $_FILES["bookimg"]["tmp_name"];
    $folder = "../resources/" .$filename;
    move_uploaded_file($tempname, $folder);


    if(isset($_POST['booktitle']) && isset($_POST['bookauthor']) && isset($_POST['bookcatagory']) && isset($_POST['bookdescription']) && isset($_POST['bookactualprice']) && isset($_POST['bookpriceperday'])){
         bookAdd($folder,$_POST['booktitle'],$_POST['bookauthor'],$_POST['bookcatagory'],$_POST['bookdescription'],$_POST['bookactualprice'],$_POST['bookpriceperday']);
    }
    else{
        //echo "Book Add Failed";
        echo "Fields can not be empty";
    }



    
?>