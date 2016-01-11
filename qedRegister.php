<?php
	require("qedConnectDb.php");
	if(isset($_POST['fname']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$pass1=$_POST['pass1'];
		$pass2=$_POST['pass2'];
		$role=$_POST['role'];

		//echo $fname,$lname,$email,$pass1,$pass2,$role;
		
	}	
	
	if(isset($fname) && isset($lname) && isset($email) && isset($pass1) && isset($pass2) && isset($role)) 	
	{
	
		//Blank Validations
		if($fname=="" || $lname=="" || $email=="" ||$pass1=="" || $pass2=="" || $role=="")
		{
			
			echo "<script type='text/javascript'>alert('Fill ALL Fields');</script>";
	
		}
		
		//Passwords Match
		else if($pass1!=$pass2)
		{
			
			echo "<script type='text/javascript'>alert('Passwords Dont Match');</script>";
		}	 

		else
		{
	
			//echo $role;
	
			$query="insert into ".$prefix."_Users (fname,lname,email,password,roleid) values ('$fname','$lname','$email','".md5($pass1)."',$role)";
			$result=mysqli_query($link,$query);
			if(!$result)
				die(mysqli_error($link));
			else
				header("Location:qedLoginForm.php");
			
		}
		
	}
?>