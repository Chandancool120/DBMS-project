<?php
session_start();

if(isset($_POST['submit']))
{
	$connect = new mysqli('localhost','root','','dealer_login');
    $select = mysqli_select_db($connect,'dealer_login');
	$username=$_POST["username"];
	$password=$_POST["password"];
	global $mysqli;
	$check=" SELECT * FROM dealer_login WHERE username='$username' AND password='$password' ";
	//$check_q = $conn->query($check);
	$check_q=$connect->query($check);
	//$check_q=mysql_query($check);
	
	if(mysqli_num_rows($check_q)==1){
		echo "successfull";
	}
	else
		echo "wrong details" ;

}
else{
echo "no data";
}

?>