<?php 
require '../../includes/session.php';
found_correct();?>
<?php require '../../includes/conn.php'; ?>
<html>
<head>
<title>View User Acccount</title>
<script type="text/javascript" src="../../includes/jquery-1.7.1.js"></script>
<link rel="stylesheet" href="../../css/aspirantstyle.css" type="text/css" />
</head>

<body>
<div id="container">
<div id="banner">
<?php require '../../includes/header2.php' ; ?>
</div>
<div id="nav">
<ul>
<li> <a href="../adminhomepage.php"> Home </a> </li>
<li><a  href="useraccount.php"> Create User Account </a></li>
<li><a href=""../logout.php""> Log Out </a> </li>
</ul>
</div>
<div id="contentarea">
<div id="content"> 
<p id="presid">
<?php 
 echo "<p class='heding'><font size='5' color='#ddd'>People in-charge of Election.</font>";
 
$dr = "select * from userdet ";
 $dtu = mysqli_query($dbc,$dr) or mysqli_error($dbc);
 //$numa = mysqli_num_rows($dtu);
 
echo '<table  id="aspiring" width="960">';
echo '<tr width ="900">';
//echo '<td width ="40"> S/N </td>';
echo '<td width ="150"> Surname </td>';
echo ' <td width = "130"> Firstname </td>';
echo '<td width = "120"> Matric. No </td>';
echo '<td width = "60"> Level </td>';
echo '<td width = "100">Dept </td>';
echo '<td width = "100"> Username </td>';
echo '</tr>';	 
 while($row = mysqli_fetch_array($dtu) )
 {
	 	$user_id = $row['user_id'];
echo '<tr width = "960">';
//echo '<td width = "40">' .$row['post_id']. '</td>';
echo '<td width = "150">' .$row['surname']. '</a></td>';
echo '<td width = "130">' .$row['firstname']. '</td>';
echo '<td width = "120">' .$row['matric_no']. '</td>';
echo '<td width = "60">' . $row['stlevel'] . '</td>';
echo '<td width = "90">' . $row['dept'] . '</td>';
echo '<td width = "140">' .$row['uname'] . '</td>';
echo '<td width="70"><a href="edituser.php?user_id=' .$row['user_id'].'"> Edit </a></td>';
echo '<td width="70"><a href="deleteuser.php?user_id=' .$row['user_id'].'"> Delete </a></td>';
echo '</tr>';

 
	 }
	 
echo '</table>'; 
 ?>
 </p>

 </div>

</div>
<div id="footer"> footer
</div>
</div>
<script>
$(document).ready(function() {	
$('table').css('padding-left','8px');
$('table tr').css('background-color','#fff');
$('table  tr:last').css({'background-color':'#4f009d','color':'#fff','font-family':'Arial'});
$('content').remove('height');
});
</script>
</body>
</html>