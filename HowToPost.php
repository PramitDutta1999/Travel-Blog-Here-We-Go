<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php Confirm_Signin(); ?>
<!DOCTYPE>
<html>
    <head>
        <title>Start Posting</title>
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
      div.c {
        font-size: 150%;
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
          <li class="active"><a href="HowToPost.php">
          <i class="fas fa-chalkboard-teacher"></i>
          &nbsp;How to Post</a></li>
          <li><a href="userpost.php">
          <i class="far fa-list-alt"></i>
          &nbsp;Add New Post</a></li>
          <li><a href="signout.php">
          <i class="fas fa-sign-out-alt"></i>
          &nbsp;Signout</a></li>
        </ul>

      </div><!--Ending of side area -->




      <div class="col-sm-10"><!--Main Area-->

        <h1>How To Post</h1>
                <div><?php echo Message();
                           echo SuccessMessage();
                      ?></div>
<div class="c">
<p>1.In this blog website you can write your own travel blog.
  You can choose a image as your cover photo.If you want to use more
  image follow the below mentioned rule:<br>
  <?php $Tag=htmlentities('<img class="img-responsive" src="Your Image URL"/>');?>
  Use <?php echo $Tag ;?></p>
    <br>
  <P> 2.For using a header use
    <?php $Tag=htmlentities('<h1>Your heading</h1>');
    echo $Tag; ?><br>There are 6 types of heading from h1 to h6.
    The tag size are:<br>
<h1>This is h1 heading</h1>
<h2>This is h2 heading</h2>
<h3>This is h3 heading</h3>
<h4>This is h4 heading</h4>
<h5>This is h5 heading</h5>
<h6>This is h6 heading</h6></p>
<br>
<p>3.For line break use  <?php $Tag=htmlentities('<br>');
  echo $Tag; ?>tag</p><br>
  <p>4.For an unordered list use  <?php $Tag=htmlentities('<ul><li>1st item</li><li>2nd item</li><li>3rd item</li></ul>');
    echo $Tag; ?><br>
    For an ordered list use  <?php $Tag=htmlentities('<ol><li>1st item</li><li>2nd item</li><li>3rd item</li></ol>');
      echo $Tag; ?></p><br>
  <p>&nbsp;&nbsp;&nbsp;&nbsp;For more html tag and styling visit <a href="https://www.w3schools.com/",target="_blank"> this Website</a>
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
