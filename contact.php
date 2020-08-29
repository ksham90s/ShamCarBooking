<!DOCTYPE html>
<html>
<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/contact.css" rel="stylesheet">
<?php include "header.php" ?>


<h3>Contact Us</h3>
<br>
<br>
<br>
</head>
<body>

  

<div class="container">
  <form action="/action_page.php">
    <label for="fname">Name</label>
<br>

   <input type="text" name="name"placeholder="Your name..">
<br>
    <label for="lname">Email</label>
<br>
    <input type="text" name="email" placeholder="Your email address..">
<br>
    <label for="lname">Phone</label>
<br>
    <input type="text" name="phonenno" placeholder="Your Phone Number">
<br>
    <label for="subject">Message</label>
<br>
    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>
<br>
    <input type="submit" value="Send">
  </form>
</div>


</body>
</html>