<html>
<head>
<title>
first form
</title>
</head>
<body>
<form method="POST" action="firstform.php">
  Name <input type="text" name="name" placeholder="Type your name" required><br>
  Email <input type="text" name="email" placeholder="Type your email" required><br>
  Contact <input type="text" name="contact"placeholder="Type your name" required><br>
  City <input type="text" name="city"placeholder="Type your city" required><br>
  Course <input type="text" name="course"placeholder="Type your course name" required><br>
  Interest:<br>
  Gaming <input type="checkbox" ><br>
  Travelling <input type="checkbox"  ><br>
  Reading <input type="checkbox"  ><br>
  Singing <input type="checkbox"  ><br>
  <input type="submit" value="Click to Submit">
</body>
</html>
<?php
$Name=$_POST['name'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$city=$_POST['city'];
$Course=$_POST['Course'];
$Interest=$_POST['interest'];
  echo "Name=$name<br>";
  echo "Email=$email<br>";
  echo "Contact=$contact<br>";
  echo "city=$city<br>";
  echo "Course=$Course<br>";
  echo "Interest=$interest<br>";
 ?> 