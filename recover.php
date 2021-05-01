<?php require_once("Include/Sessions.php");?>
<?php require_once("Include/recover.css");?>
<?php require_once("Include/DB.php");?>
<?php require_once("Include/Functions.php");?>
<?php
if(isset($_POST["Submit"])){
$Email=mysqli_real_escape_string($Connection,$_POST["Email"]);

if(empty($Email)){
  $_SESSION["ErrorMessage"]="Email Required";
  Redirect_To("recover.php");
}elseif(!CheckEmailExistsOrNot($Email)){
  $_SESSION["ErrorMessage"]="Email not Found";
  Redirect_To("signup.php");
}else{
  global $Connection;
  $Query="SELECT * FROM user WHERE email='$Email'";
  $Execute=mysqli_query($Connection,$Query);
  if($admin=mysqli_fetch_array($Execute)){
    $admin['username'];
    $admin['token'];
    $subject="Reset Password";
    $body='Hi '.$admin['username'].'Here is the link to reset your password
    http://localhost/PHPCMS/reset.php?token='.$admin['token'];
    $SenderEmail="From:duttaanik039@gmail.com";
    if (mail($Email, $subject, $body, $SenderEmail)) {
      $_SESSION["SuccessMessage"]="Check Email for resetting password.If not found check your spam folder too.";
      Redirect_To("signin.php");
    }else {
      $_SESSION["ErrorMessage"]="Something Went Wrong.Try Again!";
      Redirect_To("signin.php");
    }
  }else{
    $_SESSION["ErrorMessage"]="Something Went Wrong.Try Again!";
    Redirect_To("signin.php");
  }
}

}






 ?>
<!DOCTYPE>
<html>
    <head>
      <title>Forgot Password</title>
    </head>
    <body>
      <div>
      <?php echo Message(); ?>
      <?php echo SuccessMessage(); ?></div>
<div id="centerpage">
<form action="recover.php" method="post">
<fieldset>
  <span class="FieldInfo">Email:</span><br><input type="email" Name="Email" value=""><br>
<br><input type="Submit" Name="Submit" value="Submit"><br>
</fieldset>
</div>
    </body>
</html>
