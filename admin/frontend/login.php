<?php
session_start();
include '../../app/call.php';
if(checkUserLogin()){
   redirect('../UserView/home.php');
}
if(checkAdminLogin()){
   redirect('../index.php');
}

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
                    
                     <li class="selected"><a href="login.php">LOGIN</a></li>
                     <li ><a href="signup.php">Register</a></li>
                     
               </ul>
         </div>
         <!--end of menu-->
      </div>
      <!--end of top-->     
      <a href="#" id="mob-nav"><i class="fa fa-bars"></i></a>
      <div class="mob-menu">
            <ul>
                    
                    <li class="selected"><a href="login.php">LOGIN</a></li>
                    <li ><a href="signup.php">Register</a></li>
                    
              </ul>
      </div>
      <div class="banner">
         <h1>LOGIN</h1> 
         <p></p>
      </div>
      <!--end of banner-->  
      <div class="contact">
         <div class="row"> 
            <div class="col-md-12">
               <div class="contact-section">
                  <div class="col-md-12">
                    




                        <div class="form">
                              <div class="address">
                                 
                              </div>
                              <span style="color:Red"> <?php  echo $msg;  ?></span>
                              <form method="POST" action="frontendlogincheck.php">
                                  <legend>User Login Form</legend>  
                                 <input type="email" name="email" placeholder="Email ">
                                 <input type="password" name="password" placeholder="Password">
                                
                                 <center><button type="submit" name="Usersubmitbtn">LOGIN </button></center>
                                                       
                              </form>
                           </div>


                     
                     <!--end of address-->
                  </div>
                  <!--end of col-md-6-->
                  <!-- <div class="col-md-6">
                     <div class="form">
                        <div class="address">
                           
                        </div>
                        <form method="POST" action="frontendlogincheck.php">
                            <legend>Admin Login Form</legend>  
                           <input type="email" name="email" placeholder="Email ">
                           <input type="password" name="password" placeholder="Password">
                          
                           <button type="submit" name="submitbtn">LOGIN </button>
                                                 
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

         <div class="row">
               <div class="col-md-12">
                  <div class="contact-section">
                     <div class="col-md-4">
                        </div>
                        <div class="col-md-4">
                             <span style="font-size: 25px"><span style="color: #16a085"> Didn't have a account:-</span></span><a href="signup.php"><button type="submit">Register </button></a>

                           </div>
                        <div class="col-md-4">
                           </div>
                          
                     </div>
                  </div>
               </div>


      </div>
   
     
     
      <!--end of bottom foot-->
   </body>
</html>