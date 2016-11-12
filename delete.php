<?php
$delete=$_GET['id'];
	
	$connect = new mysqli('localhost','root','','dealer_login');
    $select = mysqli_select_db($connect,'dealer_login');
    $sql="delete from dealer_login where username='$delete' ";
    if($connect->query($sql)===TRUE){
    	echo "deleted successfully";
    }
	echo $delete;
	echo "hello";
?>
    
