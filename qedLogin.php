<?php
	
	require("qedConnectDb.php");
	
	if(isset($_POST['email']) && isset($_POST['pass']))
		{
			$email=$_POST['email'];
			//echo $prn;
			$pass=md5($_POST['pass']);
			
			$query="select id from ".$prefix."_Users where email='$email' AND password='$pass'";
			//echo $query;
			$result=mysqli_query($link,$query);
			//print_r($result);
			$row=mysqli_fetch_row($result);
			if(mysqli_num_rows($result)<1)
				echo "Invalid Credentials";
			else
			{
				session_start();
				$_SESSION['id'] = $row[0];
				header("Location:qedHome.php");
				
			}	
				
			
		}
?>