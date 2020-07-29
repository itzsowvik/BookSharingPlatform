<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Add Books</title>
  </head>
  <body>
  <h1 class="text-center">Welcome<br>
        <small class = "text-center text-success">Add a Book Here For Rent</small>
    </h1>
    <hr>
       
    <div class="container">
    <h1>Add a Book</h1>
  	<hr>
      <div class="col-md-9 personal-info">
        <h3>Book Information</h3>
        <form class="form-horizontal" role="form" action = "/project/controller/bookadd.php" method="POST" enctype="multipart/form-data" >
          <div class="form-group">
            <label class="col-lg-3 control-label">Title</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="" name="booktitle">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Author</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="" name="bookauthor">
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Catagory</label>
            <div class="col-lg-8">
              <input class="form-control" type="text" value="" name = "bookcatagory">
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label">Description:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="" name = "bookdescription">
            </div>
            <label class="col-md-3 control-label">Actual Price:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="" name = "bookactualprice">
            </div>
            <label class="col-md-3 control-label">Price per day:</label>
            <div class="col-md-8">
              <input class="form-control" type="text" value="" name = "bookpriceperday">
            </div>
          </div>
          <div class="row">
      <div class="col-md-3">
        <div class="text-center">
          <h6>Upload a photo...</h6>
          <input type="file" class="form-control" name = "bookimg">
        </div>
      </div>
         
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <input type="submit" class="btn btn-primary" value="Share">
              <span></span>
              <input type="reset" class="btn btn-danger" value="Cancel">
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>




    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>