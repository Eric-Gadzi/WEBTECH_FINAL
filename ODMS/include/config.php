<?php
define('DB_SERVER','localhost');
define('DB_USER','sean');
define('DB_PASS' ,'xwH)PnjMXFMkH2ed');
define('DB_NAME', 'doctor_appointment');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
