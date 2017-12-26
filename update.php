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

$sql="UPDATE event SET interest_id='adventure' WHERE event_name='rock climbing'";
$sq2="UPDATE event SET interest_id='adventure' WHERE event_name='scuba diving'";
$sq3="UPDATE event SET interest_id='adventure' WHERE event_name='sky diving'";
$sq4="UPDATE event SET interest_id='dance' WHERE event_name='dance'";
$sq5="UPDATE event SET interest_id='dance' WHERE event_name='salsa'";
$sq5="UPDATE event SET interest_id='music' WHERE event_name='jazz'";




if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
if ($conn->query($sq2) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
if ($conn->query($sq3) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
if ($conn->query($sq4) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
if ($conn->query($sq5) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

?>


