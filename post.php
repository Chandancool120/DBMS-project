<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "person_details";
$adharno='';
$name=$_POST["name"];
$fname=$_POST["fname"];
$sex=$_POST["sex"];
$dob=$_POST["dob"];
//$dobproof=$_FILES['dob_proof']['tmp_name'];
//$dobproof=file_get_contents($dobproof);
//$dobproof=base64_encode($dobproof);
$dobproof=$_POST["dob_proof"];
$doorno=$_POST["doorno"];
$street=$_POST["street"];
$city=$_POST["city"];
$landmark=$_POST["landmark"];
$postalcode=$_POST["postalcode"];
$addproof=$_POST["add_proof"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO person(adharno,name,fname,sex,dob,dob_proof,doorno,street,city,landmark,postalcode,add_proof) 
VALUES ('$adharno',
		'$name',
		'$fname',
		'$sex',
		'$dob',
		'$dobproof',
		'$doorno',
		'$street',
		'$city',
		'$landmark',
		'$postalcode',
		'addproof'
		 )";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>