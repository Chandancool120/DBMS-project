<?php
session_start();

if(isset($_POST['submit']))
{
	$connect = new mysqli('localhost','root','','dealer_login');
    $select = mysqli_select_db($connect,'dealer_login');
	$username=$_POST["username"];
	$password=$_POST["password"];
	global $mysqli;
	$check=" SELECT * FROM admin_login WHERE username='$username' AND password='$password' ";
	//$check_q = $conn->query($check);
	$check_q=$connect->query($check);
	//$check_q=mysql_query($check);
	
	if(mysqli_num_rows($check_q)==1){
		$check1=" SELECT * FROM dealer_login ";
	//$check_q = $conn->query($check);
		$check1_q=$connect->query($check1);
		$num=mysqli_num_rows($check1_q);
		echo $num;
		while ($row1 = mysqli_fetch_row($check1_q))
		 {
		 	$name=$row1[0];
			$username=$row1[1];
			$area=$row1[2];
			$phno=$row1[3];
		    $postal=$row1[4];
        	echo $row1[0];
         }

 
 	}
	else
		echo "wrong details" ;

}
?>