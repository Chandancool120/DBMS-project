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
/*if ($units <200 )
	$charge = 1.20;
   else	if ($units>=200 && $units<400)
		$charge = 1.60;
	else if ($units>=400 && $units<600)
			$charge = 2.00;
		else
			$charge = 2.50;
   $amt = $units*$charge;
   if ($amt>300)
   $total_amt = $amt+$amt*15/100.0;
   if ($total_amt  < 25)
	$total_amt =25;

echo "$total_amt and $servicenum";*/

$bill_num='';
$amount;
$sql="INSERT INTO Oct(bill_num,service_num,units,amount) VALUES('$bill_num','$servicenum','$units','$amount')";
$check=$connect->query($sql);

if($check->connect_error)
{
	die('connection error'.$check->connect_error)
}
if($connect->query($sql)===TRUE)
 echo "data entered succesfully";
else echo "date is not entered";

/** if unit <200 then charge are @ Rs. 1.20 per unit
   if unit >=200 but <400 then charge are @ Rs. 1.60 per unit
   if unit >=400 but <600 then charge are @ Rs. 2.00 per unit
   if unit >=600 then charge are @ Rs. 2.50 per unit
   If bill exceed Rs. 300 then a surcharge of 15% will be charged
   and minimum bill should be of Rs. 25/-. **/
   ?>