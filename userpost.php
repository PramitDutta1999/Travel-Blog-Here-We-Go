<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php Confirm_Signin(); ?>
<?php
if(isset($_POST["Submit"])){
$Title=mysqli_real_escape_string($Connection,$_POST["Title"]);
$Category=mysqli_real_escape_string($Connection,$_POST["Category"]);
$Post=mysqli_real_escape_string($Connection,$_POST["Post"]);
date_default_timezone_set("Asia/Dhaka");
$CurrentTime=time();
//$DateTime=strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);
$DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
$DateTime;
$Admin=  $_SESSION["User_Name"];
$Image=$_FILES["Image"]["name"];
$Target="Upload/".basename($_FILES["Image"]["name"]);
if(empty($Title)){
	$_SESSION["ErrorMessage"]="Title can't be empty";
	Redirect_to("userpost.php");

}if(empty($Image)){
	$_SESSION["ErrorMessage"]="Please add an image";
	Redirect_to("userpost.php");

}elseif(CheckImageExistsOrNot($Image)){
	$_SESSION["ErrorMessage"]="Please Change The Name of image file and try again";
	Redirect_to("userpost.php");

}elseif(strlen($Title)<2){
	$_SESSION["ErrorMessage"]="Title Should be at-least 2 Characters";
	Redirect_to("userpost.php");

}elseif(strlen($Title)>99){
	$_SESSION["ErrorMessage"]="Title is too long";
	Redirect_to("userpost.php");

}elseif(strlen($Post)<160){
	$_SESSION["ErrorMessage"]="Too short post";
	Redirect_to("userpost.php");

}elseif(strlen($Post)>9999){
	$_SESSION["ErrorMessage"]="Too long Post";
	Redirect_to("userpost.php");

}elseif(strlen($Image)>199){
	$_SESSION["ErrorMessage"]="Too long name for image";
	Redirect_to("userpost.php");

}else{
	global $Connection;
	$Query="INSERT INTO admin_panel(datetime,title,category,author,image,post,status)
	VALUES('$DateTime','$Title','$Category','$Admin','$Image','$Post','OFF')";
	$Execute=mysqli_query($Connection,$Query);
	move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);
	if($Execute){
	$_SESSION["SuccessMessage"]="Post Added Successfully";
	Redirect_to("userpost.php");
	}else{
	$_SESSION["ErrorMessage"]="Something Went Wrong.Try Again!";
	Redirect_to("userpost.php");

	}

}

}

?>

<!DOCTYPE>
<html>
    <head>
        <title>Add New Post</title>
				<link rel="icon" href="images/logo1.png" type="image/x-icon">
        <link rel="stylesheet"href="css/bootstrap.min.css">
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/b1c3598fcf.js" crossorigin="anonymous"></script>
        <link rel="stylesheet"href="css/adminstyles.css">
				<link rel="stylesheet"href="css/publicstyles.css">
    </head>
    <style>
      .FieldInfo{
        color:rgb(251,174,44);
        font-family: Bitter,Georgia,"Times New Roman",Times,serif;
        font-size: 1.2em;
      }


    </style>
    <body>
			<div style="height: 10px; background:#27AAE1"></div>
      <nav class="navbar navbar-inverse" role="navigation">
            <div class="container">
      <div class="navbar-header">

            <a class="navbar-brand" href="Blog.php">
              <img style="margin-top: -15px;margin-left: -100px"src="images/logo2.png" width=200; height=50>
            </a>
              </div>

              <ul class="nav navbar-nav">
                <li><a href="home.php" target="_blank">Home</a></li>
                <li><a href="Blog.php?Page=0" target="_blank">Blog</a></li>
                <li><a href="Signin.php" target="_blank">Signin</a></li>
                <li><a href="contactus.php" target="_blank">Contact Us</a></li>
                <li><a href="feedback.php" target="_blank">Feedback</a></li>
                <li><a href="gallery.php" target="_blank">Gallery</a></li>
                <li><a href="aboutus.php" target="_blank">About Us</a></li>
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
      <div class="container-fluid">
      <div class="row">
      <div class="col-sm-2">
				<h1><span class="FieldInfo">User Panel</span></h1>
        <ul id="Side_Menu" class="nav nav-pills nav-stacked">
          <li><a href="welcome.php">
          <i class="fas fa-align-justify"></i>
          &nbsp;Welcome</a></li>
          <li><a href="HowToPost.php">
          <i class="fas fa-chalkboard-teacher"></i>
          &nbsp;How to Post</a></li>
          <li class="active"><a href="userpost.php">
          <i class="far fa-list-alt"></i>
          &nbsp;Add New Post</a></li>
          <li><a href="signout.php">
          <i class="fas fa-sign-out-alt"></i>
          &nbsp;Signout</a></li>
        </ul>

      </div><!--Ending of side area -->

      <div class="col-sm-10">
        <h1>Add New Post</h1>
        <?php echo SuccessMessage();
              echo Message();
              ?>
<div>
<form action="userpost.php" method="post" enctype="multipart/form-data">
  <fieldset>
  <div class="form-group">
  <label for="Title"><span class="FieldInfo">Title:</span></label>
  <input class="form-control" type="text" name="Title" id="title" placeholder="Title">
  </div>
  <div class="form-group">
  <label for="categoryselect"><span class="FieldInfo">Category:</span></label>
  <select class="form-control" id="categoryselect" name="Category">

    <?php
    global $Connection;
    $ViewQuery="SELECT * FROM category ORDER BY datetime desc";
    $Execute=mysqli_query($Connection,$ViewQuery);
    while($DataRows=mysqli_fetch_array($Execute)){
            $Id=$DataRows["id"];
            $CategoryName=$DataRows["name"];
    ?>

    <option><?php echo $CategoryName; ?></option>
  <?php } ?>
</select>
  </div>
  <div class="form-group">
  <label for="imageselect"><span class="FieldInfo">Select Image:</span></label>
  <input type="File" class="form-control" name="Image" id="imageselect">
  </div>
  <div class="form-group">
  <label for="postarea"><span class="FieldInfo">Post:</span></label>
  <textarea class="form-control" name="Post" id="postarea"></textarea>
  </div>

  <br>
  <input class="btn btn-success btn-block" type="Submit" name="Submit" value="Add New Post">
  </fieldset>
</form>
</div>



      </div><!--ending of main area -->

    </div><!--ending of row-->

  </div><!--ending of container fluid-->
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
