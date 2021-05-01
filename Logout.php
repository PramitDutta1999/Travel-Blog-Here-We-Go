<?php require_once("Include/Sessions.php"); ?>
<?php require_once("Include/Functions.php"); ?>
<?php
$_SESSION["UserId"]=null;
session_destroy();
Redirect_to("Login.php");
?>
