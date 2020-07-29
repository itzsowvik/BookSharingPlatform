<?php
      include_once '../Model/function.php';
     

      $bookids = $_POST['bookid'];
      bookDataUpdate($bookids, $_POST['booktitle'], $_POST['bookauthor'], $_POST['bookcatagory'],$_POST['bookdescription'], $_POST['bookactualprice'], $_POST['bookpriceperday'], 'yes');
?>