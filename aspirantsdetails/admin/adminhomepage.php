<?php 
require '../includes/session.php';
found_correct();
if(!isset($_SESSION['user_id']))
{header('Location:login.php');}
require '../includes/conn.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome </title>
<link rel="stylesheet" href="../css/adminstyle.css" type="text/css" />
<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">
<div id="banner">
<img src="../images/banner.png" width="1050" height="105" /></div>
<div id="nav">
<ul>
<li> <a  href="adminhomepage.php"> Home </a> </li>

<li> <a href="logout.php">log out</a> </li>
</ul>
</div>
<div id="contentarea">
<div id="content">
<?php /*echo $_SESSION['user_id']; 
echo "<br>";*/
 echo "Welcome " .$_SESSION['username']; ?>
  <table width="600" border="1"  bordercolor="#FBFBFB"align="center" id="menu">
    <tr>
      <td width="284" height="137" align="center"><a href="#"><img src="../images/useraccount.png" width="130" height="135"  /></a></td>
      <td width="300" align="center"><a href="checkvoterdetails.php"><img src="../images/registeraspirant.png" width="130"
       height="135" /></a></td>
      </tr>
    <tr>
      <td height="144" align="center"><a href="viewaspirant.php"><img src="../images/viewaspirant.png" width="130" height="135" /></a></td>
      <td align="center"><a href="voteend.php"><img src="../images/viewresult.png" width="130" height="135"  class="img-rounded" /></a></td>
      </tr>
  </table>
  <p> <a href="../logout.php">log out</a></p>
</div>

<div id="footer"> <img src="../images/foota.png" width="1050" height="40" />
</div>
</div>
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/bootstrap-3.3.4.js"></script>
</body>
</html>