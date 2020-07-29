<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Search Result</title>
  </head>
  <body>
    <h1>Search Result</h1><br>
    <hr>
    <a href = "/project/view/homepage.php" class="btn btn-success">Home</a>

    <?php
    include_once '../Model/database.php';

    $bookname = $_POST['booksearch'];

    $sql = "select bookimage,title,description,bookid from book where title = '$bookname'";

    $res= $con->query($sql);
    ?>
    
    <?php while($row = mysqli_fetch_assoc($res)){  $image = $row['bookimage']; $bookid =$row['bookid'];?>
      <div class="card-group justify-content-center">
      <div class="col-xs-0 col-sm-3 ">
        <div class="card" style="width: 25rem;">
  <?php echo "<img src='$image'height='200' width='200'> "; ?>
  <div class="card-body">
    <h5 class="card-title"><?php echo $row['title'] ?></h5>
    <p class="card-text"><?php echo $row['description'] ?></p>
    <a href="/project/view/bookview.php?id=<?php echo $bookid ?>" class="btn btn-primary">See Details</a>
  </div>
</div>
</div>
</div>

<?php } ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>