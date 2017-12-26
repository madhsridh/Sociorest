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
//$event= $_POST['EventName'];
//$date=$_POST['inputDate'];
//$time=$_POST['Time'];
//$location=$_POST['Location'];
//$details=$_POST['EventDetails'];

$sql = "INSERT INTO event ";

if ($conn->query($sql) === TRUE) {
    echo "Event created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$event1="karate";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='sports' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="shuttle";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='sports' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="tennis";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='sports' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="football";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='sports' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="cricket";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='sports' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="baseball";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='sports' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="basketball";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='sports' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="kabadi";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='sports' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="volleyball";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='sports' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="rock climbing";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='adventure' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="sky diving";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='adventure' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="scuba diving";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='adventure' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="paragliding";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='adventure' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="bungy jumping";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='adventure' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="dance";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='dance' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="bharatanatyam";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='dance' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="salsa";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='sports' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="khatak";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='dance' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="kuchipudi";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='dance' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="ballet";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='dance' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="music";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='music' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="jazz";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='music' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="carnatic music";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='music' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="hindustani music";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='music' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="guitar";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='music' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="violin";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='music' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="piano";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='music' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}


$event1="programming";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='programming' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="C";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='programming' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="C++";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='programming' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="Java";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='programming' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="python";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='programming' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}
$event1="C#";
if ((strcmp($event,$event1)) == 0)
{
	$sql="UPDATE event SET interest_id='programming' WHERE event_name='$event'";
    if ($conn->query($sql) === TRUE) {
   // echo "Record updated successfully";
   header("Location:event_reg_complete.html");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
}


$conn->close();
 ?> 