<?php require_once("Include/DB.php");?>
<?php require_once("Include/Sessions.php");?>
<?php require_once("Include/Functions.php");?>
<?php
if(isset($_POST["Submit"])){
$Email=mysqli_real_escape_string($Connection,$_POST["Email"]);
$Password=mysqli_real_escape_string($Connection,$_POST["Password"]);
if(empty($Email) || empty($Password)){
  $_SESSION["ErrorMessage"]="All fields must be filled out";
  Redirect_To("Signin.php");
}else{
  if(ConfirmingAccountActiveStatus($Email))
  {
  $Found_Account=Signin_Attempt($Email,$Password);
  if($Found_Account){
    $_SESSION["User_Id"]=$Found_Account['id'];
    $_SESSION["User_Name"]=$Found_Account['username'];
    $_SESSION["User_Email"]=$Found_Account['email'];
    if(isset($_POST["Remember"])){
      $ExpireTime=time()+86400;//86400 is in second,that means 1 day
      setcookie("SettingEmail",$Email,$ExpireTime);
      setcookie("SettingName",$Username,$ExpireTime);
    }
      $_SESSION["SuccessMessage"]= "Welcome {$_SESSION["User_Name"]} ";
    Redirect_To("welcome.php");
  }else{
    $_SESSION["ErrorMessage"]="Invalid Email / Password";
    Redirect_To("signin.php");
  }
}else{
  $_SESSION["ErrorMessage"]="Account Confirmation Required";
  Redirect_To("signin.php");
}
}
}
?>
<!DOCTYPE>
<html>
<head>
<title>Signin</title>
  <link rel="icon" href="images/logo.png" type="image/x-icon">
  <link rel="stylesheet"href="css/bootstrap.min.css">
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet"href="css/publicstyles.css">
  <link rel="stylesheet"href="css/footer.css">
    <link rel="stylesheet" type="text/css" href="css/sign.css">
    <style>
      .FieldInfo{
        color:rgb(251,174,44);
        font-family: Bitter,Georgia,"Times New Roman",Times,serif;
        font-size: 1.2em;
      }


    </style>
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
            <li class="active"><a href="Signin.php">Signin</a></li>
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
    <div class="loginbox" style="margin-top:20px">
    <img src="avatar.png" class="avatar">
        <h1>Signin Here</h1>
        <form action="signin.php" method="post">
          <fieldset>
            <p>Email</p>
            <input type="text" Name="Email" value="" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" Name="Password" value="" placeholder="Enter Password">
            <input type="submit" name="Submit" value="Signin"><br>
            <input id="cb" type="checkbox" name="Remember" style="margin-left: -135px; margin-top: 5px;">
<div style="margin-left: -1px;margin-top:-35px;margin-bottom:5px;">
     Remember Me
</div>
            <a href="recover.php">Lost your password?</a><br>
            <a href="signup.php">Don't have an account?</a>

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
