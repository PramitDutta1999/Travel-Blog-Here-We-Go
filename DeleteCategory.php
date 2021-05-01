<?php require_once("Include/DB.php"); ?>
<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php Confirm_Login(); ?>
<?php
if(isset($_GET['id'])){
    $IdFromURL=$_GET["id"];
    $Query="DELETE FROM category WHERE ID='$IdFromURL'";
    $Execute=mysqli_query($Connection,$Query);
    if($Execute){
    $_SESSION["SuccessMessage"]="Category Deleted Successfully";
    Redirect_to("Categories.php");
    }else{
    $_SESSION["ErrorMessage"]="Something Went Wrong.Try Again!";
    Redirect_to("Categories.php");

    }

}

 ?>
