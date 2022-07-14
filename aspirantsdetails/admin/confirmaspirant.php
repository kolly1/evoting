<?php //require '../includes/conn.php';
require '../includes/session.php';
found_correct();?>
<?php 
require '../includes/conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Confirmation Page</title>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
</head>

<body>
<div id="container">
<div id="banner"><img src="../images/banner.png" width="1050" height="105" /></div>
<div id="nav">
  <ul>
<li> <a href="../index.php"> Home </a> </li>
<li><a href="../register/register.php"> Register </a></li>
<li><a href="logout.php"> Log Out </a> </li>
<li><a href="#"> Contact </a> </li>
</ul>
</div>
<div id="contentarea">
<div id="content"> 
<?php 
if (isset($_POST['submitted']))
{

$suname = $_POST['stuname'];
$fname =  $_POST['firstname'];
$odaname =  $_POST['ortname'];
$matname =  $_POST['matnum'];
$departm =  $_POST['deptm'];
$level =  $_POST['level'];
$aspiring = $_POST['postasp'];
if (isset($_FILES['passp']) && $_FILES['passp']['size'] > 0)
{
	$allowed = array ('image/pjpeg',
'image/jpeg', 'image/jpeg',
'image/JPG', 'image/X-PNG',
'image/PNG', 'image/png',
'image/x-png');
$type = $_FILES['passp']['type'];
if (in_array($type, $allowed)) 
{
	
	$storagename = $_FILES['passp']['tmp_name'];
	$destinatn = "../aspirantpic/";
	move_uploaded_file($storagename,$destinatn.$_FILES['passp']['name']);
	$passq = $_FILES['passp']['name'];
$asde = "insert into aspirantdt values('','$suname','$fname','$odaname','$matname','$departm','$level','$aspiring','$passq')";
$result = mysqli_query($dbc,$asde) or mysqli_query($dbc);
if($result)
{
	echo "<h1> Aspirant Registration Complete!</h1>";
}
else
{
	echo "Aspirant is yet to be registered.";
	}

}

}
	
}
else
{echo "Details not Submitted";}
?>
<br/>
<a href="../login.php">Click Here to go back.</a></div>
<div id="sidebar1"><img src="../images/votepic2.jpg" width="350" height="350" /></div>
</div>
<div id="footer"> footer
</div>
</div>
</body>
</html>