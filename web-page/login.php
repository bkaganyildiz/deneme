<?php


$conn = new mysqli('localhost','root','','intellectual');
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 

session_start();
$uName = $_POST['name'];
$pWord = $_POST['pwd'];

$sql = "SELECT userID, username, password FROM users WHERE username='".$uName."' AND password='".$pWord."'";
$result = $conn->query($sql);

if( $result->num_rows == 1 ) {
	echo 'true';
	}
else {
	echo 'false';
}
/*require_once 'config.php';
 
session_start();
$uName = $_POST['name'];
$pWord = $_POST['pwd'];
$qry = "SELECT userID, username, password FROM users WHERE username='".$uName."' AND password='".$pWord."'";
$res = mysql_query($qry);
$num_row = mysql_num_rows($res);
echo $num_row;
//echo "<script type='text/javascript'>alert('$uName');</script>";
if( $num_row == 1 ) {
	echo 'true';
	}
else {
	echo 'false';
}*/
?>