<?php

//include_once '../Model/connection.php';
/* The code look too much dirty
   Need to be cleaned
   */

 function loginVerify($username, $password){

   include_once '../Controller/loginVerify.php';

   include_once '../Model/database.php';

   if($username == "admin"){
     $sql = "select * from admin where adminid = '$username' and adminpassword = '$password'";
     $res = $con->query($sql);
     if($res->num_rows == 1){
      header('location:../view/adminhomepage.php');
     }
     else{
       echo "Check Admin username and password";
     }
   }

  else{

    $query = "select * from user where username = '$username' and password = '$password' ";

    $retVal = $con->query($query);

    if($retVal->num_rows == 1){
        header('location:../view/homepage.php');
    }
    else{
      echo "Check  username and password";
    }
  }

  session_start();
  $_SESSION['username'] = $username;


}


function signupVerify($username, $fullname, $email, $address, $phoneNumber, $secMoney, $password){


    include_once '../Controller/signupverify.php';
    include_once '../Model/database.php';

    $query = "insert into user (username, fullname, email, address, phone, secmoney, password) values ('$username', '$fullname', '$email', '$address',$phoneNumber,$secMoney, '$password') ";

    if($con ->query($query) == TRUE){
      header('location:../view/signupdone.php');
    }
    else{
      echo "signup failed";
      //header('location:../view/signup.php');
    }

}



function bookAdd($folder,$title, $author, $catagory, $description, $actualprice, $priceperday){

    include_once '../View/bookadd.php';


    include_once '../Model/database.php';

    session_start();
    $username = $_SESSION['username'];

    $sql1 = "select userid from user where username ='$username'";
    $res = $con->query($sql1);
    $row = mysqli_fetch_assoc($res);
    $row1 = $row['userid'];

    $userid = (int)$row1;


    $availability = "yes";
    $sql = "insert into book (bookimage, title,author,catagory,description,availability,actualprice,priceperday,username,userid)
    values('$folder','$title','$author','$catagory', '$description','$availability',$actualprice,$priceperday,'$username', $userid)";
    if($con->query($sql) == TRUE){
      header('location:../view/homepage.php');
    }
    else{
     echo mysqli_error($con);
    }


}

function bookRent($bookrentdays, $bookid){
    include_once '../Model/database.php';
    include_once '../Controller/bookrent.php';
    session_start();
    $username = $_SESSION['username'];
    $sql1 = "select userid from user where username ='$username'";
    $res = $con->query($sql1);
    $row = mysqli_fetch_assoc($res);
    $row1 = $row['userid'];
    $userid = (int)$row1; //got userid

    $sql4 = "select secmoney from user where username = '$username'";
    $res2 = $con->query($sql4);
    $row2 = mysqli_fetch_array($res2);
    $secmoneyRow = $row2['secmoney'];
    $securityMoney = (int)$secmoneyRow;

    $sql5 = "select actualprice, priceperday from book where bookid = $bookid";
    $res3 = $con->query($sql5);
    $row3 = mysqli_fetch_assoc($res3);
    $temppriceperday = $row3['priceperday'];
    $priceperday = (int)$temppriceperday;
    $actPriceRow = $row3['actualprice'];
    $actPrice = (int) $actPriceRow;

    if($securityMoney >= $actPrice){

      $sql2="update book set availability = 'no' where bookid = $bookid";
      $res1 = $con->query($sql2);

      $sql3 = "insert into rentbook ('userid', 'bookid') values ($userid, $bookid)";
      $res4 = $con->query($sql3);

      $sql6 = "select username from book where bookid = $bookid";
      $res6 = $con->query($sql6);
      $row6 = mysqli_fetch_assoc($res6);
      $renter = $row6['username'];

      $sql7 = "select secmoney from user where username = '$renter'";
      $res7 = $con->query($sql7);
      $row7 = mysqli_fetch_assoc($res7);
      $temp7 = $row7['secmoney'];
      $renterSecMoney = (int)$temp7;



      $renterSecMoney+= ($bookrentdays*$priceperday);
      $userSecmoney-= ($bookrentdays*$priceperday);

      $sql8 = "update user set secmoney = $renterSecMoney where username = '$renter'";
      $con->query($sql8);
      $sql9 = "update user set secmoney = $userSecMoney where username = '$username'";
      $con->query($sql9);

      header('location:../view/homepage.php');

    }
    else{
      echo "Book Cannot be rented!. Insufficient Balance!";
    }

}

function userUpdate($name, $address, $phone, $email, $username, $secmoney, $password){
  include_once '../Model/database.php';

  $sql = "UPDATE `user` SET `username`='$username',`fullname`='$name',`email`='$email',`address`='$address',`phone`=$phone,`secmoney`=$secmoney,`password`='$password'";

  if($con->query($sql) == TRUE){
    echo "User update successful";
    header('location:/project/view/userprofile.php');
  }
  else{
    echo "Something Went Wrong";
  }
}

function bookdelete($bookid){
  include_once '../Model/database.php'; //wrong include

  $sql = "delete from book where bookid = $bookid";

  if($con->query($sql) == TRUE){
    header('location:/project/view/booklist.php');
  }
  else
  echo "Something went wrong";

}

function bookDataUpdate($bookid, $title, $author, $catagory, $description, $actualprice, $priceperday, $availability){


  include_once '../Model/database.php';

  $bookids = (int)$bookid;

  $sql1= "select username, userid from book where bookid = $bookids";
  $res = $con->query($sql1);
  $row = mysqli_fetch_assoc($res);
  $username = $row['username'];
  $userid = $row['userid'];

  $sql = "UPDATE `book` SET `title`='$title',`author`='$author',`catagory`='$catagory',`description`='$description',`availability`='yes',`actualprice`=$actualprice,`priceperday`=$priceperday,`username`='$username',`userid`=$userid WHERE bookid = $bookids";
  if($con->query($sql) == TRUE){
    header('location:/project/view/booklist.php');
  }
  else
  echo("Error description: " . mysqli_error($con));
}

function deleteUserAd($userid){
  include_once '../Model/database.php';

  $sql = "delete from user where userid = $userid";
  if($con->query($sql) == TRUE){
    header('location:/project/view/adminuserlist.php');
  }
  else{
    echo "something went wrong";
  }
}

function deleteBookAd($bookid){

  include_once '../Model/database.php';

  $sql = "delete from book where bookid = $bookid";
  if($con->query($sql) == TRUE){
    header('location:/project/view/adminbooklist.php');
  }
  else{
    echo "something went wrong";
  }

}

?>