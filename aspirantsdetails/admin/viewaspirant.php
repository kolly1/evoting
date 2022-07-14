<?php 
require '../includes/session.php';
found_correct();?>
<?php
/*if (!isset($_SESSION['user_id']))
{header('Location:login.php');}*/

require '../includes/conn.php';
require '../includes/aspirant_func.php';
?>

<html>
<head>
<title>View Registered Aspirant</title>
<script type="text/javascript" src="../includes/jquery-1.7.1.js"></script>
<link rel="stylesheet" href="../css/aspirantstyle.css" type="text/css" />
<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="container">
<div id="banner">
  <img src="../images/banner.png" width="1050" height="105"></div>
<div id="nav">
<ul>
<li> <a href="adminhomepage.php"> Home </a> </li>
<li><a href="logout.php"> Log Out </a> </li>
</ul>
</div>
<div id="contentarea">
<div id="content"> 
<p id="presid">
<?php 
 aspirant_president();
 ?>
 </p>
<p id="vpresid">
 <?php
 aspirant_vp();  
 ?>
 </p>
 <p id="treasurer">
 <?php
 
  aspirant_treasurer();
 ?>
 </p>
 <p id="gensec">
 <?php
 aspirant_gensec();  
 ?>
 </p>
  <p id="socdir">
 <?php
  aspirant_vpfemale();
 ?>
 </p>
 
   <p id="socwel">
 <?php
   aspirant_finsec();
 ?>
 </p>
   <p id="socdir">
 <?php
   aspirant_pro();
 ?>
 </p>
 <p id="src">
 <?php
   aspirant_ags();
 ?>
 </p>
 </div>

 <p id="src">
 <?php
   aspirant_social();
 ?>
 </p>
 </div>

</div>
<div id="footer"><img src="../images/foota.png" width="1050" height="40">
</div>
</div>
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/bootstrap-3.3.4.js"></script>
<script>
$(document).ready(function() {	
$('table').css('padding-left','8px');
$('table tr:odd').css('background-color','#F0F0F0');
$('table  tr:last').css({'background-color':'#fcfc','color':'#63C600','font-family':'Arial'});
$('content').remove('height');
});
</script>
</body>
</html>