<?php
$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$course=$_POST["course"];
$message=$_POST["message"];
$con = ("localhost","id17603564_apurva","Admin_Admin2","id17603564_register");
$stmt = $con->prepare("insert into register (name, email, phone, course, message)values (?, ?, ?, ?, ?)");
$stmt->bind_param("ssiss", $name, $email $phone, $course, $message);
$stmt->execute();
echo "<center><h2>THANKYOU FOR REGISTERING <BR> IN SMART GROUP TRAINING INSTITUTE</h2></center>";
$stmt->close();
?>