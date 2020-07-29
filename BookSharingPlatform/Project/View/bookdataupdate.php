<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Update Books</title>
  </head>
  <body>
  <h1 class="text-center">Update Book Information<br>
        <small class = "text-center text-success">OR DELETE</small>
    </h1>
    <hr>

    <?php
         include_once '../Model/database.php';
         include_once '../Model/function.php';
        $bookid= $_GET['id'];
        $sql = "select * from book where bookid = '$bookid' ";
        $res = $con->query($sql);
        $row = mysqli_fetch_assoc($res);
        $bookimg = $row['bookimage'];
        $username = $row['username'];
        $userid = $row['userid'];
    ?>
       
    <div class="container">
    <h1>Update/Delete a BOOK</h1>
  	<hr>
      <div class="col-md-9 personal-info">
        <h3>Book Information</h3>
        <form class="form-horizontal" method="POST" action = "/project/controller/bookdataupdate.php">
          <div class="form-group">
            <label class="col-lg-3 control-label">Title</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $row['title']; ?>" name="booktitle">
            </div>
          </div>

          <input type="hidden" name="bookid" value = "<?php echo $_GET['id']; ?>" >
          <input type="hidden" name="bookimg" value = "<?php echo $bookimg; ?>" >
          <div class="form-group">
            <label class="col-lg-3 control-label">Author</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $row['author']; ?>" name="bookauthor">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Catagory</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="<?php echo $row['catagory']; ?>" name = "bookcatagory">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Description:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="<?php echo $row['description']; ?>" name = "bookdescription">
            </div>
            <label class="col-md-3 control-label">Actual Price:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="<?php echo $row['actualprice']; ?>" name = "bookactualprice">
            </div>
            <label class="col-md-3 control-label">Price per day:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="<?php echo $row['priceperday']; ?>" name = "bookpriceperday">
            </div>
            <label class="col-md-3 control-label">Availability</label>
            <label class="radio-inline"><input type="radio" name="availability" name = "bookavailability" value = "yes" <?php echo($row['availability'] == "yes"? 'checked="checked"': '' ) ?>>yes</label>
            <label class="radio-inline"><input type="radio" name="availability" name = "bookavailability" value = "no" <?php echo($row['availability'] == "no"? 'checked="checked"': '') ?>>no</label>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Update">
              <span></span>
              <a href="/project/view/booklist.php" class = "btn btn-primary">Back</a>
              
          </div>
        </form>
      </div>
  </div>
</div>
<form method = "POST" action="/project/controller/bookdelete.php">

<input type="hidden" name="bookid" value = "<?php echo $_GET['id']?>" >

<input type = "submit" class="btn btn-danger" value="Delete">

</form>
<hr>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>