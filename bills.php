<html>
<head>
	<title>e-bills</title>
<!--link rel="stylesheet" type="text/css" href="style1.css"-->
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>



  <nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        
        <li role="presentation"><a href="adminlogin.php">Admin</a></li>
  <li role="presentation"><a href="trial.php">dealer</a></li>
  <li role="presentation"><a href="customer.php">Customer</a></li>
        
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
  
</ul>
	<div>

  	

		<h1><center>E-BILLS</center></h1>
	</div>
	<div class="button-container">
  		<form action="dealerloginsignup.php">
   		   <input class="button" type="Submit" value="dealer">

  		</form>

  		<form action="customer.php">
    	   <input class="button" type="Submit" value="customer">
  		</form>
  		<form action="adminlogin.php">
    	   <input class="button" type="Submit" value="Admin login">
  		</form>
	</div>

  <script src="bootstrap/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
