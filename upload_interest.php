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
$interest_name= $_POST['InterestName'];
$fascination=$_POST['Fascination'];

$sql = "INSERT INTO interests (interest_id,interest_name,fascination)
 VALUES ('1($interest_name)', '$interest_name', '$fascination')";
//$sql1 = "UPDATE interests SET interest_id = '$interest_name'";

if ($conn->query($sql) === TRUE) {
    //echo "Profile edited successfully";
	header("Location:edit_prof_done.html");
	exit;
} else {
    echo "Error: " . $sql1 . "<br>" . $conn->error;
}

$conn->close();
 ?> 