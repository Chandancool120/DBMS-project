<html>
<head>

<title>adhar</title>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
	<div>
		<h1><center>PAN FORM</center></h1>
	</div>
	<div>
<form action="panpost.php" method="post">
	<table>
		<tr>
			<td><b>Name:</b> </td>
			<td><input type="text" name="name"></td>
		</tr>

		<tr>
			<td><b>My photo</b></td>
			<td><input type="file" name="photo_proof"></td>
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
			<td><b>Adhar no:</b></td>
			<td><input type="text" name ="adharno"></td>
		</tr>

	</table>
<br><br>
<input type="submit" value="click here"></input>
</form>
</div>
</body>
</html>
