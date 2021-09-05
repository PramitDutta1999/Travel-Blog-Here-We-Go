<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php Confirm_Login(); ?>
<!DOCTYPE>
<html>
    <head>
        <title>Admin Dashboard</title>
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
        <h1><span class="FieldInfo">Admin Panel</span></h1>
        <ul id="Side_Menu" class="nav nav-pills nav-stacked">
          <li class="active"><a href="dashboard.php">
          <i class="fas fa-align-justify"></i>
          &nbsp;Dashboard</a></li>
          <li><a href="AddNewPost.php">
          <i class="far fa-list-alt"></i>
          &nbsp;Add New Post</a></li>
          <li><a href="Categories.php">
          <i class="fas fa-tags"></i>
          &nbsp;Categories</a></li>
          <li><a href="Admins.php">
          <i class="far fa-user"></i>
          &nbsp;Manage Admins</a></li>
          <li><a href="Comments.php">
          <i class="far fa-comment"></i>
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
      <i class="fas fa-list"></i>
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
          <i class="fas fa-chart-line"></i>
          &nbsp;View Feedback</a></li>
          <li><a href="Logout.php">
          <i class="fas fa-sign-out-alt"></i>
          &nbsp;Logout</a></li>
        </ul>

      </div><!--Ending of side area -->




      <div class="col-sm-10"><!--Main Area-->

        <h1>Admin Dashboard</h1>
                <div><?php echo Message();
                           echo SuccessMessage();
                      ?></div>
<div class="table-responsive">


        <table class="table table-striped table-hover">
          <tr>
            <th>No</th>
            <th>Post Title</th>
            <th>Date & Time</th>
            <th>Author</th>
            <th>Category</th>
            <th>Banner</th>
            <th>Approved By</th>
            <th>Comments</th>
            <th>Action</th>
            <th>Details</th>
          </tr>
<?php
  $Connection;
  $ViewQuery="SELECT * FROM admin_panel WHERE status='ON' ORDER BY id desc";
  $Execute=mysqli_query($Connection,$ViewQuery);
  $SrNo=0;
  while ($DataRows=mysqli_fetch_array($Execute)) {
    $Id=$DataRows["id"];
    $DateTime=$DataRows["datetime"];
    $Title=$DataRows["title"];
    $Category=$DataRows["category"];
    $Admin=$DataRows["author"];
    $Approvedby=$DataRows["approvedby"];
    $Image=$DataRows["image"];
    $Post=$DataRows["post"];
    $SrNo++;
?>
<tr>
  <td><?php echo $SrNo; ?></td>
  <td style="color: #5e5eff;"><?php
  if(strlen($Title)>8){$Title=substr($Title,0,8).'..';}
  echo ($Title); ?></td>
  <td><?php
  if(strlen($DateTime)>8){$DateTime=substr($DateTime,0,8).'..';}
  echo ($DateTime); ?></td>
  <td><?php
  if(strlen($Admin)>6){$Admin=substr($Admin,0,6).'..';}
  echo ($Admin);?></td>
  <td><?php
  if(strlen($Category)>6){$Category=substr($Category,0,6).'..';}
  echo ($Category); ?></td>
  <td><img src="Upload/<?php echo $Image; ?>"width="170px"; height="70px"></td>
  <td><?php
  if(strlen($Approvedby)>13){$Approvedby=substr($Approvedby,0,13).'..';}
  echo ($Approvedby);?></td>
  <td>

<?php
$Connection;
$QueryApproved="SELECT COUNT(*) FROM comments WHERE admin_panel_id='$Id' AND status='ON'";
$ExecuteApproved=mysqli_query($Connection,$QueryApproved);
$RowsApproved=mysqli_fetch_array($ExecuteApproved);
$TotalApproved=array_shift($RowsApproved);
if ($TotalApproved>0){
?>
<span class="label pull-right label-success">
<?php echo $TotalApproved; ?>
</span>
<?php } ?>

<?php
$Connection;
$QueryUnApproved="SELECT COUNT(*) FROM comments WHERE admin_panel_id='$Id' AND status='OFF'";
$ExecuteUnApproved=mysqli_query($Connection,$QueryUnApproved);
$RowsUnApproved=mysqli_fetch_array($ExecuteUnApproved);
$TotalUnApproved=array_shift($RowsUnApproved);
if ($TotalUnApproved>0){
?>
<span class="label pull-left label-danger">
<?php echo $TotalUnApproved; ?>
</span>
<?php } ?>



  </td>
  <td>
      <a href="EditPost.php?Edit=<?php echo $Id;?>">
      <span class="btn btn-warning">Edit</span>
      </a>
      <a href="DisapprovePost.php?id=<?php echo $Id;?>">
      <span class="btn btn-danger">Disapprove</span>
      </a>
  </td>
  <td>
    <a href="FullPost.php?id=<?php echo $Id;?>"  target="_blank">
    <span class="btn btn-primary">Live Preview</span></td>
  </a>
</tr>




<?php } ?>
</table>

</div>








      </div><!--ending of main area -->

    </div><!--ending of row-->

    </div><!--ending of container fluid-->

  <div style="height: 10px; background: #27AAE1;"></div>
    <div id="Footer" >


  <hr><p>Theme By | Pramit Dutta |&copy;2019-2020 --- All right reserved.
  </p>
  <p>
  This site only serves the purpose of herewego.com and they have all the rights. no one is allow to distribute
  copies other then <br>&trade; herewego.com &trade;  Pramit Dutta</p></hr>



</div>
  <div style="height: 10px; background: #27AAE1;"></div>

  	</body>
  </html>
