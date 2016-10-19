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
	echo '<script>
	if(confirm("succe"))
		window.location.href="dealerloginsignup.php";
	</script>';
    //header('Location:dealerloginsignup.php');
    
    
} else {
	echo "Username already exists.Select different username";
	}
}
}

?>

<html>
<center>
<head>
<link rel="stylesheet" type="text/css" href="style1.css">
<title>Dealer-Signup</title>

</head>
	<body>
	<div>
		<h1><center>Dealer-Signup</center></h1>
	</div>
		<div>
		<form action="dealersignup.php" method="post">
		<table>
			<tr>
				<th><b>Name:</b></th>
				<th><input type="text" name="name"></th>
			</tr>

			<tr>
				<th>Username:</th>
				<th><input type="text" name="username"></th>
			</tr>

			<tr>
				<th>Area:</th>
				<th><input type="text" name="area"><br></th>
			</tr>

			<tr>
				<th>Postal code:</th>
				<th><input type="text" name="postal"><br></th>
			</tr>

			<tr>
				<th>Phone Number:</th>
				<th><input type="text" name="phno"></th>
			</tr>

			<tr>
				<th>Password:</th>
				<th><input type="text" name="password"></th>
			</tr>

			<tr>
				<th>Re-enter Password:</th>
				<th><input type="text" name="password2"></th>
			</tr>
		</table>
		
		<input class="button" type="Submit" name="submit">
		</form>

			</center>
		</div>
	</body>
</html>