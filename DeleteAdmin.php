<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php Confirm_Login(); ?>
<?php
if(isset($_GET['id'])){
    $IdFromURL=$_GET["id"];
    $Query="DELETE FROM registration WHERE ID='$IdFromURL'";
    $Execute=mysqli_query($Connection,$Query);
    if($Execute){
    $_SESSION["SuccessMessage"]="Admin Deleted Successfully";
    Redirect_to("Admins.php");
    }else{
    $_SESSION["ErrorMessage"]="Something Went Wrong.Try Again!";
    Redirect_to("Admins.php");

    }

}

 ?>
