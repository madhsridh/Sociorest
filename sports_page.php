<html>  
<head lang="en">  
    <meta charset="UTF-8">  
    <!link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css"> <!--css file link in bootstrap folder-->  
    <link href="css/bootstrap.css" rel="stylesheet"/>
	<link href="css/custom.css" rel="stylesheet"/>
	<title>Quizapp</title>  
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
      <a class="navbar-brand" href="logout.html">Logout</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    
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
    <h1 align="center">If Sports is your cup of tea, this is where you need to be!</h1>  
  
<div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
  
  
    
  

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
//$i=rand(1,10);
//echo "Adventure sports! <br> <br>";

$sql= "SELECT question, choice_1, choice_2, choice_3, choice_4, answer FROM sports";

$result = mysqli_query($conn, $sql)or die("Error: ".mysqli_error($conn));
while($row=mysqli_fetch_array($result))//while look to fetch the result and store in a array $row.  
        {  
           $question=$row[0];           
		   $choice1=$row[1];  
            $choice2=$row[2];  
            $choice3=$row[3];  
            $choice4=$row[4];
			$answer=$row[5];
           			
  
  
  
        ?>  
    
	
 <label>Question: <?php echo $question ?></label></br>
<input type="radio" name="Owner"  value="<?php $choice1; ?>"> <?php echo $choice1; ?>
</input>    
<br>
<input type="radio" name="Owner"  value="<?php $choice2; ?>"> <?php echo $choice2; ?>
</input> 
<br>
<input type="radio" name="Owner"  value="<?php $choice3; ?>"> <?php echo $choice3; ?>
</input>
<br> 
<input type="radio" name="Owner"  value="<?php $choice4; ?>"> <?php echo $choice4; ?>
</input> 
<br>
<button type="button" class="btn btn-danger"onclick="alert('<?php echo $answer; ?>')">Answer
</button>
<br>
		<?php } ?>   
	   
	   
	   
</div>	   
</div>
	</div>
	     

</body>  
</html>  

