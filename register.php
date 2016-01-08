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
<input type="text" name="email"> 
</br>
</br>
<select name="role">
  <option value="developer">developer</option>
  <option value="sdesigner">designer</option>
  <option value="architect">architect</option>
  <option value="tester">tester</option>
  <option value="HR">tHR</option>
</select>
</br>
password:
<input type="password" name="pass1">
</br>
confirm password:
<input type="password" name="pass2">
</br>
<button type="button" > Register </button>


</form>

</body>
</html>