<?php
session_start();
$localhost="localhost";
$username="root";
$password="";
$database="dealer_login";
$connect =new mysqli($localhost,$username,$password,$database);

if($connect->connect_error)
{
  die('connect_error'.$connect->connect_error);
}


/*$sql="select * from unit_info ";
if($result=$connect->query($sql))
{
	$data=array();
	foreach ($result as $row ) {
		$data[]=$row;
		# code...
	}
}
print json_encode($data);

echo json_encode( array('am1'=>"1234", 'am2'=>"2345", 'am3'=>"4567"));
*/
$servicenum=$_SESSION["service_num"];

$sql="select * from userdetails where service_no =$servicenum";
$result=$connect->query($sql);
$row1=mysqli_fetch_row($result);
$name=$row1[0];

$sql="select * from may where service_num=$servicenum";
$result=$connect->query($sql);
$row1=mysqli_fetch_row($result);
$amount5=$row1[3];
$a[]= $amount5;


$sql="select * from june where service_num=$servicenum";
$result=$connect->query($sql);
$row1=mysqli_fetch_row($result);
$amount4=$row1[3];
$a[]= $amount4;

$sql="select * from july where service_num=$servicenum";
$result=$connect->query($sql);
$row1=mysqli_fetch_row($result);
$amount3=$row1[3];
$a[]= $amount3;

$sql="select * from aug where service_num=$servicenum";
$result=$connect->query($sql);
$row1=mysqli_fetch_row($result);
$amount2=$row1[3];
$a[]= $amount2;


$sql="select * from sept where service_num=$servicenum";
$result=$connect->query($sql);
$row1=mysqli_fetch_row($result);
$amount1=$row1[3];
$a[]= $amount1;


$sql="select * from oct where service_num=$servicenum";
$result=$connect->query($sql);
$row1=mysqli_fetch_row($result);
$amount=$row1[3];
$a[]= $amount;

$_SESSION["arr"]=$a;


?>
<html>
<head>
<style >
.chart-container{
	width: 640px;
	height: auto;
}
</style>

</head>

<body>
<center><h1>Welcome <?php echo $name ?></h1></center>
<center>
<div class="chart-container">
<canvas id="mycanvas">

</canvas>
</div>
</center>




<script type="text/javascript" src="graph/js/Chart.bundle.js"></script>
<script type="text/javascript" src="graph/js/jquery.js"></script>

<script type="text/javascript" src="graph/js/linegraph.js"></script>

</script>


</body>
</html>