<?php
session_start();

if(isset($_POST['submit']))
{
	$connect = new mysqli('localhost','root','','dealer_login');
    $select = mysqli_select_db($connect,'dealer_login');
	$username=$_POST["username"];
	$password=$_POST["password"];
	global $mysqli;
	$check=" SELECT name FROM dealer_login WHERE username='$username' AND password='$password' ";
	//$check_q = $conn->query($check);
	$check_q=$connect->query($check);
	//$check_q=mysql_query($check);
	
	if(mysqli_num_rows($check_q)==1){
		$row=mysqli_fetch_assoc($check_q);
		$name=$row['name'];
		$_SESSION["operatorname"]=$name;
		header("Location:dealersubmit.php");
	}
	else
		echo "wrong details" ;

}
?>