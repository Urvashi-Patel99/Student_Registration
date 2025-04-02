<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
  $Name = $_POST['Name'];
  $Email = $_POST['Email'];
  $Age = $_POST['Age'];
  $Course = $_POST['Course'];

  echo "<h1>Registration Successfully</h1>";
 echo "<p><b>Name:</b>$Name</p>";
 echo "<p><b>Name:</b>$Email</p>";
 echo "<p><b>Name:</b>$Age</p>";
 echo "<p><b>Name:</b>$Course</p>";
 
}
 
?>