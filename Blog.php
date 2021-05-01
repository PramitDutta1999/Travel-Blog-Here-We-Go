<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>


<!DOCTYPE>
<html>
<head>
  <title>Blog</title>
  <link rel="icon" href="images/logo.png" type="image/x-icon">
  <link rel="stylesheet"href="css/bootstrap.min.css">
  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet"href="css/blog.css">
  <link rel="stylesheet"href="css/footer.css">

</head>
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
          <li><a href="home.php">Home</a></li>
          <li class="active"><a href="Blog.php?Page=0">Blog</a></li>
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
<div class="container"><!--container-->
  <div class="blog-header">
  <h1>The Travel Blog of Here We Go</h1>
  <p class="lead">Travel to Explore</p>
  </div>
  <div class="row"><!--row-->
    <div class="col-sm-7"><!--main blog area-->
      <?php
        global $Connection;
        if(isset($_GET["SearchButton"])){
          ///Query When Search Button is Active
          $Search=$_GET["Search"];
          $ViewQuery="SELECT * FROM admin_panel
          WHERE datetime LIKE '%$Search%' OR title LIKE '%$Search%'
          OR category LIKE '%$Search%' OR author LIKE '%$Search%' OR post LIKE '%$Search%' AND status='ON'";
        }elseif(isset($_GET["Category"])){
          //Query When Category is active in the URL bar
          $Category=$_GET["Category"];
          $ViewQuery="SELECT * FROM admin_panel  WHERE category='$Category' AND status='ON' ORDER BY id desc";
          }elseif(isset($_GET["Page"])){
            ///Query when Pagination is active i.e Blog.php?Page=1
          $Page=$_GET["Page"];
          if($Page<1){
            $ShowPostFrom=0;
          }
          else{
            $ShowPostFrom=($Page*5)-5;
          }


          $ViewQuery="SELECT * FROM admin_panel WHERE status='ON' ORDER BY id desc LIMIT $ShowPostFrom,5";

        }else{
          //default query
          $ViewQuery="SELECT * FROM admin_panel WHERE status='ON' ORDER BY id desc LIMIT 0,5";
        }
        $Execute=mysqli_query($Connection,$ViewQuery);
        while($DataRows=mysqli_fetch_array($Execute)){
              $PostId=$DataRows["id"];
              $DateTime=$DataRows["datetime"];
              $Title=$DataRows["title"];
              $Category=$DataRows["category"];
              $Admin=$DataRows["author"];
              $Image=$DataRows["image"];
              $Post=$DataRows["post"];

      ?>

      <div class="blogpost thumbnail">
  			<img class="img-responsive img-rounded"src="Upload/<?php echo $Image;  ?>" >
  		<div class="caption">
  			<h1 id="heading"> <?php echo htmlentities($Title); ?></h1>
        <p class="description">Category:<?php echo htmlentities($Category); ?>&nbsp Published on:<?php echo htmlentities($DateTime); ?>
          <?php
          global $Connection;
          $QueryApproved="SELECT COUNT(*) FROM comments WHERE admin_panel_id='$PostId' AND status='ON'";
          $ExecuteApproved=mysqli_query($Connection,$QueryApproved);
          $RowsApproved=mysqli_fetch_array($ExecuteApproved);
          $TotalApproved=array_shift($RowsApproved);
          ?>
          <span class="badge pull-right">
          Comments:&nbsp<?php echo $TotalApproved; ?>
          </span>
        </p>
        <p class="Post"><?php
        if(strlen($Post)>150){$Post=substr($Post,0,150).'...';}

        echo ($Post); ?></p>
</div>
<a href="FullPost.php?id=<?php echo$PostId; ?>"><span class="btn btn-info">
  Read More &rsaquo;&rsaquo;
</span></a>
</div>
    <?php } ?>

    <nav>
      <ul class="pagination pull-left pagination-lg">
        <!--Creating Backward Button -->
<?php
	if(isset($Page))
  {
  if($Page>1){
    ?>
    <li><a href="Blog.php?Page=<?php echo $Page-1; ?>"> &laquo</a></li>
<?php
}
}
?>
<?php
global $Connection;
$QueryPagination="SELECT COUNT(*) FROM admin_panel";
$ExecutePagination=mysqli_query($Connection,$QueryPagination);
$RowPagination=mysqli_fetch_array($ExecutePagination);
$TotalPosts=array_shift($RowPagination);
//echo $TotalPosts;
$PostPagination=$TotalPosts/5;
$PostPagination=ceil($PostPagination);
//echo $PostPerPage;
if(isset($Page)){
for($i=1;$i<=$PostPagination;$i++){
  if($i==$Page){
		?>
		<li class="active"><a href="Blog.php?Page=<?php echo $i; ?>"><?php echo $i; ?></a></li>

    <?php
		}else{ ?>
		<li><a href="Blog.php?Page=<?php echo $i; ?>"><?php echo $i; ?></a></li>
		<?php
		}
}
}
		 ?>
<!--Creating Forward Button -->
<?php
if(isset($Page))
{
    if($Page+1<=$PostPagination){
?>
<li><a href="Blog.php?Page=<?php echo $Page+1; ?>"> &raquo; </a></li>
    <?php        }
} ?>
</ul>
</nav>

       </div><!--main blog area ending-->

       <div class="col-sm-offset-1 col-sm-4"><!--side area-->
  <div class="panel panel-primary">
    <div class="panel-heading">
      <h2 class="panel-title">Categories</h2>
        </div>
      <div class="panel-body">
      <?php
      global $Connection;
      $ViewQuery="SELECT * FROM category ORDER BY id desc";
      $Execute=mysqli_query($Connection,$ViewQuery);
      while($DataRows=mysqli_fetch_array($Execute)){
            $Id=$DataRows["id"];
            $Category=$DataRows["name"];
            $DateTime=$DataRows["datetime"];
      ?>
      <a href="Blog.php?Category=<?php echo $Category; ?>">
      <span id="heading"><?php echo $Category."<br>"; ?></span>
    </a>
    <?php } ?>
      </div>
      <div class="panel-footer"></div>
      </div>
      <div class="panel panel-primary">
        <div class="panel-heading">
          <h2 class="panel-title">Recent Post</h2>
        </div>
        <div class="panel-body background">
<?php
  global $Connection;
  $ViewQuery="SELECT * FROM admin_panel  ORDER BY  id desc LIMIT 0,5";
  $Execute=mysqli_query($Connection,$ViewQuery);
  while($DataRows=mysqli_fetch_array($Execute)){
        $Id=$DataRows["id"];
        $Title=$DataRows["title"];
        $DateTime=$DataRows["datetime"];
        $Image=$DataRows["image"];
        if(strlen($DateTime)>12){$DateTime=substr($DateTime,0,12);}
 ?>

 <div>
<img class="pull-left" style="margin-top: 10px; margin-left: 0px;"  src="Upload/<?php echo htmlentities($Image); ?>" width=120; height=60;>
    <a href="FullPost.php?id=<?php echo $Id;?>">
     <p id="heading" style="margin-left: 130px; padding-top: 10px;"><?php echo htmlentities($Title); ?></p>
     </a>
     <p class="description" style="margin-left: 130px;"><?php echo htmlentities($DateTime);?></p>
	<hr>
</div>

<?php } ?>
        </div>
        <div class="panel-footer"></div>
        </div>
          </div><!--Side area ending-->




  </div><!--row ending-->



</div><!--container ending-->
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
