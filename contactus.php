<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php");?>
<?php require_once("Include/Functions.php");?>
<?php
//mail('sender mail address','testing','this is just a test to check mail','From: receiver mail address');
global $Connection;
if(isset($_POST["Submit"])){
$Name=mysqli_real_escape_string($Connection,$_POST["Name"]);
$Email=mysqli_real_escape_string($Connection,$_POST["Email"]);
$subject=mysqli_real_escape_string($Connection,$_POST["Subject"]);
$Body=mysqli_real_escape_string($Connection,$_POST["message"]);
$body=$Body.
' This mail is sent by: '.$Name.' & Email is: '.$Email.' This message is sent for here we go website purpose';
$emailTo='Sender mail address';
$headers="From:Receiver mail address";
if(empty($Name) || empty($Email) || empty($subject) || empty($Body)){
  $_SESSION["ErrorMessage"]="All Fields Required!";
  Redirect_to("contactus.php");
}else{
  if (mail($emailTo, $subject, $body, $headers)) {
      $_SESSION["SuccessMessage"]="Mail sent successfully!";
      Redirect_to("contactus.php");
    }else {
      $_SESSION["ErrorMessage"]="Something Went Wrong.Try Again!";
      Redirect_to("contactus.php");
  }
}
}
?>
<!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Contact Us</title>
      <link rel="icon" href="images/logo.png" type="image/x-icon">
      <link rel="stylesheet"href="css/bootstrap.min.css">
      <script src="js/jquery-3.5.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <link rel="stylesheet"href="css/publicstyles.css">
      <link rel="stylesheet"href="css/footer.css">
   <link rel="stylesheet" type="text/css" href="css/contact.css">
    <!-- Add font awesome CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
     <body>


       <div style="height: 10px; background:#27AAE1"></div>
       <nav class="navbar navbar-inverse" style="height:52px"role="navigation">
             <div class="container">
       <div class="navbar-header">

             <a class="navbar-brand" href="Blog.php">
               <img style="margin-top: -15px;margin-left: 5px;"src="images/logo2.png" width=200; height=50>
             </a>
               </div>

               <ul class="nav navbar-nav">
                 <li><a href="home.php">Home</a></li>
                 <li><a href="Blog.php?Page=0">Blog</a></li>
                 <li><a href="Signin.php">Signin</a></li>
                 <li class="active"><a href="contactus.php">Contact Us</a></li>
                 <li><a href="feedback.php">Feedback</a></li>
                 <li><a href="gallery.php">Gallery</a></li>
                 <li><a href="aboutus.php">About Us</a></li>
                 <li><a href="Login.php" target="_blank">Admin</a></li>
               </ul>
               <form action="Blog.php" class="navbar-form navbar-right">
                 <div class="form-group" style="margin-top: -10px;">
                   <input type="text" class="form-control" placeholder="search" name="Search">
                   <button class="btn btn-default" name="SearchButton">Go</button>
               </form>
             </div>

       </div>

       </nav>
       <div class="Line" style="height: 10px;background:#27AAE1"></div>


   <!-- contact section -->
         <section id="contact-section">
           <div class="container">
             <?php echo SuccessMessage();
                   echo Message();
                   ?>
           	 <h2>Contact Us</h2>
              <p>Email us and keep upto date with our latest news</p>
             <div class="contact-form">

                  <!-- First grid -->
               <div>
                <a href="https://goo.gl/maps/x1tzBgAXxJUQM1u18" target="_blank"><i class="fa fa-map-marker"></i><span class="form-info">  Chittagong,Bangladesh</span><br></a>
                 <a href="tel:+8801XXXXXXXXXXX" target="_blank"><i class="fa fa-phone" > </i><span class="form-info">  +8801XXXXXXXXXXX</span><br></a>
                 <a href="mailto:duttaanik039@gmail.com" target="_blank"><i class="fa fa-envelope"></i><span class="form-info">  duttaanik039@gmail.com</span><br></a>
               </div>

                   <!-- second grid -->
           <div>
             <form action="contactus.php" method="post">
               <input type="text" Name="Name" placeholder="Your Name"><br>
               <input type="Email" Name="Email" placeholder="Your Email"><br>
               <input type="text" Name="Subject" placeholder="Subject of this message"><br>
                <textarea name="message" placeholder="Message" rows="5" required></textarea><br>

               <button class="submit" type="Submit" name="Submit" >Send Message</button>
             </form>
               </div>
             </div>
           </div>
         </section>


         <div style="height: 10px; background: #27AAE1;"></div>
         <div class="row-sm-10">
         <div id="Footer">
           <br>
         <hr><p>Theme By | Pramit Dutta |&copy;2019-2020 --- All right reserved.
         </p>
         <p>
         This site only serves the purpose of herewego.com and they have all the rights. no one is allow to distribute
         copies other then <br>&trade; herewego.com &trade;  Pramit Dutta</p><hr>

         </div>
         <div style="height: 10px; background: #27AAE1;"></div>
         </div>


     </body>
     </html>
