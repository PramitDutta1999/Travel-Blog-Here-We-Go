<?php require_once("Include/Sessions.php");?>
<?php require_once("Include/recover.css");?>
<?php require_once("Include/DB.php");?>
<?php require_once("Include/Functions.php");?>
<?php
if(isset($_GET['token'])){
  $TokenFromURL=$_GET['token'];
if(isset($_POST["Submit"])){
$Password=mysqli_real_escape_string($Connection,$_POST["Password"]);
$ConfirmPassword=mysqli_real_escape_string($Connection,$_POST["ConfirmPassword"]);
if(empty($Password) || empty($ConfirmPassword)){
  $_SESSION["ErrorMessage"]="All fields must be filled out";
}elseif($Password!==$ConfirmPassword){
  $_SESSION["ErrorMessage"]="Both Password Values must be same";
}elseif(strlen($Password)<4){
  $_SESSION["ErrorMessage"]="Your Password Should Include at least 4 values";
}else{
  global $Connection;
  $Hashed_Password=Password_Encryption($Password);
  $Query="UPDATE user SET password='$Hashed_Password' WHERE token='$TokenFromURL'";
  $Execute=mysqli_query($Connection,$Query);
  if($Execute){
    $_SESSION["SuccessMessage"]="Password changed successfully";
    Redirect_To("signin.php");
  }else{
    $_SESSION["ErrorMessage"]="Something Went Wrong.Try Again!";
    Redirect_To("signin.php");
  }
}

}

}

 ?>
<!DOCTYPE>
<html>
    <head>
      <title>Create New Password</title>
    </head>
    <body>
      <div>
      <?php echo Message(); ?>
      <?php echo SuccessMessage(); ?></div>
<div id="centerpage">
<form action="reset.php?token=<?php echo $TokenFromURL;?>" method="post">
<fieldset>
  <span class="FieldInfo">New Password:</span><br><input type="password" Name="Password" value=""><br>
  <span class="FieldInfo">Confirm Password:</span><br><input type="password" Name="ConfirmPassword" value="">
<br><input type="Submit" Name="Submit" value="Submit"><br>
</fieldset>
</div>
    </body>
</html>
