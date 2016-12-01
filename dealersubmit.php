<?php
session_start();
$operatorname=$_SESSION["operatorname"];
?>
<html>
<head>
<title>dealer</title>
<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<style type="text/css">
hr{
    border-color: black;
}
</style>
</head>
<body>

    <div class="container bg-danger" >
    <div class="row">
    <div class="col-md-6 col-md-offset-3">
<div>
	<h1><center>Welcome <?php echo $operatorname; ?></center></h1>
    <form action="dealerloginsignup.php">
<input type="submit" align="right" class="btn btn-danger" value="Logout" >
    </form>
    
    <hr>

</div>
<div>
	<center>
        <form action="calc_elec_bill.php" method="post">
        	<table class="table table-bordered table-condensed" border="1">
        		<tr>
        			<th><center><b>Service no:</b></center></th>
        			<th><input type="text" name="servicenum" required></th>
        		</tr>
        		<tr>
        			<th><center><b>Units:</b></center></th>
        			<th><input type="text" name="units" required ></th>
        		</tr>
        	</table>
       			
       			
       			<input class="btn btn-success" type="submit" value="Submit">
        </form>	
	</center>
</div>

    </div>
</div >
    </div>
</body>
</html>

