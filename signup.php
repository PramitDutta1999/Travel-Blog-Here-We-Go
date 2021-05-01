<?php require_once("Include/DB.php");?>
<?php require_once("Include/Sessions.php");?>
<?php require_once("Include/Functions.php");?>
<?php
if(isset($_POST["Submit"])){
$Username=mysqli_real_escape_string($Connection,$_POST["Username"]);
$Email=mysqli_real_escape_string($Connection,$_POST["Email"]);
$Password=mysqli_real_escape_string($Connection,$_POST["Password"]);
$ConfirmPassword=mysqli_real_escape_string($Connection,$_POST["ConfirmPassword"]);
$Token=bin2hex(openssl_random_pseudo_bytes(40));

if(empty($Username) || empty($Email) || empty($Password) || empty($ConfirmPassword)){
  $_SESSION["ErrorMessage"]="All fields must be filled out";
  Redirect_To("signup.php");
}elseif($Password!==$ConfirmPassword){
  $_SESSION["ErrorMessage"]="Both Password Values must be same";
  Redirect_To("signup.php");
}elseif(strlen($Password)<4){
  $_SESSION["ErrorMessage"]="Your Password Should Include at least 4 values";
  Redirect_To("signup.php");
}elseif(CheckEmailExistsOrNot($Email)){
  $_SESSION["ErrorMessage"]="Email is Already in Use";
  Redirect_To("signup.php");
}elseif(CheckUserExistsOrNot($Username)){
  $_SESSION["ErrorMessage"]="Username is Already in Use.Try to use some additional number or character!";
  Redirect_To("signup.php");
}else{
  global $Connection;
  $Hashed_Password=Password_Encryption($Password);
  $Query="INSERT INTO user(username,email,password,token,active)
  Values('$Username','$Email','$Hashed_Password','$Token','OFF')";
  $Execute=mysqli_query($Connection,$Query);
  if($Execute){
    $subject="Confirm Account";
    $body='Hi '.$Username.'Here is the link to Active your account
    http://localhost/PHPCMS/active.php?token='.$Token;
    $SenderEmail="From:Your mail addess";
    if (mail($Email, $subject, $body, $SenderEmail)) {
      $_SESSION["SuccessMessage"]="Check Email for Activation.If not found check your spam folder too.";
      Redirect_To("signin.php");
    }else {
      $_SESSION["ErrorMessage"]="Something Went Wrong.Try Again!";
      Redirect_To("signup.php");
    }
  }else{
    $_SESSION["ErrorMessage"]="Something Went Wrong.Try Again!";
    Redirect_To("signup.php");
  }
}

}

 ?>

<!DOCTYPE>
<html>
<head>
<title>Signup</title>
  <link rel="icon" href="images/logo.png" type="image/x-icon">
  <link rel="stylesheet"href="css/bootstrap.min.css">
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet"href="css/publicstyles.css">
  <link rel="stylesheet"href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/sign1.css">
    </head>
<body>
  <div style="height: 10px; background:#27AAE1"></div>
  <nav class="navbar navbar-inverse" role="navigation">
        <div class="container">
          <div class="navbar-header">
        <a class="navbar-brand" href="Blog.php">
          <img style="margin-top: -15px; margin-left: -100px;"src="images/logo2.png" width=200; height=50>
        </a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="home.php">Home</a></li>
            <li><a href="Blog.php?Page=0">Blog</a></li>
            <li><a href="Signin.php">Signin</a></li>
            <li><a href="contactus.php">Contact Us</a></li>
            <li><a href="feedback.php">Feedback</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="aboutus.php">About Us</a></li>
            <li><a href="Login.php" target="_blank">Admin</a></li>
          </ul>
          <form action="Blog.php" class="navbar-form navbar-right">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="search" name="Search">
              <button class="btn btn-default" name="SearchButton">Go</button>
          </form>
            </div>


  </div>

  </nav>
  <div class="Line" style="height: 10px; background:#27AAE1"></div>
  <div>
    <?php echo Message();
          echo SuccessMessage();
          ?>
  </div>
  <section id="contact-section">
    <div class="loginbox" style="margin-top:50px">
    <img src="avatar.png" class="avatar">
        <h1>Join Us Here</h1>
        <form action="signup.php" method="post">
          <fieldset>
            <p>Username</p>
            <input type="text" Name="Username" value="" placeholder="Enter Username">
            <p>Email</p>
            <input type="text" Name="Email" value="" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" Name="Password" value="" placeholder="Enter Password">
            <p>Confirm Password</p>
            <input type="password" Name="ConfirmPassword" value="" placeholder="Enter Confirm Password">
            <input type="submit" name="Submit" value="Signup">
        <br><br>

        </form>


    </div>
</section>


<div style="height: 10px; background: #27AAE1;"></div>
<div id="Footer">
<hr><p>Theme By | Pramit Dutta |&copy;2019-2020 --- All right reserved.
</p>
<p>
This site only serves the purpose of herewego.com and they have all the rights. no one is allow to distribute
copies other then <br>&trade; herewego.com &trade;  Pramit Dutta</p><hr>

</div>
<div style="height: 10px; background: #27AAE1;"></div>


</body>

</html>
