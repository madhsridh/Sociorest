<html>
<head>
<title>Sociorests</title>
<link href="css/bootstrap.css" rel="stylesheet"/>
<link href="css/custom.css" rel="stylesheet" />
</head>
<body>

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
      <ul class="nav navbar-nav">
        <li><a href="index.html">Log Out</a></li>
      </ul>
      <form class="navbar-form navbar-right" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
      </form>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>	

<div class="container">
  <h2>Find Events!!</h2>
  <button id="myButton" class="btn btn-create events btn-lg">Adventure sports!</button>
  <script type="text/javascript">
    document.getElementById("myButton").onclick = function () {
        location.href = "http://localhost/front/adventure.php";
    };
</script>
  <button id="myButton1" class="btn btn-find events btn-lg">Dance!</button>
  <script type="text/javascript">
    document.getElementById("myButton1").onclick = function () {
        location.href = "http://localhost/front/dance.php";
    };
</script>
  <button id="myButton3" class="btn btn-edit profile btn-lg">Music!</button>
  <script type="text/javascript">
    document.getElementById("myButton3").onclick = function () {
        location.href = "http://localhost/front/music.php";
    };
</script>
  <button type="button" class="btn btn-sign out btn-lg">Signout</button> 
           
  <img src="collage.jpg" class="img-thumbnail" alt="Cinque Terre" width="504" height="236"> 
  

</div>

</body>
</html>
