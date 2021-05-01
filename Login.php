<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php

if(isset($_POST["Submit"])){
  $Username=mysqli_real_escape_string($Connection,$_POST["Username"]);
  $Password=mysqli_real_escape_string($Connection,$_POST["Password"]);
  if(empty($Username)||empty($Password)){
  	$_SESSION["ErrorMessage"]="All Fields must be filled out";
  	Redirect_to("Login.php");

  }else{
    $Found_Account=Login_Attempt($Username,$Password);
    if($Found_Account){
      $_SESSION["UserId"]=$Found_Account['id'];
      $_SESSION["Username"]=$Found_Account['username'];
        if($Found_Account){
          $_SESSION["SuccessMessage"]= "Welcome {$_SESSION["Username"]} ";
          Redirect_to("dashboard.php");
        }else{
          $_SESSION["ErrorMessage"]="Invalid Username / Password";
        	Redirect_to("Login.php");
        }
      }
}
}
?>
<!DOCTYPE>
<html>
    <head>
        <title>Login</title>
        <link rel="icon" href="images/here.png" type="image/x-icon">
        <link rel="stylesheet"href="css/bootstrap.min.css">
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <link rel="stylesheet"href="css/adminstyles.css">
        <link rel="stylesheet"href="css/publicstyles.css">
    </head>
    <style>
      .FieldInfo{
        color:rgb(251,174,44);
        font-family: Bitter,Georgia,"Times New Roman",Times,serif;
        font-size: 1.2em;
      }
body{
  background-color: #ffffff;
}

    </style>
    <body>
      <div style="height: 10px; background:#27AAE1"></div>
      <nav class="navbar navbar-inverse" role="navigation">
            <div class="container">
      <div class="navbar-header">

            <a class="navbar-brand" href="Blog.php" target="_blank">
              <img style="margin-top: -15px;margin-left: -110px"src="images/logo2.png" width=1360; height=50>
            </a>
              </div>

            </div>

      </div>

      <div style="height: 10px; background:#27AAE1"></div>

<div class="container-fluid">
<div class="row" style="background-color: #ffffff;">
      <div class="col-sm-offset-4 col-sm-4">
<br><br><br><br>
        <?php echo Message();
              echo SuccessMessage();
              ?>
        <h2>Admin Access</h2>
<div>
<form action="Login.php" method="post">
  <fieldset>
    <div class="form-group">
    	<label for="Username"><span class="FieldInfo">UserName:</span></label>
      <div class="input-group input-group-lg">
        <span class="input-group-addon">
          <span class="glyphicon glyphicon-user text-primary"></span>
        </span>
    	<input class="form-control" type="text" name="Username" id="Username" placeholder="Username">
    	</div>
    </div>

      <div class="form-group">
    	<label for="Password"><span class="FieldInfo">Password:</span></label>
      <div class="input-group input-group-lg">
        <span class="input-group-addon">
          <span class="glyphicon glyphicon-lock text-primary"></span>
        </span>
    	<input class="form-control" type="Password" name="Password" id="Password" placeholder="Password">
    	</div>
    </div>

  <br>
  <input class="btn btn-info btn-block" type="Submit" name="Submit" value="Login">
  </fieldset>
</form>
</div>


      </div><!--ending of main area -->

  </div>
</div>
  	</body>
  </html>
