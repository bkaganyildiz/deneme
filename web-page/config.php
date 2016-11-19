<?php

$con = mysqli_connect('localhost','root','','intellectual') or die(mysql_error());

if (!$con) {
    echo "Unable to connect to DB: " . mysql_error();
    exit;
}
?>