<html>
<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" type="text/css" href="style1.css" />

<body>
<p><img src="image.png" width="100" height="100" align="center"> </p>
<h1 align="center">QED42 Training</h1> 


<?php
	require("qedConnectDb.php");
	require("qedSecurity.php");
	session_start();
	$id=$_SESSION['id'];
	//echo $id;
	$query="select fname from ".$prefix."_Users where id='$id'";
	//echo $query;
	$result=mysqli_query($link,$query);
	$row=mysqli_fetch_row($result);
	//echo $row[0];
?>
	
	<h2 align=right > Hello <?php echo $row[0] ?>&nbsp&nbsp&nbsp&nbsp</h2>
	
	

	

	<?php
        
		echo "<hr><h2 align=center>Employee List</h2><hr>";


		echo"<table align=center border=1 cellpadding=10 cellspacing=0>

				<tr>
					<th><a href='qedHome.php?param=fname'>First Name</a></th>
					<th><a href='qedHome.php?param=lname'>Last Name</a></th>
					<th><a href='qedHome.php?param=email'>Email ID</a></th>
					<th><a href='qedHome.php?param=roleName'>Role</a></th>
				</tr>";
		
		
		//$query="select fname,lname,email, from ".$prefix."_Users ";




/*

		if(isset($_GET['param']))
		{
			$param=$_GET['param'];
			$query="select u.fname,u.lname,u.email,r.roleName from ".$prefix."_Users u, ".$prefix."_Role r where u.roleid=r.roleid order by $param;";
		}
		else
		{
			$query="select u.fname,u.lname,u.email,r.roleName from ".$prefix."_Users u, ".$prefix."_Role r where u.roleid=r.roleid order by u.id;";
		}

*/



		$param="u.id";
		if(isset($_GET['param']))
			$param=$_GET['param'];


		$query="select u.fname,u.lname,u.email,r.roleName from ".$prefix."_Users u, ".$prefix."_Role r where u.roleid=r.roleid order by $param;";
		




		$result=mysqli_query($link,$query);
		
		while($row=mysqli_fetch_row($result))
		{	  
			//echo $row[0];
			
				echo "<tr>";
					echo "<td style='text-align: center;'>$row[0]</td>";
					echo "<td style='text-align: center;'>$row[1]</td>";
					echo "<td style='text-align: center;'>$row[2]</td>";
					echo "<td style='text-align: center;'>$row[3]</td>";
				echo "</tr>";
		}
	echo"</table>";
	
	?>
	<h2 align=center><a href="qedLogout.php">Logout</a></h2>
</body>
</html>