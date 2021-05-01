<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php Confirm_Login(); ?>
<?php

if(isset($_POST["Submit"])){
  $Category=mysqli_real_escape_string($Connection,$_POST["Category"]);
  date_default_timezone_set("Asia/Dhaka");
  $CurrentTime=time();
  //$DateTime=strftime("%Y-%m-%d %H:%M:%S",$CurrentTime);
  $DateTime=strftime("%B-%d-%Y %H:%M:%S",$CurrentTime);
  $DateTime;
  $Admin=$_SESSION["Username"];
  if(empty($Category)){
    $_SESSION["ErrorMessage"]= "All Fields must be filled out";
    Redirect_to("Categories.php");
  }elseif(strlen($Category)>99){
    $_SESSION["ErrorMessage"]= "Too Long Name for Category";
    Redirect_to("Categories.php");
  }else{
    global $Connection;
    $Query="INSERT INTO category(datetime,name,creatorname)
    VALUES('$DateTime','$Category','$Admin')";
    $Execute=mysqli_query($Connection,$Query);
    if($Execute){
      $_SESSION["SuccessMessage"]= "Category Added Successfully";
      Redirect_to("Categories.php");
    }else{
      $_SESSION["ErrorMessage"]= "Category failed to add";
      Redirect_to("Categories.php");
    }
  }


}

?>
<!DOCTYPE>
<html>
    <head>
        <title>Manage Categories</title>
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
        <h1><span class="FieldInfo">Admin Panel</span></h1>
        <ul id="Side_Menu" class="nav nav-pills nav-stacked">
          <li><a href="dashboard.php">
          <span class="glyphicon glyphicon-th"></span>
          &nbsp;Dashboard</a></li>
          <li><a href="AddNewPost.php">
          <span class="glyphicon glyphicon-list-alt"></span>
          &nbsp;Add New Post</a></li>
          <li class="active"><a href="Categories.php">
          <span class="glyphicon glyphicon-tags"></span>
          &nbsp;Categories</a></li>
          <li><a href="Admins.php">
          <span class="glyphicon glyphicon-user"></span>
          &nbsp;Manage Admins</a></li>
          <li><a href="Comments.php">
          <span class="glyphicon glyphicon-comment"></span>
          &nbsp;Comments

          <?php
          $Connection;
          $QueryTotal="SELECT COUNT(*) FROM comments WHERE status='OFF'";
          $ExecuteTotal=mysqli_query($Connection,$QueryTotal);
          $RowsTotal=mysqli_fetch_array($ExecuteTotal);
          $Total=array_shift($RowsTotal);
          if ($Total>0){
          ?>
          <span class="label pull-right label-warning">
          <?php echo $Total; ?>
          </span>
          <?php } ?>

        </a>
      </li>
      <li><a href="pendingpost.php">
      <span class="glyphicon glyphicon-list"></span>
      &nbsp;Pending Post
      <?php
      $Connection;
      $QueryTotal="SELECT COUNT(*) FROM admin_panel WHERE status='OFF'";
      $ExecuteTotal=mysqli_query($Connection,$QueryTotal);
      $RowsTotal=mysqli_fetch_array($ExecuteTotal);
      $Total=array_shift($RowsTotal);
      if ($Total>0){
      ?>
      <span class="label pull-right label-warning">
      <?php echo $Total; ?>
      </span>
      <?php } ?>
    </a></li>
          <li><a href="view_feedback.php">
          <span class="glyphicon glyphicon-stats"></span>
          &nbsp;View Feedback</a></li>
          <li><a href="Logout.php">
          <span class="glyphicon glyphicon-log-out"></span>
          &nbsp;Logout</a></li>
        </ul>

      </div><!--Ending of side area -->

      <div class="col-sm-10">
        <h1>Manage Categories</h1>
        <?php echo Message();
              echo SuccessMessage();
              ?>
<div>
<form action="Categories.php" method="post">
  <fieldset>
  <div class="form-group">
  <label for="categoryname"><span class="FieldInfo">Name:</span></label>
  <input class="form-control" type="text" name="Category" id="categoryname" placeholder="Name">
  </div>
  <br>
  <input class="btn btn-success btn-block" type="Submit" name="Submit" value="Add New Category">
  </fieldset>
</form>
</div>

<div class="table-responsive">
  <table class="table table-striped table-hover">
    <tr>
      <th>Sr No. </th>
      <th>Date Time </th>
      <th>Category Name </th>
      <th>Creator Name </th>
      <th>Action</th>


    </tr>
<?php
global $Connection;
$ViewQuery="SELECT * FROM category ORDER BY datetime desc";
$Execute=mysqli_query($Connection,$ViewQuery);
$SrNo=0;
while($DataRows=mysqli_fetch_array($Execute)){
        $Id=$DataRows["id"];
        $DateTime=$DataRows["datetime"];
        $CategoryName=$DataRows["name"];
        $CreatorName=$DataRows["creatorname"];
        $SrNo++;

?>
<tr>
<td><?php echo $SrNo; ?></td>
<td><?php echo $DateTime; ?></td>
<td><?php echo $CategoryName; ?></td>
<td><?php echo $CreatorName; ?></td>
<td><a href="DeleteCategory.php?id=<?php echo $Id; ?>">
<span class="btn btn-danger">Delete</span>
</a></td>
</tr>

<?php } ?>

  </table>
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
