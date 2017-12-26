<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <!link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->  
    <link href="css/bootstrap.css" rel="stylesheet"/>
	<link href="css/custom.css" rel="stylesheet"/>
	<title>Sociorests</title>  
</head>  
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.html">Sociorests</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
      </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>	

<style>  
    .login-panel {  
        margin-top: 150px;  
    }  
    .table {  
        margin-top: 50px;  
  
    }  
  
</style>  
  
<body>  
<div class="container">
   <div class="jumbotron">
  
<div class="table-scrol">  
    <h1 align="center">Do you like sports? These are the events you shouldn't miss out!</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    <table class="table table-bordered table-hover table-striped" style="table-layout: fixed">  
        <thead>  
  
        <tr>  
  
            <th>Event</th>  
            <th>Date</th>  
            <th>Time</th>  
            <th>Location</th>  
			<th>Event Details</th>
            <th>Would you like to attend?</th>  
        </tr>  
        </thead>  
  

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
$interest1="sports";
//echo "Adventure sports! <br> <br>";
$sql= "SELECT event_name, date, time, location, event_details FROM event where interest_id='$interest1'";

$result = mysqli_query($conn, $sql)or die("Error: ".mysqli_error($conn));

while($row=mysqli_fetch_array($result))//while look to fetch the result and store in a array $row.  
        {  
            $event=$row[0];  
            $date=$row[1];  
            $time=$row[2];  
            $location=$row[3];
            $details=$row[4];			
  
  
  
        ?>  
    
        <tr>  
<!--here showing results in the table -->  
            <td><?php echo $event;  ?></td>  
            <td><?php echo $date;  ?></td>  
            <td><?php echo $time;  ?></td>  
            <td><?php echo $location;  ?></td>
            <td><?php echo $details; ?></td>			
            <td><a href="attend_page.html?"><button class="btn btn-danger">Attend</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
        </tr>  
  
        <?php } ?>  
  
    </table>  
        </div>  
</div>  
</div>
</div>
  
  
</body>  
  
</html>  

