<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Signup Admin</title>
   

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
				top: 165px;
				left: 360px;
				color: black;
				border-radius: 4px;
				font-size: 25px;
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

          <a href="home.php" class="navbar-brand">
    			<img src="new.png" width="95" height="40" style="margin-left: 1000px;">
    		</a>
      </nav>
	<div class="bg-image"></div>
	<center>
	
	<div class="login">
		<form name="login" action="registrationa.php" onsubmit="return validate()" method="post">
			<table cellpadding="25" align="center">
				<tr>
					<td colspan="2" align="center" style="font-size: 30px;">SIGNUP</td>
				</tr>
				<tr>
					<td>EMAIL</td>
					<td><input type="email" name="user" size="40" class="email" style="border-radius: 6px; border: 1px;box-shadow: 0 0 20px 0 black;font-size: 15px;"></td>
				</tr>
				<tr>
					<td>PASSWORD</td>
					<td><input type="password" name="password" class="pass" size="40" style="border-radius: 6px; border: 1px;box-shadow: 0 0 20px 0 black;font-size: 15px;"></td>
				</tr>
				<tr>
					<td>CONFIRM PASSWORD</td>
					<td><input type="password" name="cpassword" class="pass" size="40" style="border-radius: 6px; border: 1px;box-shadow: 0 0 20px 0 black;font-size: 15px;"></td>
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