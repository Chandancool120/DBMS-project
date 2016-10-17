<?php
if(isset($_POST['submit']))
{
	$username=$_POST["username"];
	$area=$_POST["area"];
	$postal=$_POST["postal"];
	$phno=$_POST["phno"];
	$password=$_POST["password"];
	$password2=$_POST["password2"];
	$name=$_POST["name"];
	if($password!=$password2){
		echo "<script type='text/javascript'>alert('passwords did not match!');</script>";
	}
	else{
		$connect = new mysqli('localhost','root','','dealer_login');
    $select = mysqli_select_db($connect,'dealer_login');
    $sql = "INSERT INTO dealer_login(username,password,name,area,phone_no,postal_code) 
	VALUES ('$username',
		'$password',
		'$name',
		'$area',
		'$phno',
		'$postal'
		 )";
if ($connect->query($sql) === TRUE) {
    echo "New record created successfully";
    <form action="dealer.php">
   		   
  		</form>
} else {
	echo "error";
	}
}
}

?>

<html>
<center>
<head>
SIGNUP
</head>
	<body>
		<div>
		<form action="dealersignup.php" method="post">
		Name:<input type="text" name="name">
		Username:<input type="text" name="username">
		Area:<input type="text" name="area">
		Postal code:<input type="text" name="postal">
		Phone Number:<input type="text" name="phno">
		Password:<input type="text" name="password">
		Re-enter Password:<input type="text" name="password2">
		<input type="Submit" name="submit">
		</form>

			</center>
		</div>
	</body>
</html>