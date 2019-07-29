<?php
session_start();
include '../../app/call.php';
if(checkUserLogin()){
   redirect('../UserView/home.php');
}
if(checkAdminLogin()){
   redirect('../index.php');
}
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
            <a href="adminlogin.php">हाम्रो<span>तरकारी</span>बजार</a>
         </div>
         <!--end of logo-->
         <div class="menu">
               <ul>
                     <!-- <li><a href="index.html">HOME</a></li>
                     <li><a href="about.html">ABOUT</a></li> -->
                     <!-- <li><a href="services.html">SERVICES</a></li> -->
                     <!-- <li><a href="works.html">WORKS</a></li> -->
                     <!-- <li ><a href="pricing.html"  >PRICING</a></li> -->
                     <!-- <li><a  href="contact.html">CONTACT</a></li> -->
                     <li class="selected"><a href="adminlogin.php">LOGIN</a></li>
                     <!-- <li><a href="signup.html">SIGNUP</a></li> -->
               </ul>
         </div>
         <!--end of menu-->
      </div>
      <!--end of top-->     
      <a href="#" id="mob-nav"><i class="fa fa-bars"></i></a>
      <div class="mob-menu">
            <!-- <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li> -->
                    <!-- <li><a href="services.html">SERVICES</a></li> -->
                    <!-- <li><a href="works.html">WORKS</a></li> -->
                    <!-- <li ><a href="pricing.html"  >PRICING</a></li> -->
                    <!-- <li><a  href="contact.html">CONTACT</a></li> -->
                    <li class="selected"><a href="adminlogin.php">LOGIN</a></li>
                    <!-- <li><a href="signup.html">SIGNUP</a></li> -->
              </ul>
      </div>
      <div class="banner">
         <h1>Admin LOGIN</h1>
         <p></p>
      </div>
      <!--end of banner-->  
      <div class="contact">
         <div class="row">
            <div class="col-md-12">
               <div class="contact-section">
                  <!-- <div class="col-md-6">
                    




                        <div class="form">
                              <div class="address">
                                 
                              </div>
                              <form method="POST" action="frontendlogincheck.php">
                                  <legend>User Login Form</legend>  
                                 <input type="email" name="email" placeholder="Email ">
                                 <input type="password" name="password" placeholder="Password">
                                
                                 <button type="submit" name="Usersubmitbtn">LOGIN </button>
                                                       
                              </form>
                           </div>


                     
                     <!--end of address-->
                  </div> 
                  <!--end of col-md-6-->
                  <div class="col-md-12">
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

         
   
      <!--end of contact-->
      
      <!--end of foot-->
      <div class="bottom-foot">
         <div class="row nopadding">
            <div class="col-md-12 nopadding">
               <div class="col-md-6 nopadding">
                  <p>Copyrights &copy; 2016 CreativeX Inc | Design :<a href="http://www.themeswild.com" style=" color: #16a085;"> themeswild</a></p>
               </div>
               <!--end of col-12-->
               <div class="col-md-6 nopadding">
                  <ul>
                     <li><a href="about.html">ABOUT</a></li>
                     <li><a href="privacy.html">PRIVACY</a></li>
                     <li><a href="terms.html">TERMS & CONDITIONS</a></li>
                  </ul>
               </div>
               <!--end of col-12-->
            </div>
            <!--end of col-12-->
         </div>
         <!--en of row-->
      </div>
      <!--end of bottom foot-->
   </body>
</html>