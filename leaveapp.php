<?php
    session_start();

    if(isset($_POST['lno'])){

    $conn=mysqli_connect("localhost:3000","root","","registration");



    if(isset($_REQUEST['submit'])){
      $sql="update holiday SET status='Approved' where lno={$_REQUEST['lno']}";
      if(mysqli_query($conn, $sql)){
        header("location: leaveapp.php");
      }
    }
    if(isset($_REQUEST['del'])){
      $sql="delete from holiday where lno={$_REQUEST['lno']}";

      if(mysqli_query($conn, $sql)){
        header("location: leaveapp.php");
      }
    }    
  }

    
    if(!isset($_SESSION["user"])){
      header("location: logina.php");
        # code...
      }
    

 

?>


<html lang="en">
  <head>

    <script type="text/javascript">
      window.history.forward();
    </script>

    <title>LEAVE APPROVAL</title>

    
    <style type="text/css">
  body,html {
    /* to make an image of coversize, we need to make the body and html also 100%*/
          height: 100%;
        }
            .navbar{
                        background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(10,10,100, 0.6); /* Black w/opacity/see-through */
          color: white;
            }
                                    .logout:hover{
              cursor: pointer;
              box-shadow: 0 0 10px 0 white;
              box-shadow: 0px 5px 10px 0 white;
              border-radius: 50px;
              text-align: center;    


            }

            .logine{
        opacity: 0.8;
        background-color: white;
        margin-left: 4px;
        border: 110px;
        position: absolute;
        border-color: black;
        top: 140px;
        left: 2px;
        color: black;
        border-radius: 4px;
        font-size: 22px;
        padding: 30px;
        box-shadow: 10px 10px 10px 5px black;


      }


    .crossfade{
      background-image: url("sign.png");
          
          /* Add the blur effect */
          filter: blur(0px);
          -webkit-filter: blur(0px);
          
          /* Full height */
          height: 100%; 
          
          /* Center and scale the image nicely */
          background-position: center;
          background-repeat: no-repeat;
          background-size: cover;
          scroll-behavior: none;
          
          overflow: hidden;
      }
      .navbar-nav:hover .nav-link{
  
        display: block;
      }
      .nav-link:hover{
        box-shadow: 0px 5px 10px 0 white;
          border-radius: 50px;
          text-align: center;
      }
      .login{
        opacity: 0.8;
        background-color: white;
        margin-left: 4px;
        border: 110px;
        position: absolute;
        border-color: black;
        top: 95px;
        left: 250px;
        color: black;
        border-radius: 4px;
        font-size: 25px; 
        padding: 30px;
        box-shadow: 10px 10px 10px 8px black;


      }
      .logins{
        opacity: 0.9;
        background-color: white;
        margin-left: 4px;
        border: 110px;
        position: absolute;
        border-color: black;
        top: 105px;
        left: 1200px;
        color: black;
        border-radius: 4px;
        font-size: 15px; 
        padding: 30px;
        box-shadow: 10px 10px 10px 8px black;


      }
      .sub:hover{
        background-color: white; /* Green */
          color: black;
          box-shadow: 2px 2px 100px 10px; black;
      }
      .noti {
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.6); /* Black w/opacity/see-through */
          color: white;
          
          position: absolute;   /* TO place the text above the image of the cover size */
          top: 55%;
          left: 15%;
          transform: translate(-50%, -50%);
          font-size: 20px;
          width: 25%;
          height: 550px;
          padding: 5px;
          text-align: center;
          font-family: MV Boli;
          font-size: 18px;
      }

      .bg-text{
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0, 0.6); /* Black w/opacity/see-through */
          color: white;
          
          position: absolute;   /* TO place the text above the image of the cover size */
          top: 50%;
          left: 210%;
          transform: translate(-50%, -50%);
          font-size: 40px;
          width: 200%;

          padding: 5px;
          text-align: center;
          font-family: MV Boli;

      }
      .lis:hover {
        color: lightblue;
      }

      
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="refresh" content="900;url=logouta.php" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    
  </head>
  <body>
    <div class="crossfade"></div>   
    <nav>
      <nav class="navbar navbar-expand-sm fixed-top navbar-dark ">        <!-- BAR COLOR SCHEME AND STARTING -->
        <a href="https://sail.co.in/" target="_blank" class="navbar-brand" style="color: white;">
          <img src="sail.png" width="40" height="40">
        Steel Authority Of India Ltd.</a>
        <a href="mainm.php" class="navbar-brand">
          <img src="new.png" width="75" height="40" style="margin-left: 10px;">
        </a>


        <!-- COLLAPSE ICON AND ALL -->
        
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="menu">
          <ul class="navbar-nav" style="margin-left: 80px;">   <!-- THE ITEMS ON THE BAR -->
            <li class="nav-item dropdown ">

              <a href="#" class="nav-link dropdown" data-toggle="dropdown" style="color: white;margin-left: 50px;">List 1</a>
              <div class="dropdown-menu " style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
                <a href="sub1a.php" class="nav-link">Sub 1</a>
                <a href="sub2a.php" class="nav-link">Sub 2</a>
                <a href="#" class="nav-link">Sub 3</a>
                <a href="#" class="nav-link">Sub 4</a>

              </div>
            </li>         

            <li class="nav-item dropdown">      <!-- FOR THE DROPDOWN -->
              <a href="#" class="nav-link dropdown" data-toggle="dropdown" style="color: white;margin-left: 50px;">List 2</a>
              <div class="dropdown-menu " style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
                <a href="sub1a.php" class="nav-link">Sub 1</a>
                <a href="sub2a.php" class="nav-link">Sub 2</a>
                <a href="#" class="nav-link">Sub 3</a>
                <a href="#" class="nav-link">Sub 4</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown" data-toggle="dropdown" style="color: white;margin-left: 50px;">List 3</a>
              <div class="dropdown-menu " style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
                <a href="sub1a.php" class="nav-link">Sub 1</a>
                <a href="sub2a.php" class="nav-link">Sub 2</a>
                <a href="#" class="nav-link">Sub 3</a>
                <a href="#" class="nav-link">Sub 4</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a href="#" class="nav-link dropdown" data-toggle="dropdown" style="color: white;margin-left: 50px;">List 4</a>
              <div class="dropdown-menu " style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
                <a href="sub1a.php" class="nav-link">Sub 1</a>
                <a href="sub2a.php" class="nav-link">Sub 2</a>
                <a href="#" class="nav-link">Sub 3</a>
                <a href="#" class="nav-link">Sub 4</a>
              </div>
            </li>
            <li class="nav-item dropdown ">
              <div class="my-custom-scrollbar my-custom-scrollbar-primary">
              <a href="#" class="nav-link dropdown" data-toggle="dropdown" style="color: white;margin-left: 50px;">List 5</a>
              <div class="dropdown-menu scrollable-menu" role="menu" style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;">
                <a href="sub1a.php" class="nav-link">Sub 1</a>
                <a href="sub2a.php" class="nav-link">Sub 2</a>
                <a href="#" class="nav-link">Sub 3</a>
                <a href="#" class="nav-link">Sub 4</a>
              </div>
            </div>
            </li>
            



          
            
          </ul>
        
        <div>
          <ul class="navbar-nav"><li class="nav-item dropdown">
            <a href=" " class="nav-link dropdown" data-toggle="dropdown" style="margin-left: 55px;margin-right: 36px;color: white"><?php echo $_SESSION['user']; ?> (MGR)</a>
            <div class="dropdown-menu" style="background-color: rgb(0,0,0); background-color: rgba(10,10,100,0.6); margin-top: 13px;margin-left: 100px;">
              <a href="#" class="nav-link">Profile</a>
              <a href="#" class="nav-link">Settings</a>
              <a href="#" class="nav-link">Messages</a>
              
              <div class="dropdown-divider"></div>

              <form action="logouta.php" method="post"><input type="submit" value="Logout" class="logout" name="logout" style="border-radius: 10px;margin-top: 10px;margin-left: 30px; background-color: white;color: blacks;width: 100px;opacity: 0.9;"></form>
            </div>
            

          </li></ul>
        </div>
    </nav>
    </div>

    </table>
    <div class="table-responsive-xs">
          <table class="table table-responsive-xl" style="        margin-left: 0px;
        
        position: absolute;
        opacity: 0.8;
        top: 95px;
        left: 0px;
        background-color: white;
        
        
        font-size: 20px; 
        
        box-shadow: 10px 10px 10px 8px black;color: black;">
            <tr>
              <th colspan="9" align="center" style="text-align: center;">LEAVE APPROVALS</th>
            </tr>
            <tr>
              <th class="col-xs-1" scope="col">EMAIL</th>
              <th class="col-xs-1" scope="col">NAME</th>
              <th class="col-xs-1" scope="col">LTYPE</th>
              <th class="col-xs-1" scope="col">DFROM</th>
              <th class="col-xs-1" scope="col">TFROM</th>
              <th class="col-xs-1" scope="col">DTO</th>
              <th class="col-xs-1" scope="col">TTO</th>
              <th class="col-xs-1" scope="col">REASON</th>
              <th class="col-xs-1" scope="col">APPROVE</th>
              <th class="col-xs-1" scope="col">DELETE</th>
            </tr>

             <?php

                  $conn=mysqli_connect("localhost:3000","root","","registration");                  
                  $b=$_SESSION['user'];
                  //$a="select mgr from emp where mgr='$b'";
                  $sql="select holiday.lno, holiday.email, holiday.name, holiday.ltype, holiday.dfrom, holiday.tfrom, holiday.dto, holiday.tto, holiday.reason from holiday INNER JOIN emp ON holiday.name=emp.name where holiday.status='Applied [Pending]' AND emp.mgr='$b'";
                  $result=mysqli_query($conn,$sql);
                  $num=mysqli_num_rows($result);
                  
                  if($sql){


                  
                    while ($row=$result-> fetch_assoc()) {
                      if($sql){
                        echo "<tr><td  class='col-xs-1' scope='col'>".$row['email']."</td><td  class='col-xs-1' scope='col'>".$row['name']."</td><td  class='col-xs-1' scope='col'>".$row['ltype']."</td><td  class='col-xs-1' scope='col'>".$row['dfrom']."</td><td  class='col-xs-1' scope='col'>".$row['tfrom']."</td><td  class='col-xs-1' scope='col'>".$row['dto']."</td><td  class='col-xs-1' scope='col'>".$row['tto']."</td><td  class='col-xs-1' scope='col'>".$row['reason']."</td><td  class='col-xs-1' scope='col'><form action='' method='post'><input type='hidden' name='lno' value=" .$row['lno'] ."><input type='submit' class='btn btn-sm btn-primary' style='opacity: 1;' name='submit' value='Approve' style='color: white;'></form></td><td  class='col-xs-1' scope='col'><form action='' method='post'><input type='hidden' name='lno' value=" .$row['lno'] ."><input type='submit' class='btn btn-sm btn-danger' style='opacity: 1;' name='del' value='Cancel' style='color: white;'></form></td></tr>";

                      }
                      else{
                        echo "<h1>NO APPLIED LEAVES</h1>";
                      }

                    }
                  }
                
                  
             ?>
        
    </table>

  </div>
    
    

   



  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>