<?php
    //include_once '../Controller/signupverify.php'; 
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Sign Up!!</title>
  </head>
  <body>
  <div id="signup">
        <h3 class="text-center text-white pt-5">Login form</h3>
  <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Create an Account Here to Explore More <br>  <small>It's free and Easy!</small></h3>
			 			</div>
			 			<div class="panel-body">
			    		<form role="form" method="POST" action ="/project/controller/signupverify.php" onsubmit=" return (nameValidate() && phoneValidate() && addressValidate() && sec_moneyValidate() && usernameValidate()&& passwordValidate())">
                        <div class="form-group">
								<input type="text" name="name" id="name" class="form-control input-sm" placeholder="Full Name" required>
								<p id = fullnameError style="color:red"></p>
                            </div>

			    			<div class="form-group">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required>
                            </div>
                            <div class="form-group">
								<input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="Phone Number" required>
								<p id = phoneError style="color:red"></p>
                            </div>
                            <div class="form-group">
								<input type="text" name="address" id="address" class="form-control input-sm" placeholder="Address" required>
								<p id = addressError style="color:red"></p>
                            </div>
                            <div class="form-group">
								<input type="text" name="sec_money" id="sec_money" class="form-control input-sm" placeholder="Security Money" required>
								<p id = sec_moneyError style="color:red"></p>
							</div>
							
							<div class="form-group">
								<input type="text" name="username" id="username" class="form-control input-sm" placeholder="Username" required>
								<p id = usernameError style="color:red"></p>
			    			</div>

			    			<div class="row">
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required>
			    					</div>
			    				</div>
			    				<div class="col-xs-6 col-sm-6 col-md-6">
			    					<div class="form-group">
			    						<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" required>
			    					</div>
								</div>
								<p id = passWordError style="color:red"></p>
			    			</div>
			    			
			    			<input type="submit" value="Register" class="btn btn-success btn-block">
			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
	</div>
	

	<script>
	
	   var fullname = document.getElementById('name').value;
	   var phoneNumber = document.getElementById('phone').value;
	   var address = document.getElementById('address').value;
	   var sec_money = document.getElementById('sec_money').value;
	   var username = document.getElementById('username').value;
	   var password = document.getElementById('password').value;
	   var confPass = document.getElementById('password_confirmation').value;
	   var format = /^[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]*$/;


	   function nameValidate(){

		   if(isNaN(fullname)){
			   document.getElementById('fullnameError').innerHTML="Name should not be a number";
			   return false;
		   }
		   else if(fullname.test(format)){
			   document.getElementById('fullnameError').innerHTML="Name should not contain Special Character";
			   return false;
		   }
		   else{
			   return true;
		   }
	   }

	   function phoneValidate(){
		   
		   if(isNaN(phoneNumber)){
			   document.getElementById('phoneError').innerHTML = "Phone Number Should be numaric";
			   return false;
		   }
		   else return true;
	   }

	   function addressValidate(){
		   if(isNaN(address)){
			   document.getElementById('addressError').innerHTML = "Address Must be Text";
			   return false;
		   }
		   else
		   return true;
	   }

	   function sec_moneyValidate(){
		   if(!isNaN(sec_money)){
			   document.getElementById('sec_moneyValidate').innerHTML = "Money must be number";
			   return false;
		   
		   }
		   else
		   return true;
	   }

	   function usernameValidate(){
		   if(isNaN(username)){
			   document.getElementById('usernameError').innerHTML="Username must not be number";
			   return false;
		   }
		   else return true;
	   }

	   function passwordValidate(){
		if(password != confPass){
         document.getElementById('passwordError').innerHTML = "Password must be same";
		 return false;
	   }
	   else
	   return true;
	   }
	 
	
	</script>
  






    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>