<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php Confirm_Login(); ?>
<?php
if(isset($_GET['id'])){
    $IdFromURL=$_GET["id"];
    $Query="UPDATE comments SET status='OFF' WHERE ID='$IdFromURL'";
    $Execute=mysqli_query($Connection,$Query);
    if($Execute){
    $_SESSION["SuccessMessage"]="Comment Dis-Approved Successfully";
    Redirect_to("Comments.php");
    }else{
    $_SESSION["ErrorMessage"]="Something Went Wrong.Try Again!";
    Redirect_to("Comments.php");

    }

}

 ?>
