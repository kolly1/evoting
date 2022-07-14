<?php 
require("../includes/votassession.php");
found_correct();?>
<?php
require '../includes/conn.php';
$dreg = "select * from aspirantdt where postasp = 'ASSISTANT GENERAL SECRETARY'";
 $dt = mysqli_query($dbc,$dreg) or mysqli_error($dbc);
 $num = mysqli_num_rows($dt) or die(mysqli_error($dbc));
 if ($num > 0)
 {
 if ( (isset($_GET['post_id'])) && (is_numeric($_GET['post_id'])) ) { // From view_users.php
 $id = $_GET['post_id'];
 echo $id;
  } 
 elseif ( (isset($_POST['post_id'])) && (is_numeric($_POST['post_id'])) ) { // Form submission.
 $id = $_POST['post_id'];
 echo $id;
 }
 }
 else
 {echo "No Aspirant for this post";}
 //else {echo "Error in file";}


?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Post Of Assistant General Secretary | NUESA 2019 Election</title>
<script src="../register/SpryAssets/SpryValidationRadio.js" type="text/javascript"></script>
<link href="../register/SpryAssets/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
<link href="../css/caststyle.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="container">
<div id="banner">
<img src="../images/banner.png" width="1050" height="105" alt="banner" /></div>
<div id="nav"><p><?php
echo "Welcome " .$_SESSION['votaname'];
 ?></p>  </div>
<div id="contentarea">
<div id="content">
<div id="ased">
POST OF ASSISTANT GENERAL SECRETARY. SELECT YOUR CHOICE AND CLICK ON CAST YOUR VOTE BUTTON TO CONTINUE.
</div>
<div id="vote">

<?php 
if(isset($_POST['submitted'])){
	$voterid = $_SESSION['vota_id'];
	
	 if (is_array($_POST['vote']))
	 {
		 foreach($_POST['vote'] as $o)
		 {
	
	 //check for duplicate and update
	 $check = "select * from voterecords where voters_id like '$voterid' and aspirant_post ='ASSISTANT GENERAL SECRETARY'";
	 $checkquery = mysqli_query($dbc,$check) or die(mysqli_error($dbc));
	 $num = mysqli_num_rows($checkquery);
if ($num == 1) 
{
$saa = "UPDATE `voterecords` SET `aspirant_id`='$o' WHERE `voters_id` ='$voterid' and aspirant_post ='SRC'";
	 $result2 = mysqli_query($dbc,$saa) or die(mysqli_error($dbc));
	  if ($result2 = mysqli_affected_rows($dbc) == 1)
{
	 header('Location:castvote9.php');

}
	  else {header('Location:castvote9.php');}
}
else
{
	   $aaa = "INSERT INTO voterecords VALUES('ASSISTANT GENERAL SECRETARY','$o','$voterid')";
	  
  $result = mysqli_query($dbc,$aaa) or die(mysqli_error($dbc));

  if ($result)
  {
	  header('Location:castvote9.php');
}
	  else {echo "Error!";}
	}
	
	 }
	 }
	 
}

 if (isset($msg)) echo $msg;
echo '<form action="" method="post">';
echo '<span id="spryradio1">';
//echo '<table width="800">';
//echo '<tr>';
echo '<div class="row">';
while ($row = mysqli_fetch_assoc($dt))
{
	$passport = $row['passp'];
	$id = $row['post_id'];
	
echo '<div class="col-lg-4">';
echo '<div class="thumbnail">';
echo '<img src="../aspirantpic/'.$row['passp'].'" height="150" width="200" class="img-rectangle">';  
 echo ' <div class="caption">'.'<h3>'
 .$row['stuname']. ' ' .$row['firstname']. ' ' .$row['ortname']. '</h3>'.'</div >';
 echo '</div>';
echo '</div>';
echo '<div class="col-lg-2">';
echo '<br>';
 echo '<input type="radio" name="vote[]" value="'.$row['post_id'].'"   width="30" />';
// echo $id;
 // $asq = $row['post_id'];
// echo $asq;

echo '<span class="radioRequiredMsg">Please make a selection.</span></span>';
echo '</div>';
}
echo '</div>';
 	
	echo '<input type="hidden" name="submitted" value="TRUE"  />';
 echo '<input type="hidden" name="id" value="'.$id.'" />';
echo '<label><input  type="submit" onClick="return monitor()" value="CAST YOUR VOTE"  /></label>';
echo "<br/>";

echo '</form>';
/**
echo '<form action="castvote7.php" method="post">';
echo '<span id="spryradio1">';
echo'<table width=600>';
echo'<tr>';
echo'<td>';
//$selez = "select stuname from aspirantdt where postap ='vice president' ";
//require '../includes/conn.php';

 /**$num = mysqli_num_rows($dt);
 if ($num >=1)
{
**/
//$result = mysqli_query($dbc,$selez) or die(mysqli_error($dbc));
//$num = mysqli_num_rows($result)  or die(mysqli_error($dbc));
/**
echo '<tr>';
while ($row = mysqli_fetch_assoc($dt))
{
	$passport = $row['passp'];
	$id = $row['post_id'];
	
 echo '<td><label>' .$row['stuname']. ' ' .$row['firstname'].  '</label>';
 echo '<input type="radio" name="vote[]" value="'.$row['post_id'].'"  />';
 //echo $id;
// $asq = $row['post_id'];
// echo $asq;
  echo '<br />';
echo '<span class="radioRequiredMsg">Please make a selection.</span></span> </td>';
 echo '<td><img src= "../aspirantpic/'.$row['passp'].'" height="150" width="200">';
echo '</td>';
echo '</tr>';
}

/**}
else {echo "No Aspirant";} **/
/**
	echo '</table>';
	echo '<input type="hidden" name="submitted" value="TRUE" />';
 echo '<input type="hidden" name="id" value="'.$id.'" />';
echo '<label><input name="button1" type="submit" value="CAST YOUR VOTE"  onclick="DisableButton(this);"/></label>';


echo '</form>';
	 
**/
?>
</div>
</div>
</div>
<div id="footer">
<img src="../images/foota.png" width="1050" height="40" /> </div>
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/bootstrap-3.3.4.js"></script>
<script type="text/javascript">
<!-- 
var spryradio1 = new Spry.Widget.ValidationRadio("spryradio1");
function DisableButton(b)
   {
      b.disabled = true;
      b.value = 'CAST YOUR VOTE';
      b.form.submit();
   }
//-->
</script>
</body>
</html>