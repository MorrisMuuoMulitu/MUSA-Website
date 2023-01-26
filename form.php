<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];


// Database connection
$conn = new mysqli('localhost','root','','musa_contact_responses');
if($conn->connect_error){
  die('Connection Failed : '.$conn->connect_error);
}else{
  $stmt = $conn->prepare("insert into website_messages(name,email,subject,message)values(?,?,?,?)");
  $stmt->bind_param("ssss",$name,$email,$subject,$message);
  $stmt->execute();
  echo "message sent to MUSA successfully...";
  $stmt->close();
  $conn->close();
}
?>
