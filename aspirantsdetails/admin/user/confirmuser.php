<?php 
require '../../includes/session.php';
found_correct();?>
<?php 
require '../../includes/conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Account Confirmation Page</title>
<link rel="stylesheet" href="../../css/style.css" type="text/css" />
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
<div id="content"> 
<?php 
$suname = $_POST['surname'];
$fname =  $_POST['firstname'];
$matricno = $_POST['matric_no'];
$stulevel = $_POST['stlevel'];
$dept = $_POST['dept'];
$uname = $_POST['uname']; 
$pass = $_POST['paswd'];
$pass1 = sha1($pass);
$asde = "insert into userdet values ('','$suname','$fname','$matricno','$stulevel','$dept','$uname','$pass1',NOW())";
$r =   mysqli_query($dbc,$asde) or die(mysqli_error($dbc));
if($r)
{
	echo "<h1> User Account Create Successsful!</h1>";
}
else
{
	echo "Unable to create User Account.";
	}

?>
<br/>
<a  href="viewuseraccount.php">Click Here to go back.</a></div>
<div id="sidebar1">
  <img src="../images/wwe_ass.png" width="371" height="461" /></div>
</div>
<div id="footer"> footer
</div>
</div>
</body>
</html>