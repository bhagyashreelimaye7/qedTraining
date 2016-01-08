<?php

require("qedConnectDb.php");

$query="create table ".$prefix."_Role(roleid int PRIMARY KEY auto_increment,roleName varchar(30))";
echo"<br>";
$result=mysqli_query($link,$query);
if($result)
{
	echo"done Role";
}
else
	die(mysqli_error());



$query="create table ".$prefix."_Users(id int PRIMARY KEY auto_increment,fname varchar(30),lname varchar(30),email varchar(30),password varchar(32),roleid int,FOREIGN KEY(roleid) references ".$prefix."_Role(roleid))";
echo"<br>";
$result=mysqli_query($link,$query);
if($result)
{
	echo"done Users";
}
else
	die(mysqli_error());

?>
