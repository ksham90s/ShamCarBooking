<!DOCTYPE html>
<html>
<head>
<style>
	body{font-family: Arial, Helvetica, sans-serif;}
</style>
	<title>Register form</title>
<?php include "header.php"  ?>
<meta name="viewport" content="width=device-width, initial-scale=1">

<h3>register form</h3>

<style>
form 
{
	margin-top: 100px;
	border: 3px solid #f1f1f1;
}
.container 
{
padding: 20px;
}
input[type=text], input[type=password] 
{
  width: 40%;
  padding: 10px 20px;
  margin: 8px 0;
  display: block;
  box-sizing: border-box;
  border: 3px solid #ccc;
  -webkit-transition: 0.5s;
  transition: 0.5s;
  outline: none;
}
input[type=text]:focus, input[type=password]:focus {
  border: 3px solid #555;
}
</style>
</head>
<body>

<form>
	<label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

	<label for="phone"><b>Phone number</b></label>
    <input type="text" placeholder="Enter phone number" name="phoneno" required>

	<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Username" name="email" required>

	<label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Username" name="address" required>
    
    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="confirmpspsw"><b>Confirm password</b></label>
    <input type="password" placeholder="Enter Password" name="confirmpsw" required>
</form>	


</body>
</html>

</body>
</html>