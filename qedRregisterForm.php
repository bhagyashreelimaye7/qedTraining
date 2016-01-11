<html>
<style type="text/css">
	body{
    font-family: arial; font-size: 80%; line-height: 1.2em; width: 100%; margin: 0; background: #eee;
}
</style>
<body >

	<hr>
	<h2 align=center > Welcome to QED42 Training</h2>
	<hr>
	
	
		
	<form method="post" action="qedRegister.php" >
		<table align=center cellpadding=10 cellspacing=10 bgcolor="#eee">

			<tr>
				<td>FIirst Name:</td>
				<td><input type="text" name="fname"> </td>
			</tr>
			<tr>
				<td>Last Name:</td>
				<td><input type="text" name="lname"> </td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="email" name="email"> </td>
			</tr>
			<tr><td>Role</td>
				<td>
					<select name="role">
					  <option value="1">developer</option>
					  <option value="2">designer</option>
					  <option value="3">architect</option>
					  <option value="4">tester</option>
					  <option value="5">HR</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>
					Password:</td><td>
<input type="password" name="pass1">
				</td>
			</tr>
			<tr><td>
				Confirm Password:
			</td><td>
				<input type="password" name="pass2">
			</td></tr>
			<tr>
				<td colspan="2" align="center"><input type="submit" value ="Register"></td>
			</tr>
			
		</table>
	</form>
</body>
</html>