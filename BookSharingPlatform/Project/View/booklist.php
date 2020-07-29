<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Book List</title>
  </head>
  <body>
    <h1><b>Here is the list of books</b></h1>
    <h5 style="color:brown"> Select a book to update info or Remove</h5>
     <hr>

     <?php

       include_once '../Model/database.php';

       session_start();
       $username = $_SESSION['username'];

       $sql = "select * from book where username = '$username'";

       $res = $con->query($sql);

       while($row = mysqli_fetch_assoc($res)){ $bookid = $row['bookid'];?>
       


<div class="list-group">
  <a href="/project/view/bookdataupdate.php?id=<?php echo $bookid;  ?>" class="list-group-item list-group-item-action">
    <?php echo $row['title'] ?>
  </a>
</div>


      <?php } ?>

      <a href="/project/view/userprofile.php" class = "btn btn-primary">Back</a>
 
 





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>