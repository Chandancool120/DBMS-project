
<html>
<head>
	<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
	</head>
	<body>
		<h1><center>Dealer Details</center></h1>
	</body>
	</html>
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
		echo "<div class='container'>";
		echo "<div class='row'>";
		echo "<table class='col-md-12 table-bordered table-striped table-condensed cf'>";
		echo "<tr>";
		    echo "<td ><b>Name</b></td>";
		    echo "<td><b>Username</b></td>";
		    echo "<td><b>Area</b></td>";
		    echo "<td><b>Ph_num</b></td>";
		    echo "<td><b>Postal</b></td>";
		    //echo "<td><a href='delete.php ?id=".$username" ' >Delete row</a> </td>";
		    echo "<td><b>Option</b></td>";

		    echo "</tr>";
		while ($row1 = mysqli_fetch_row($check1_q))
		 {
		 	$name=$row1[2];
			$username=$row1[0];
			$area=$row1[3];
			$phno=$row1[4];
		    $postal=$row1[5];
		    echo "<tr>";
		    echo "<td>".$name."</td>";
		    echo "<td>".$username."</td>";
		    echo "<td>".$area."</td>";
		    echo "<td>".$phno."</td>";
		    echo "<td>".$postal."</td>";
		    //echo "<td><a href='delete.php ?id=".$username" ' >Delete row</a> </td>";
		    echo "<td><a href='delete.php?id=".$username."'>DELETE</a></td>";

		    echo "</tr>";
         }
         echo "</table>";
         echo "</div>";
         echo "</div>";

 
 	}
	else
		echo "wrong details" ;


}
?>
<!--DOCTYPE html
<html>
<head>
<style>
table, td {
    border: 1px solid black;
}
</style>
</head>
<body>

<p>Click the button to add a new row at the first position of the table and then add cells and content.</p>

<table id="myTable">
  <tr>
    <td>Row1 cell1</td>
    <td>Row1 cell2</td>
  </tr>
  <tr>
    <td>Row2 cell1</td>
    <td>Row2 cell2</td>
  </tr>
  <tr>
    <td>Row3 cell1</td>
    <td>Row3 cell2</td>
  </tr>
</table>
<br>

<button onclick="myFunction()">Try it</button>

<script>
function myFunction(var name,var username) {
    var table = document.getElementById("myTable");
    var row = table.insertRow(0);
    var cell1 = row.insertCell(0);
    var cell2 = row.insertCell(1);
    cell1.innerHTML = name;
    cell2.innerHTML = "fucker";
}
</script>

</body>
</html>

