<?php
$delete=$_GET['id'];
	
	$connect = new mysqli('localhost','root','','dealer_login');
    $select = mysqli_select_db($connect,'dealer_login');
    $sql="delete from dealer_login where username='$delete' ";
    if ($connect->query($sql) === TRUE) {
	echo '<script>
	if(confirm("Dealer Removed Succesfully "))
		window.location.href="adminlogin.php";
	</script>';
    //header('Location:dealerloginsignup.php');
    
    
} 
	
?>
    
