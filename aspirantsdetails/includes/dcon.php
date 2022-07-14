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
	
	OR die ('Could not connect to MySQL:' .mysql_error($dbc) )
	OR die ('Could not select db: ' .mysql_error($dbc) )
	
} */
?>
<?php
$dbc = mysql_connect('localhost','root','','ocovote') ;
mysql_select_db('ocovote')  ;
?>