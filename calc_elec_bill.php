<?php
$service_num=$_POST["servicenum"];
$units=$_POST["units"];

$localhost="localhost";
$username="root";
$password="";
$database="dealer_login";
$connect =new mysqli($localhost,$username,$password,$database);

if($connect->connect_error)
{
	die('connect_error'.$connect->connect_error);
}
$month=date('n');
$sql="select * from unit_info where month=$month";
$check=$connect->query($sql);
if(mysqli_num_rows($check))
{
	$row=mysqli_fetch_assoc($check);
	$charge=$row['charge'];
}

if ($units <200 ){
	$total_amt=$units*$charge;
	$total_amt=$total_amt+($total_amt*5/100);
	}
   else	if ($units>=200 && $units<400){
		$total_amt=$units*$charge;
	$total_amt=$total_amt+($total_amt*10/100);
   }
	else if ($units>=400 && $units<600){
	$total_amt=$units*$charge;
	$total_amt=$total_amt+($total_amt*15/100);
	}
	else{
	$total_amt=$units*$charge;
	$total_amt=$total_amt+($total_amt*25/100);
	}
   if ($total_amt  < 25)
	$total_amt =25;

$connect->close();
$connect =new mysqli($localhost,$username,$password,$database);
//$bill_num='';
$status="Not_Paid";
$sql="INSERT INTO Oct(service_num,units,amount,status) VALUES('$service_num','$units','$total_amt','$status')";
//$check=$connect->query($sql);

/*if($check->connect_error)
{
	die('connection error'.$check->connect_error);
}*/

$connect-> close();
   ?>

   <html>
<head>
	<title>customer </title>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	

</head>
<body >
	<div class="container bg-danger">
	<div class="row">
	<div class="col-md-6 col-md-offset-3">

<center>



		<h1> Data Entered Succesfully 
	</h1><br>
	<h3> Do you want to enter again?</h3>
	<form action="dealersubmit.php">
<input type = "submit" class="btn btn-success" value="Yes">
</form>
<form action="bills.php">
<input type = "submit" class="btn btn-danger" value="No">
</form>
</center>
	</div>
	</div>
	</div>

</body>
</html>