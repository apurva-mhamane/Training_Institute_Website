<?php
$mysqli = new mysqli("localhost","root","","training");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if(isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["course"]) && isset($_POST["message"]))
{	
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$course=$_POST["course"];
$message=$_POST["message"];
$stmt = $mysqli->prepare("INSERT INTO `register`(`name`, `email`, `phone`, `course`, `message`)values (?,?,?,?,?)");
$stmt->bind_param("ssiss",$name,$email,$phone,$course,$message);
$stmt->execute();
echo "<center><h2>THANKYOU FOR REGISTERING <BR> IN SMART GROUP TRAINING INSTITUTE</h2></center>";
}
?>
