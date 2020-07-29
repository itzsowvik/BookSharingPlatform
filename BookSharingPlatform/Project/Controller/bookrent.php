<?php
   include_once '../Model/function.php';
   include_once '../View/bookrentdata.php';

    $tempbookrentday = $_POST['bookrentday'];
    $tempbookid = $_POST['bookid'];
    $bookrentday = (int)$tempbookrentday;
    $bookid = (int)$tempbookid;

      bookRent($bookrentday,$bookid );

?>