<?php

    session_start();
    if(!isset($_SESSION["username"])){
      header("location: login.php");
        # code...
      }
    
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>LEAVE APPLICATION</title>
    <meta http-equiv="refresh" content="900;url=logout.php" />
  

	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<style>
	body,html {
				  height: 100%;
				}

			            .navbar{
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.8);
          color: white;
            }
            .nav-link:hover{
        box-shadow: 0px 5px 10px 0 white;
          border-radius: 50px;
          text-align: center;
      }
		
			.bg-image {
				  background-image: url("home11.png");
				  filter: blur(0px);
				  	
				  height: 100%; 
				  background-repeat: no-repeat;
				  background-size: cover;
			}
			.login{
				opacity: 0.8;
				background-color: white;
				margin-left: 4px;
				border: 110px;
				position: absolute;
				border-color: black;
				top: 85px;
				left: 480px;
				color: black;
				border-radius: 4px;
				font-size: 18px;
				padding: 30px;
				box-shadow: 10px 10px 10px 5px black;


			}
			.image{
				position: absolute;
				top: 2%;
				left: 1%;
			}
			.sub:hover{
				background-color: white; /* Green */
  				color: black;
  				box-shadow: 2px 2px 100px 10px; black;
			}

		</style>

</head>
<body background="red">
	    <nav class="navbar navbar-expand-sm fixed-top navbar-dark ">
	        	<a href="https://sail.co.in/" target="_blank" class="navbar-brand" style="color: white">
	         		 <img src="sail.png" width="40" height="40"> Steel Authority of India Ltd.</a>

	            <a href="main.php" class="navbar-brand">
	    			<img src="new.png" width="95" height="40" style="margin-left: 40px;">
	    	    </a>
	    	    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="menu">
		    		<ul class="navbar-nav" style="margin-left: 80px;">   <!-- THE ITEMS ON THE BAR -->
	    			<li class="nav-item">
	    				<a href="leaves.php" class="nav-link" style="color: white;margin-left: 700px;font-size: 25px;">LEAVE STATUS</a>

    				</li> 
    			</ul>


	        </div>

        </nav>
	<div class="bg-image"></div>
	<center>
	
	<div class="login">
		<form name="login" action="leaveD.php"  method="post">
			<table cellpadding="8" >
				<tr>
					<td colspan="2" align="center" style="font-size: 30px;">LEAVE APPLICATION</td>
				</tr>

				<tr>
					<td>EMAIL</td>
					<td><input type="email" name="email" size="18" class="form-control" class="form-control" value="<?php echo $_SESSION['username']; ?>" readonly style="border-radius: 10px;"></td>
				</tr>

				<tr>
					<td>NAME</td>
					<td><input type="text" name="name" size="18" class="form-control" class="form-control" style="border-radius: 10px;"></td>
				</tr>
				<tr>
					<td>TYPE</td>
					<td><select name="ltype"class="form-control" style="border-radius: 10px;">
						<option></option>
						<option>Casual Leave</option>
						<option>Medical Leave</option>
						<option>Emergency Leave</option>
					</select></td>
				</tr>
				<tr>
					<td>FROM</td>
					<td><input type="date" name="dfrom" size="40" class="form-control"  style="border-radius: 10px;"></td>
				</tr>
				<tr>
					<td>TIME</td>
					<td><input type="time" name="tfrom" size="40" class="form-control"  style="border-radius: 10px;"></td>
				</tr>
				<tr>
					<td>TO</td>
					<td><input type="date" name="dto" size="40" class="form-control"  style="border-radius: 10px;"></td>
				</tr>				
				<tr>
					<td>TIME</td>
					<td><input type="time" name="tto" size="40" class="form-control"  style="border-radius: 10px;" size="100"></td>
				</tr>
				<tr>
					<td>REASON</td>
					<td><textarea name="reason" cols="30" class="form-control" class="form-control" style="border-radius: 10px;"></textarea></td>
				</tr>
				<tr>
				<td colspan="2" align="center"><input type="submit" class="sub" name="submit" value="Submit" style="opacity: 1;font-size: 20px;border-radius: 50px;border: 1px; cursor: pointer;background-color: white;">
				</td>
			</tr>
		</table>



		</div>
	</form>
</div></center>
		<nav>

	<script type="text/javascript">
      
          function validate(){
          var umail=document.login.user.value;
          var upass=document.login.password.value;
          var cpass=document.login.cpassword.value;
          var len=upass.length;

          if(umail=="" || upass=="" || cpass==""){
            alert("The Fields cannot be left Empty");
            return false;
            
          }
          if(upass!=cpass){
            alert("The passwords donot match");
            return false;
          }
          if(upass.length<8){
          	alert("The password cannot be less than 8 elements");
          	return false;
         }
         else{
         	true;
         }
       }
    </script>


 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>