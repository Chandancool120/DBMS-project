<html>
<head>

<title>adhar</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div>
		<h1><center>ADHAR FORM</center></h1>
	</div>
	<div>
<form action="post.php" method="post">
	<table>
		<tr>
			<td><b>Name:</b> </td>
			<td><input type="text" name="name"></td>
		</tr>

		<tr>
			<td><b>Father Name:</b></td>
			<td><input type="text" name="fname"></td>
		</tr>

		<tr>
			<td><b>SEX:</b></td>
			<td>
				<select name="sex">
				    <option value="MALE">MALE</option>
    				<option value="FEMALE">FEMALE</option>
    				<option value="TRANSGENDER">TRANSGENDER</option>
    			  </select>
			</td>
		</tr>

		<tr>
			<td><b>DOB:</b></td>
			<td><input type="text" name="dob"></td>
		</tr>

		<tr>
			<td><b>DOB_proof:</b></td>
			<td><input type="file" name="dob_proof"></td>
		</tr>

		<tr>
			<td><b>Door no:</b></td>
			<td><input type="text" name="doorno"></td>
		</tr>

		<tr>
			<td><b>Street:</b></td>
			<td><input type="text" name="street"></td>
		</tr>

		<tr>
			<td><b>City:</b></td>
			<td><input type="text" name="city"></td>
		</tr>

		<tr>
			<td><b>Landmark:</b></td>
			<td><input type="text" name="landmark"></td>
		</tr>

		<tr>
			<td><b>Postal Code:</b></td>
			<td><input type="text" name="postalcode"></td>
		</tr>

		<tr>
			<td><b>Address proof:</b></td>
			<td><input type="file" name="add_proof"></td>
		</tr>
	</table>
<br><br>
<input type="submit" value="click here"></input>
</form>
</div>
</body>
</html>
