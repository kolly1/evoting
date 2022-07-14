<?php 
require '../includes/session.php';
found_correct();?>
<?php 
require '../includes/conn.php';
require '../includes/result_func.php';?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Election Confirmation Page</title>
<link rel="stylesheet" href="../css/mystyle2.css" type="text/css" />
<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">
<div id="banner">
<img src="../images/banner.png" width="1050" height="100" /></div>
 <div id="nav"><ul>
 <li><a href="../admin/adminhomepage.php"> Home</a> </li>
 <li><a href="../admin/logout.php"> Log Out </a> </li>
 </ul> 
 </div>
<div id="contentarea">
<div id="content">
<div id="heading">
Result of Election for the Post of Vice President (Female)</div>
<div id="result2">
  <?php vpfem(); ?>
</div>
<div id="headin">
Result of Election for the Post of Assistant General Secretary
</div>
<div id="result3">
  <?php assgensec(); ?>
  
</div>
<div id="heading4">
Result of Election for the Post of President</div>
<div id="result4">
  <p>
    <?php president(); 
    ?>
    </p>
    <p><a href="../admin/adminhomepage.php"> Click Here to go back </a></p>
</div>

</div>
</div>
<div id="footer"><img src="../images/foota.png" width="1050" height="40" /></div>
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/bootstrap-3.3.4.js"></script>
</body>
</html>