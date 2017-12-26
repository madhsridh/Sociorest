<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quiz";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if (!$conn) 
{
    die("Connection failed: ");
}
else
{ 
//echo "connected sucessfully"."<br>";
}

$username = $_POST['u_name'];
//echo "$username";
$sql = "INSERT INTO loginusers (user_name)
VALUES ('$username')";

if ($conn->query($sql) === TRUE) {
   //<button type="submit" name="id" value="value">Submit</button>

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>QuizIt</title>

    <!-- Bootstrap Core CSS -->
    <link href="stylee/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="stylee/css/heroic-features.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <!-- <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> -->
            	    <a class="navbar-brand" href="logout.html">Logout</a>
            	 <div class="topcorner">
            	 	<a class="navbar-brand" href="#"><?php echo $username?></a></div>
            </div>

            <style>
.topcorner{
   position:absolute;
   top:0;
   right:0;            
}
   </style>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div> -->
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Jumbotron Header -->
        <header class="jumbotron hero-spacer">
            <center><h1>QuizApp</h1></center>
            <p align="center">Where knowledge meets fun!</p>
        </header>

        <hr>

        <!-- Title -->
        <div class="row">
            <div class="col-lg-12">
                <h3>Categories:</h3>
            </div>
        </div>
        <!-- /.row -->

        <!-- Page Features -->
        <div class="row text-center">

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="gk_image.png" alt="" width="800" height="500">
                    <div class="caption">
                        <h3>General Knowledge</h3>
                        <p>Do you want to check how much of General Knowledge you know?</p>
                        <p>
                            <a href="gk_page.php" class="btn btn-primary">Try Now!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="politics_image.png" alt="" width="800" height="500">
                    <div class="caption">
                        <h3>Politics</h3>
                        <p>Do you want to check how much of politics you know?</p>
                        <p>
                            <a href="politics_page.php" class="btn btn-primary">Try Now!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="bolly2.png" alt="" width="800" height="500">
                    <div class="caption">
                        <h3>Bollywood</h3>
                        <p>Do you want to check how much of Bollywood you know?</p>
                        <p>
                            <a href="bolly_page.php" class="btn btn-primary">Try Now!</a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <img src="sports_image.jpe" alt="" width="800" height="500">
                    <div class="caption">
                        <h3>Sports</h3>
                        <p>Do you want to check how much of Sports you know?</p>
                        <p>
                            <a href="sports_page.php" class="btn btn-primary">Try Now!</a>
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="stylee/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="stylee/js/bootstrap.min.js"></script>

</body>

</html>
