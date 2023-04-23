<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
// Replace the variables with your RDS information
$host = 'AWS RDS Endpoint LINK';
$port = 3306;
$user = 'admin';
$password = 'password';
$database = 'database-NAME';

// Create the connection
$con = mysqli_connect($host, $user, $password, $database, $port);

// Check the connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully";
}

// get the post records

$txtName = $_POST['txtName'];
$txtEmail = $_POST['txtEmail'];
$txtPhone = $_POST['txtPhone'];
$txtMessage = $_POST['txtMessage'];

// database insert SQL code
$sql = "INSERT INTO `tbl_contact` (`Id`, `fldName`, `fldEmail`, `fldPhone`, `fldMessage`) VALUES ('0', '$txtName', '$txtEmail', '$txtPhone', '$txtMessage')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>