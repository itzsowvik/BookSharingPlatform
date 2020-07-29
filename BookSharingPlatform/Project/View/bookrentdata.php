<?php 
    //$bookidval = $_GET['id']; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Rent a Book</title>
  </head>
  <body>
  <h1 class="text-center">Hi There!<br>
        <small class = "text-center text-success">Rent a Book from Here. Fill Up Additional Info to Rent a Book</small>
    </h1>
    <form role="form" method="POST" action ="/project/controller/bookrent.php" onsubmit="">

    <div class="form-group">
                <input type="text" name="bookrentday" class="form-control input-sm" placeholder="For How Many Days?" required>
                <input type="hidden" name="bookid" value = "<?php echo $_GET['id']?>" >
								<p id = "bookrentdayError" style="color:red"></p>
							</div>
              <button type = "submit" class="btn btn-success">Rent</button>         
       
    </form>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>