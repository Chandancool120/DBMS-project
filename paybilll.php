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
$var=date('n');
$var0=$var-1;
$sql="select * from unit_info where month=$var";
$sql0="select * from unit_info where month=$var0";
$check0=$connect->query($sql0);
if($check=$connect->query($sql))
{
	//echo "hey this is running";
	$row=mysqli_fetch_assoc($check);
	$row0=mysqli_fetch_assoc($check0);
	$month=$row['monname'];
	$unitcharge=$row['charge'];
	$month0=$row0['monname'];
	$unitcharge0=$row0['charge'];
	//echo "$month ,$unitcharge";
}

$sql="create view view1 as select * from userdetails where service_no=$servicenum" ;
//$sql="select * from userdetails where service_no=$servicenum" ;
$check=$connect->query($sql);
$sql1="select view1.name,view1.dno,view1.street,view1.city,view1.postal_code,oct.bill_num,oct.units,oct.amount,oct.status from oct join view1 on view1.service_no=oct.service_num" ;
$sql2="select view1.name,view1.dno,view1.street,view1.city,view1.postal_code,sept.bill_num,sept.units,sept.amount,sept.status from sept join view1 on view1.service_no=sept.service_num";
$check1=$connect->query($sql1);
$check2=$connect->query($sql2);
if(mysqli_num_rows($check1))
{
  $row=mysqli_fetch_assoc($check1);
  $row2=mysqli_fetch_assoc($check2);
  $name=$row['name'];
  $dno=$row['dno'];
  $street=$row['street'];
  $city=$row['city'];
  $postal_code=$row['postal_code'];
  $bill_num=$row['bill_num'];
  $units=$row['units'];
  $amount=$row['amount'];
  $status=$row['status'];
  $bill_num0=$row2['bill_num'];
  $units0=$row2['units'];
  $amount0=$row2['amount'];
  $status0=$row2['status'];
  //echo $name.$amount ;
}
if($status0==='Not_Paid')
$total_amount=$amount+$amount0;
else
$total_amount=$amount;
$sql3="drop view view1";
$check3=$connect->query($sql3);
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
	
	<title>Customer Invoice</title>
	
	<link rel='stylesheet' type='text/css' href='css/style.css' />
	<link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
	<script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
	<script type='text/javascript' src='js/example.js'></script>

</head>

<body>

	<div id="page-wrap">

		<p id="header">INVOICE</p>
		
		<div id="identity">
		
            <p id="address"><?php echo "<b>$name</b>"?><br>
			<?php echo $dno?><br>
			<?php echo $street?><br>
			<?php echo $city?><br>
			<?php echo $postal_code?><br>
			
			</p>		
		<div id="customer">
            <table id="meta">
                <tr>
                    <td class="meta-head">Invoice #</td>
                    <td>000123</td>
                </tr>
                <tr>

                    <td class="meta-head">Date</td>
                    <td><textarea id="date"><?php echo date('F-j-Y')?></textarea></td>
                </tr>
                <tr>
                    <td class="meta-head">Amount Due</td>
                    <td><div class="due"><?php echo "<b>$total_amount</b>"?></div></td>
                </tr>

            </table>
		
		</div>
		
		<table id="items">
		
		  <tr>
		      <th>Bill Number</th>
		      <th>Month</th>

		      <th>Number of units</th>
		      <th>Unit cost</th>
		      <th>amount</th>
		      <th>status</th>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><?php echo $bill_num?><br></td>
		      <td class="description"><?php echo $month?><br></td>
		      <td><?php echo $units?><br></td>
		      <td><?php echo $unitcharge?><br></td>
		      <td><span class="price"><?php echo $amount?></span></td>
		      <td><span class="price"><?php echo $status?></span></td>
		  </tr>
		  
		  <tr class="item-row">
		      <td class="item-name"><?php echo $bill_num0?><br></td>
		      <td class="description"><?php echo $month0?><br></td>
		      <td><?php echo $units0?><br></td>
		      <td><?php echo $unitcharge0?><br></td>
		      <td><span class="price"><?php echo $amount0?></span></td>
		      <td><span class="price"><?php echo $status0?></span></td>
		  </tr>
		  
		 
		  
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="2" class="total-line">Subtotal</td>
		      <td class="total-value"><div id="subtotal"></div></td>
		  </tr>
		  <tr>

		      <td colspan="3" class="blank"> </td>
		      <td colspan="2" class="total-line">Total</td>
		      <td class="total-value"><div id="total"><?php echo $total_amount?></div></td>
		  </tr>
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="2" class="total-line">Amount Paid</td>

		      <td class="total-value">0.00</td>
		  </tr>
		  <tr>
		      <td colspan="3" class="blank"> </td>
		      <td colspan="2" class="total-line balance">Balance Due</td>
		      <td class="total-value balance"><div class="due"><?php echo "<b>$total_amount</b>"?></div></td>
		  </tr>
		
		</table>
		
		<div id="terms">
		  <h5>Terms</h5>
		  <textarea>Amount is calculated not only on the basis of unit charge but also on units consumed.</textarea>
		</div>
	
	</div>
	<div>
		<form action="genpdf.php">
			<input type="submit" value="Generate pdf ">
		</form>
		<form action="paybill.php">
			<input type="submit" value="Pay Bill! ">
		</form>
	</div>
		
</body>

</html>