<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>User Profile</title>
  </head>
  <body>
    <h1 class="text-center">Welcome<br>
        <small class = "text-center">Edit your personal information</small>
    </h1>
    <hr>

    <?php
       
        
          include_once '../Model/database.php';
          session_start();
          $username = $_SESSION['username'];
          $sql = "select * from user where username = '$username' ";
          $res = $con->query($sql);
          $row = mysqli_fetch_assoc($res);



    ?>
       
    <div class="container">
    <h1>Edit Profile</h1>
  	<hr>
	<div class="row">
      <div class="col-md-3">
        <div class="text-center">
        </div>
      </div>
      <div class="col-md-9 personal-info">
        <h3>Personal info</h3>
        <form class="form-horizontal" role="form" method ="POST" action="/project/controller/userprofileupdate.php">
          <div class="form-group">
            <label class="col-lg-3 control-label">Full Name:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name = "userfullname" value="<?php echo $row['fullname'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Address:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name="useraddress" value="<?php echo $row['address'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Phone:</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name = "userphone" value="<?php echo $row['phone'] ?>">
            </div>
          </div>

          <div class="form-group">
            <label class="col-lg-3 control-label">Email:</label>
            <div class="col-lg-8">
              <input class="form-control" type="email" name="useremail" value="<?php echo $row['email'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Username:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" name = "userusername" value="<?php echo $row['username'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Security Money</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" name = "usersecmoney" value="<?php echo $row['secmoney'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" value="<?php echo $row['password'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Confirm password:</label>
            <div class="col-md-8">
              <input class="form-control" type="password" name="userpassword" value="<?php echo $row['password'] ?>">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Save Changes">
              <span></span>
              <a href="/project/view/homepage.php" class="btn btn-danger">Cancel</a>
              <span></span><br>
              <a href="/project/view/booklist.php" class = "btn btn-warning">Show Books</a>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>





    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>