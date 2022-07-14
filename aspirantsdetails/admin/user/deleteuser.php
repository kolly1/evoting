<?php 
require '../../includes/session.php';
found_correct();?>
<?php require_once("../../includes/conn.php");
  $user_id = $_GET['user_id'];
  
  ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome </title>
<link rel="stylesheet" href="../../css/adminstyle.css" type="text/css" />
</head>

<body>
<div id="container">
<div id="banner">
Banner
</div>
<div id="nav">
<ul>
<li><a href="../adminhomepage.php"> Home
<li> <a  href="viewuseraccount.php">User Account</a> </li>
</ul>
</div>
<div id="contentarea">
<div id="content"><?php /*require_once("../../includes/conn.php");
  $user_id = $_GET['user_id'];*/
  echo $user_id;
$query1 = "DELETE FROM userdet WHERE user_id =$user_id LIMIT 1 ";
$result = mysqli_query($dbc,$query1) or die(mysqli_error($dbc));

if (mysqli_affected_rows($dbc) == 1)
{
//echo "User Account has been Delete ";
header( 'Location:viewuseraccount.php');
}
else
{
echo "Delete Failed"; 
}?></div>

<div id="footer"> footer
</div>
</div>
</body>
</html>