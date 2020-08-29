<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>

<html lang="en-US">
<link href="css/home.css" rel="stylesheet">
<?php include "header.php"  ?>	



<style >

</style>

</head>

<body>
<h1 style="text-align: center;">Welcome to Sham Car Booking</h1>
<h2 style="text-align: center;">book your ride</h2>

<form>
	<input class="textbox" type="text" name="search" placeholder="Search car..">
	<br>
	<button class="button" type="submit">Search</button>	
</form>
<?php include "footer.php"  ?>
</body>

</html>