<?php
$servername="localhost";
$username="fred";
$passord="zap";
$dbname="student";

$conn=mysqli_connect($servername,$username,$passord,$dbname);
if(isset($conn))
{
	echo "OK\n";
}
else
{
	echo "failed".mysqli_connect_error();
}
?>