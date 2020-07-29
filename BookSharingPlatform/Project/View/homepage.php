<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Shareables</title>
  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="http://localhost/project/view/homepage.php">
  <img src="../resources/home.jpg" class="rounded-circle" alt="Home Image" height="40" width="40">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
     
      <li class="nav-item">
        <a class="nav-link" href="/project/view/userprofile.php">Profile</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/project/view/bookadd.php">Share a book </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/project/view/index.php">Log Out</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action = "/project/view/booksearch.php" method="POST">
      <input class="form-control mr-sm-2" type="search" name="booksearch" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>


<div class="container">
  <div class="row justify-content-center">
    <h1>Welcome to Shareables!<br><small class="row justify-content-center">Share, Rent and Enjoy</small></h1>
  </div>
</div>

<hr>


<?php
    include_once '../Model/database.php';

    $sql = "select bookimage,title,description,bookid from book where availability = 'yes'";

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