<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php Confirm_Signin(); ?>
<!DOCTYPE>
<html>
    <head>
        <title>Welcome</title>
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
        <h1><span class="FieldInfo">User Panel</span></h1>
        <ul id="Side_Menu" class="nav nav-pills nav-stacked">
          <li class="active"><a href="welcome.php">
          <span class="glyphicon glyphicon-th"></span>
          &nbsp;Welcome</a></li>
          <li><a href="HowToPost.php">
          <span class="glyphicon glyphicon-list"></span>
          &nbsp;How to Post</a></li>
          <li><a href="userpost.php">
          <span class="glyphicon glyphicon-list-alt"></span>
          &nbsp;Add New Post</a></li>
          <li><a href="signout.php">
          <span class="glyphicon glyphicon-log-out"></span>
          &nbsp;Signout</a></li>
        </ul>

      </div><!--Ending of side area -->




      <div class="col-sm-10" style="background-color: 	#FAEBD7"><!--Main Area-->

          <p style="color: #681D1D;font-size:50px;">WELCOME To Here We Go</p>
        <p style="color: #681D1D;font-size:20px;">Join and Make Yourself An Explorer
                <div><?php echo Message();
                           echo SuccessMessage();
                      ?></div>

<img src="images/welcome.jpg" width="1120" height="600" style="margin-left: -15px">







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
