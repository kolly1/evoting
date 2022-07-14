<?php 
/**$hostm = "localhost";
$user = "root";
$pdord = ""; 
DEFINE('DB_USER', 'root');
DEFINE('DB_PASS', '');
DEFINE('DB_HOST', 'localhost');
DEFINE('DB_NAME', 'hmanat');
$connnect = mysqli_connect(DB_HOST, DB_USER, DB_PASS) OR die('Unable to connect to database:' .mysqli_connect_error());
$dbc = mysqli_select_db($connnect, DB_NAME);
if(!$dbc)
{
	echo 'Unable to select database';
	
} */
?>
<?php
$dbc = mysqli_connect('localhost','root','','ocovote') OR die ('Could not connect to MySQL:' .mysqli_error($dbc) );
mysqli_select_db($dbc,'ocovote')  OR die ('Could not select db: ' .mysqli_error($dbc) );
?>