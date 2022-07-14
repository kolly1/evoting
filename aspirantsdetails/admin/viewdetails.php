<?php //require '../includes/conn.php';
require '../includes/session.php';
found_correct();?>
<?php
require '../includes/conn.php';

$id = $_GET['post_id'];

$details = "select * from aspirantdt where post_id = '$id'";
 $result = mysqli_query($dbc,$details) or die(mysqli_error($dbc))  ;
 //$dse = mysqli_result($dt);
 $row= mysqli_fetch_assoc($result);
 $id = $row['post_id'];
$surname = $row['stuname'];
$firstname = $row['firstname'];
$othername = $row['ortname'];
$matric = $row['matnum'];
$level=  $row['level'];
$aspiringpost = $row['postasp'];
$pic = $row['passp'];
$dept =  $row['deptm'];
//echo  '<label><a href="editaspirantdetails.php?id='.$row['post_id'].'">EDIT</a></label>';
//echo  '<label><a href="deleteaspirantdetails.php?id='.$row['post_id'].'">DELETE</a></label>';

//echo '</table>';
//echo '<img  src='.$row['passp'].'/>' ;
//echo '<p><a href='editaspirantdetails.php?post_id=' .$row['post_id']. ''>' Edit '</p>'; 

//echo "</p>";
	
	 
  
 //else {echo "<font size='4' color='red'><center> No Aspirant. </center></font>";}
 
		

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Welcome to Online Voting System</title>
<script type="text/javascript" src="../includes/jquery-1.7.1.js"></script>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="container">
<div id="banner"><img src="../images/banner.png" width="1050" height="105" /></div>
<div id="nav">
<ul>
<li> <a href="../index.php"> Home </a> </li>
<li><a href="../register/register.php"> Register </a></li>
<li><a  href="logout.php"> Log Out </a> </li>

</ul>
</div>
<div id="contentarea">
<div id="content">
<br />
<br /><br />
  <table class="table table-striped table-bordered table-hover">
    <tr>
      <td width="152">Surname:</td>
      <td width="432"><?php echo $surname;?></td>
    </tr>
    <tr>
      <td>First Name:</td>
      <td><?php echo $firstname;?></td>
    </tr>
    <tr>
      <td>Other Name:</td>
      <td><?php echo $othername;?></td>
    </tr>
    <tr>
      <td>Matric. Number:</td>
      <td><?php echo $matric;?></td>
    </tr>
     <tr>
      <td>Department:</td>
      <td><?php echo $dept;?></td>
    </tr>
    <tr>
      <td>Level:</td>
      <td><?php echo $level;?></td>
    </tr>
    
    <tr>
      <td>Post Aspiring For:</td>
      <td><?php echo $aspiringpost;?></td>
    </tr>
    
      
    </table>
  
</div>
<div id="sidebar1"> <img src="../aspirantpic/<?php echo $pic;?>"  height="200" width="140" />
 </div>
<div id="footer"><img src="../images/foota.png" width="1050" height="70" /></div>
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