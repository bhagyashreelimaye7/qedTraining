<?php
require("qeddbinfo.php");
$link=mysqli_connect($host,$user,$pass);
if(!$link)
{
	die(mysqli_connect_error());
}
else
	//echo"successfully connected";

if(!mysqli_select_db($link,$dbname))
{
	die(mysqli_connect_error());
}
else
	//echo"successfully connected";
?>