<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form  method="post" action="qedRegister.php">
Firstname:
<input type="text" name="fname"> 
</br>
</br>
Lastname:
<input type="text" name="lname"> 
</br>
</br>
email:
<input type="email" name="email"> 
</br>
</br>
<select name="role">
  <option value="1">developer</option>
  <option value="2">designer</option>
  <option value="3">architect</option>
  <option value="4">tester</option>
  <option value="5">HR</option>
</select>
</br>
password:
<input type="password" name="pass1">
</br>
confirm password:
<input type="password" name="pass2">
</br>
<input type="button" value="Register" > 


</form>

</body>
</html>