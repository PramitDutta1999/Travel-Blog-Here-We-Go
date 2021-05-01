<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php

if(isset($_POST["Submit"])){
  $Feedback=mysqli_real_escape_string($Connection,$_POST["Feedback"]);
  $Comment=mysqli_real_escape_string($Connection,$_POST["Comment"]);
  $Name=mysqli_real_escape_string($Connection,$_POST["Name"]);
  $Email=mysqli_real_escape_string($Connection,$_POST["Email"]);
  $Mobile=mysqli_real_escape_string($Connection,$_POST["Mobile"]);
  date_default_timezone_set("Asia/Dhaka");
  $CurrentTime=time();
  //$DateTime=strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);
  $DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
  $DateTime;
  if(empty($Comment)){
    $_SESSION["ErrorMessage"]= "Please leave us a comment";
    Redirect_to("feedback.php");
  }elseif(strlen($Comment)>999){
    $_SESSION["ErrorMessage"]= "Too Long Comment";
    Redirect_to("feedback.php");
  }elseif(strlen($Name)>49){
    $_SESSION["ErrorMessage"]= "Too Long Name";
    Redirect_to("feedback.php");
  }elseif(strlen($Email)>199){
    $_SESSION["ErrorMessage"]= "Too Long Email";
    Redirect_to("feedback.php");
  }elseif(strlen($Mobile)>49){
    $_SESSION["ErrorMessage"]= "Too Long Mobile No";
    Redirect_to("feedback.php");
  }else{
    global $Connection;
    $Query="INSERT INTO feedback(feedback,comment,name,email,mobile,datetime)
    VALUES('$Feedback','$Comment','$Email','$Name','$Mobile','$DateTime')";
    $Execute=mysqli_query($Connection,$Query);
    if($Execute){
      $_SESSION["SuccessMessage"]= "Thanks for your feedback";
      Redirect_to("feedback.php");
    }else{
      $_SESSION["ErrorMessage"]= "Something went wrong. Please try again!";
      Redirect_to("feedback.php");
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
      <title>Feedback</title>
      <link rel="icon" href="images/logo.png" type="image/x-icon">
      <link rel="stylesheet"href="css/bootstrap.min.css">
      <script src="js/jquery-3.5.1.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <link rel="stylesheet"href="css/publicstyles.css">
      <link rel="stylesheet"href="css/footer.css">
   <link rel="stylesheet" type="text/css" href="css/feedback.css">

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
                 <li><a href="contactus.php">Contact Us</a></li>
                 <li class="active"><a href="feedback.php">Feedback</a></li>
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
           	 <h2>Feedback Form</h2>
              <p>Please give us some moment & leave your valuable suggestion</p>
             <div class="contact-form">


                   <!-- second grid -->
           <div style="margin-left:500px">
             <form action="feedback.php" method="post">
               <fieldset>
                 <div class="form-group">
                   <div class="form-group">

                   <label for="ratingselect"></span></label>
                     <select class="form-control" id="ratingselect" name="Feedback"placeholder="Feedback">
                     <option>Excellent</option>
                     <option>Good</option>
                     <option>Satisfactory</option>
                     <option>Average</option>
                     <option>Poor</option>
                   </select>
                   </div>
               <input type="text" Name="Name" placeholder="Name(Optional)"><br>
               <input type="Email" Name="Email" placeholder="Email(Optional)"><br>
               <input type="text" Name="Mobile" placeholder="Mobile(Optional)"><br>
                <textarea name="Comment" placeholder="Comment(Required)" rows="5"></textarea><br>

               <button class="submit" type="Submit" name="Submit" >Submit</button>
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
