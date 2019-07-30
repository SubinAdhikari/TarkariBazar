<?php
$msg=$_GET['ref'];
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
      <meta name="description" content="">
      <meta name="keywords" content="">
      <meta name="rating" content="General" >
      <meta name="viewport" content="width=device-width, initial-scale:1.0, user-scale:0"/>
      <meta name="robots" content="index, follow" >
      <meta name="googlebot" content="noodp" >
      <meta name="slurp" content="noydir">
      <title>HameroTarkari.com</title>
      <link rel="icon" href="images/fav.png" type="image/gif" sizes="16x16">
      <!-- ********************* CSS  LINKS ********************* -->
      <link href="styles/custom.css" rel="stylesheet">
      <link href="styles/mobile.css" rel="stylesheet">
      <link href="styles/bootstrap/bootstrap.min.css" rel="stylesheet">
      <link href="styles/font-awesome.css" rel="stylesheet">
      <!-- ********************* JS JQUERY LINKS ********************* -->
      <script src="js/jquery-1.11.1.min.js"></script>   
      <!-- *********************  JS LINKS ********************* -->
      <script src="js/slider.js"></script>   
      <script src="js/cycle.js"></script>  
      <script src="js/general.js"></script>   
      <script src="js/scroll.js"></script>    
   </head>
   <body class="bg">
      <div class="top top-bar-bg">
         <div class="logo">
            <a href="Frontendhome.php">हाम्रो<span>तरकारी</span>बजार</a>
         </div>
         <!--end of logo-->
         <div class="menu">
               <ul>
                     
                     <li><a href="login.php">LOGIN</a></li>
                     <li class="selected"><a href="signup.html">Register</a></li>
               </ul>
         </div>
         <!--end of menu-->
      </div>
      <!--end of top-->     
      <a href="#" id="mob-nav"><i class="fa fa-bars"></i></a>
      <div class="mob-menu">
            <ul>
                  
                  <li><a href="login.php">LOGIN</a></li>
                  <li class="selected"><a href="signup.html">Register</a></li>
            </ul>
      </div>
      <div class="banner">
         <h1>Register</h1>
         
      </div>
      <!--end of banner-->  
      <div class="contact">
         <div class="row">
            <div class="col-md-12">
               <div class="contact-section">
                  
                  <!--end of col-md-6-->
                  <div class="col-md-12">
                     <div class="form">
                        <div class="address">
                           <h2>Register Here</h2>
                        </div>
                        <span style="color:Red"> <?php echo $msg; ?></span>
                        <form method="POST"  action="frontendlogincheck.php">
                           <legend>Register Form</legend>
                           <input type="text" name="fname" placeholder="First Name" required/>
                           <input type="text" name="lname" placeholder="Last Name " required/>
                           <input type="email" name="email" onblur="alreadyexist" placeholder="Email " required/>
                           <input type="password" name="password" placeholder="Password" required/>
                           <input type="text" name="phoneno"  placeholder="Phone No " required/>
                           <button type="submit" name="registerBtn">register </button>                           
                        </form>
                     </div>
                     <!--end of form-->
                  </div>
                  <!--end of col-md-6-->
               </div>
               <!--end of section-->
            </div>
            <!--end of col-md-12-->
         </div>
         <!--end of row-->
      </div>
     
     
      <!--end of bottom foot-->
   </body>
  
</html>