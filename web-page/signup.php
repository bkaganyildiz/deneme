<?php


$conn = mysql_connect('localhost','root','');
// Check connection
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

session_start();
$uName = $_POST['username'];
$pWord = $_POST['password'];
$email = $_POST['email'];
$i=0;


$sql="INSERT INTO users ".
       "(username,email, password) ".
       "VALUES ".
       "('$uName','$email','$pWord')";

mysql_select_db('intellectual');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "true";

?>