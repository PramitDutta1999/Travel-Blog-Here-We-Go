<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php Confirm_Login(); ?>
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
$Admin="Pramit Dutta";
$Image=$_FILES["Image"]["name"];
$Target="Upload/".basename($_FILES["Image"]["name"]);

	global $Connection;
	$DeleteFromURL=$_GET['Delete'];
  $Query="DELETE FROM admin_panel WHERE id='$DeleteFromURL'";
	$Execute=mysqli_query($Connection,$Query);
	move_uploaded_file($_FILES["Image"]["tmp_name"],$Target);
	if($Execute){
	$_SESSION["SuccessMessage"]="Post Deleted Successfully";
	Redirect_to("pendingpost.php");
	}else{
	$_SESSION["ErrorMessage"]="Something Went Wrong.Try Again!";
	Redirect_to("pendingpost.php");
}
}
?>



<!DOCTYPE>
<html>
    <head>
        <title>Delete Post</title>
				<link rel="icon" href="images/logo1.png" type="image/x-icon">
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


    </style>
    <body>
			<div style="height: 10px; background:#27AAE1"></div>
			<nav class="navbar navbar-inverse" role="navigation">
						<div class="container">
			<div class="navbar-header">

						<a class="navbar-brand" href="Blog.php">
							<img style="margin-top: -15px;margin-left: -60px"src="images/logo2.png" width=200; height=50>
						</a>
							</div>

							<ul class="nav navbar-nav">
								<li><a href="#" target="_blank">Home</a></li>
								<li><a href="Blog.php" target="_blank">Blog</a></li>
								<li><a href="#" target="_blank">Sign in</a></li>
								<li><a href="#" target="_blank">Contact Us</a></li>
								<li><a href="feedback.php" target="_blank">Feedback</a></li>
								<li><a href="gallery.php" target="_blank">Gallery</a></li>
								<li><a href="#" target="_blank">About Us</a></li>
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
				<h1><span class="FieldInfo">Admin Panel</span></h1>
        <ul id="Side_Menu" class="nav nav-pills nav-stacked">
          <li><a href="dashboard.php">
          <span class="glyphicon glyphicon-th"></span>
          &nbsp;Dashboard</a></li>
          <li><a href="AddNewPost.php">
          <span class="glyphicon glyphicon-list-alt"></span>
          &nbsp;Add New Post</a></li>
          <li><a href="Categories.php">
          <span class="glyphicon glyphicon-tags"></span>
          &nbsp;Categories</a></li>
          <li><a href="#">
          <span class="glyphicon glyphicon-user"></span>
          &nbsp;Manage Admins</a></li>
          <li><a href="#">
          <span class="glyphicon glyphicon-comment"></span>
          &nbsp;Comments</a></li>
          <li><a href="#">
          <span class="glyphicon glyphicon-equalizer"></span>
          &nbsp;Live Blog</a></li>
					<li><a href="view_feedback.php">
          <span class="glyphicon glyphicon-stats"></span>
          &nbsp;View Feedback</a></li>
          <li><a href="#">
          <span class="glyphicon glyphicon-log-out"></span>
          &nbsp;Logout</a></li>
        </ul>

      </div><!--Ending of side area -->

      <div class="col-sm-10">
        <h1>Delete Post</h1>
        <?php echo SuccessMessage();
              echo Message();
              ?>
<div>
  <?php
    $SearchQueryParameter=$_GET['Delete'];
    $Connection;
    $Query="SELECT * FROM admin_panel WHERE ID='$SearchQueryParameter'";
    $ExecuteQuery=mysqli_query($Connection,$Query);
    while ($DataRows=mysqli_fetch_array($ExecuteQuery)) {
      $TitleToBeUpdated=$DataRows["title"];
      $CategoryToBeUpdated=$DataRows["category"];
      $ImageToBeUpdated=$DataRows["image"];
      $PostToBeUpdated=$DataRows["post"];
    }
      ?>
<form action="DeletePost.php?Delete=<?php echo $SearchQueryParameter; ?>" method="post" enctype="multipart/form-data">
  <fieldset>
  <div class="form-group">
  <label for="Title"><span class="FieldInfo">Title:</span></label>
  <input disabled value="<?php echo $TitleToBeUpdated;?>" class="form-control" type="text" name="Title" id="title" placeholder="Title">
  </div>
  <div class="form-group">
  <span class="FieldInfo">Existing Category:</span>
  <?php echo $CategoryToBeUpdated;?>
  <br>
  <label for="categoryselect"><span class="FieldInfo">Category:</span></label>
  <select disabled class="form-control" id="categoryselect" name="Category">

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
  <span class="FieldInfo">Existing Image:</span>
  <img src="Upload/<?php echo $ImageToBeUpdated;?>" width=170px; height=70px;>
	<br>
  <label for="imageselect"><span class="FieldInfo">Select Image:</span></label>
  <input disabled type="File" class="form-control" name="Image" id="imageselect">
  </div>
  <div class="form-group">
  <label for="postarea"><span class="FieldInfo">Post:</span></label>
  <textarea disabled class="form-control" name="Post" id="postarea">
    <?php echo $PostToBeUpdated ?>
  </textarea>
  </div>

  <br>
  <input class="btn btn-danger btn-block" type="Submit" name="Submit" value="Delete Post">
  </fieldset>
</form>
</div>



      </div><!--ending of main area -->

    </div><!--ending of row-->

  </div><!--ending of container fluid-->

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
