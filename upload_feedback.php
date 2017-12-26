<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sociorests";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
$event_name= $_POST['EventName'];
$recommend=$_POST['recommendation'];
$rate=$_POST['rate'];

$sql = "INSERT INTO feedback (event_name,recommend,rate) VALUES ('$event_name' '$rate', '$recommend', '$rate')";
//$sql1 = "UPDATE user SET interest_id = '$interest_name' WHERE user.interest_id=";
if ($conn->query($sql) === TRUE) {
    //echo "Event created successfully";
	header("Location:feedback_done.html");
    exit;
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
 ?> 