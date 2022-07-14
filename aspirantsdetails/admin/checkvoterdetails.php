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
<title>Check Voter Details </title>
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
<p>&nbsp;  </p>
<p><?php if (isset($msg)) {
	echo '<div class="alert alert-warning alert-dismissable">';
	echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		echo '<font color="red" size="+1">'. $msg.'</font>';
		echo '</div>';
	
	//echo "<font size ='4' color ='red'>" .$msg; 
//echo "</font>";
} ?>


<?php

if (isset($_POST['checkvoter']))
{
	$user = mysqli_real_escape_string($dbc, $_POST['mnumber']);
	}
	

	if ((!empty($user)) )
{
//query db
$query = "SELECT * FROM voterss WHERE  matrnum ='$user'       ";
$result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
$num = mysqli_num_rows($result);
if ($num == 1) 
{
	$row = mysqli_fetch_assoc($result);
	
	$sname = $row['srname'];
    $fname = $row['ftname'];
    $oname = $row['ortname'];
    $matric = $row['matrnum'];
    $level = $row['level'];
	
    //echo $name;
    echo "<strong> Voter's Details </strong>";
    echo '<table class="table table-striped table-bordered table-hover" width="300">';
    echo ' <tr>';
    echo ' <td ><strong>Surname:</strong></td>';
    echo '<td>';
    echo  $sname ;
    echo '</td>';
   echo '</tr>';
   echo' <tr>';
      echo '<td ><strong> First Name: </strong></td>';
      echo '<td>';
      echo  $fname ;
      echo '</td>';
     echo '</tr>';
    
    echo' <tr>';
    echo '<td ><strong> Other Name: </strong></td>';
    echo '<td>';
    echo  $oname ;
    echo '</td>';
   echo '</tr>';

    echo '<tr>';
    echo '<td><strong>Matric. Number:</strong></td>';
    echo '<td>';
    echo  $matric ;
    echo '</td>';
   echo '</tr>';

    echo '<tr>';
      echo '<td><strong>Level:</strong></td>';
      echo '<td>';
      echo  $level ;
      echo '</td>';
     echo '</tr>';
    
      
    echo '</table>';
	
}
	else 
	{  //echo $pass1;
        $msg = "Invalid matric number";
        echo '<div class="alert alert-warning alert-dismissable">';
	echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		echo '<font color="red" size="+1">'.'Invalid matric number'.'</font>';
        echo '</div>';
		}
}
/**
else
{	echo '<div class="alert alert-warning alert-dismissable">';
	echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		echo '<font color="red" size="+1">'. 'Enter matric number'.'</font>';
        echo '</div>';
    
}
*/
?>
</p>
<p>
<?php //if (isset($errormsg)) echo $errormsg; ?>
</p>
<legend> Check Voter's Details Form </legend>
<form action="" method="post" name="login" id="login">
        <p><span id="sprytextfield1">
          <label>Matric Number:
            <input type="text" name="mnumber" id="mnumber" required="required" />
          </label>
        </p>
        

        
<input type="submit" value="Display Voter's Details"  name="checkvoter" id="submit" />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="reset" value="Cancel" name="reset" />   
</form>
</div>

<div id="footer"> <img src="../images/foota.png" width="1050" height="40" />
</div>
</div>
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/bootstrap-3.3.4.js"></script>
</body>
</html>