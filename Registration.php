<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', 'burner037','customers');

// get the post records
$First_Name = $_POST['First_Name'];
$Last_Name = $_POST['Last_Name'];
$Language = $_POST['Language'];
$Business_Field = $_POST['Business_Field'];

// database insert SQL code
$sql = "INSERT INTO `tbl_customers` ("First_Name","Last_Name","Language","Business_Field")
VALUES ('$First_Name', '$Last_Name', '$Language', '$Business_Field')";

// insert in database
$rs = mysqli_query($con, $sql);

if($rs)
{
	echo "Registration complete";
}

?>
<a href="registration.html" rel="nofollow ugc">Add New Record</a>
