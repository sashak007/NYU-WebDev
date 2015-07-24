<?php

$username = "ndykes";
$password = "password";

if($_POST["username"] == $username && $_POST["password"] == $password){
	header("Location: home.php");
	setcookie("user", $username);
}else{
	header("Location: index.php?loginfailed=1");
}

die();
?>
