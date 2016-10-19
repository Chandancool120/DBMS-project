<?php
$servicenum=$_POST["servicenum"];

$localhost="localhost";
$username="root";
$password="";
$database="dealer_login";
$connect =new mysqli($localhost,$username,$password,$database);

if($connect->connect_error)
{
  die('connect_error'.$connect->connect_error);
}
$sql="create view view1 as select * from userdetails where service_no=$servicenum" ;
//$sql="select * from userdetails where service_no=$servicenum" ;
$check=$connect->query($sql);
$sql1="select view1.name,view1.dno,view1.street,view1.city,view1.postal_code,oct.bill_num,oct.units,oct.amount from oct join view1 on view1.service_no=oct.service_num" ;
$check1=$connect->query($sql1);
if(mysqli_num_rows($check1))
{
  $row=mysqli_fetch_assoc($check1);
  $name=$row['name'];
  $dno=$row['dno'];
  $street=$row['street'];
  $city=$row['city'];
  $postal_code=$row['postal_code'];
  $bill_num=$row['bill_num'];
  $units=$row['units'];
  $amount=$row['amount'];
  echo $name.$amount ;
}

?>