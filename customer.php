<html>
<head>
	<title>customer </title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<style type="text/css">
hr{
    border-color: black;
}
	</style>

</head>
<body >
	<div class="container bg-danger">
	<div class="row">
	<div class="col-md-6 col-md-offset-3">

	<div><center><h1>Online Electricity Bill Payment </h1></center></div>
	<hr>
	<div>





   	<center>

   	<form action="customerdisplay.php" class="form-group" method="post">
   		<ul class="errorMessages"></ul>

		<table class="table table-bordered table-striped table-condensed">
			<br>
 	    	<tr>	
    	 		<th><center><b>Service no:</b></center></th>
     			<th><center><input  class="focus" type="text" name="servicenum" required></center></th>
    	 	</tr>

  		</table>
  		<br>
  		
  		<div class="buttons">
  			<button class="btn btn-success">Submit</button>

  		</div>
  		
  			
		</form>
		</center>
	</div>

	</div>
</div >
	</div>
<!--script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script-->

</body>

</html