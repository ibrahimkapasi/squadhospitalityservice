<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "squadservice";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if ($conn) {
    // echo "Connection OK";
}
else
{
    echo "DB Not Connected";
}
?>
