<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Book Details</title>
  </head>
  <body>
    <h1 class="text-center">Book Details</h1>
    <hr>
    <?php
     include_once '../Model/database.php';

     GLOBAL $bookid;

     if(isset($_GET['id']))
     {
           $bookid = $_GET['id'];
     }
     $bookid1 = (int)$bookid;
     echo $bookid1;

     $_COOKIE['bookidval'] = $bookid;

     $sql = "select * from book where bookid = '$bookid1'";

      $res= $con->query($sql);

      $row = mysqli_fetch_assoc($res);

      $image = $row['bookimage'];
      $title = $row['title'];
      $author= $row['author'];
      $catagory = $row['catagory'];
      $description = $row['description'];
      $actualPrice = $row['actualprice'];
      $pricePerDay = $row['priceperday'];
      $useridstr = $row['userid'];
      $userid = (int)$useridstr;


     $sql1 = "select fullname,address,phone from user where userid = $userid";
     $res1 = $con->query($sql1);
     $row1 = mysqli_fetch_assoc($res1);

     $userFullname = $row1['fullname'];
     $userAddress = $row1['address'];
     $userPhoneNumber = $row1['phone'];

    ?>
    <?php echo "<img src='$image' height='400' width = '400'"; ?> <br>
    <h2>Title: <span class="label label-default"> <?php echo $title ?></span></h2>
    <h2>Author: <span class="label label-default">  <?php echo $author ?></span></h2>
    <h2>Catagory: <span class="label label-default">  <?php echo $catagory ?></span></h2>
    <h2>Description: <span class="label label-default">  <?php echo $description ?></span></h2>
    <h2>Actual Price: <span class="label label-default">    <?php echo $actualPrice ?></span></h2>
    <h2>Price Per Day: <span class="label label-default">  <?php echo $pricePerDay ?></span></h2>
    <h2>User Name: <span class="label label-default"> <?php echo $userFullname ?></span></h2>
    <h2>Address <span class="label label-default"  >  <?php echo $userAddress ?></span></h2>
    <h2>Phone Number: <span class="label label-default"><?php echo $userPhoneNumber ?></span></h2>
    <a href="/project/view/bookrentdata.php?id=<?php echo $bookid1 ?>" class = "btn btn-success">Rent</a>
    <a href="/project/view/homepage.php" class = "btn btn-primary">Cancle</a>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>