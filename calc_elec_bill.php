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
echo $charge;
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
if($connect->query($sql)===TRUE)
 echo "data entered succesfully";
else echo "date is not entered";
$connect-> close();
   ?>