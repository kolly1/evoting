<?php 
require '../../includes/session.php';
found_correct();?>
<?php 
require '../../includes/conn.php';
/**if (!isset($_GET['user_id']) && !is_numeric($_GET['user_id']))
{
	header("Location: ../index.php");
}
else{
{ $userid = $_GET['user_id'];
else */
/* if(isset($_GET['user_id']) && is_numeric($_GET['user_id']))
 {
$id = $_GET['user_id'];
echo $id;
}
else{
header('Location: adminhomepage.php');
} */

if ( (isset($_GET['user_id'])) && (is_numeric($_GET['user_id'])) ) { // 
 $id = $_GET['user_id'];
 } 
 elseif ( (isset($_POST['user_id'])) && (is_numeric($_POST['user_id'])) ) { // Form submission.
 $id = $_POST['user_id'];
 }
 else {echo "Error in file";}
 if(isset($_POST['submitted'])){
	 require '../../includes/conn.php';
// varibles declaration 
$surname = $_POST['surname'];
$firstname = $_POST['firstname'];
$matric = $_POST['matric_no'];
$level = $_POST['stlevel'];
$dept = $_POST['dept'];
$username = $_POST['uname'];
$pass = $_POST['paswd'];
$pass2 = sha1($pass);

   $sql = "UPDATE userdet SET 
  surname = '$surname',
  firstname = '$firstname',
  matric_no = '$matric',
  stlevel = '$level',
  dept = '$dept',
  uname = '$username',
  paswd = '$pass2'
  WHERE user_id = $id ";
  $result_update = mysqli_query($dbc,$sql) or die(mysqli_error($dbc));
  if( $result_update = mysqli_affected_rows($dbc) == 1)
      {
		  echo "Weldone";
   	  header('Location:viewuseraccount.php');
      } 
 else {echo "Unable to get user identity.";}
 }
 else
 {echo "Error";}


 
$userdetails = "select * from userdet where user_id = '$id'";
 $result = mysqli_query($dbc,$userdetails) or die(mysqli_error($dbc))  ;
 $num = mysqli_num_rows($result);
 if ($num != 1)
 {
 echo "Unable to edit user details.";
 }
 else
 {
	 
 //$dse = mysqli_result($dt);
 $rw = mysqli_fetch_array($result);
 }
// $id = $userid;
//}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit User Account</title>
<link rel="stylesheet"   href="../../css/style.css" type="text/css" />
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
<div id="banner">
<?php //require '../includes/header.php';?>
</div>
<div id="nav">
<ul>
<li> <a  href="../adminhomepage.php"> Home </a> </li>
<li><a href="../logout.php"> Log Out </a></li>
</ul>
</div>
<div id="contentarea">
<div id="content">

<form  action="" method="post" >
 <p><span id="sprytextfield1">
 <label>Surname:
   <input type="text" name="surname" id="surname"  value="<?php echo $rw['surname'];?>"/>
 </label>
 <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></p>
<p><span id="sprytextfield2">
<label>First Name:
  <input type="text" name="firstname" id="firstname"  value="<?php echo $rw['firstname'];?>"/>
</label>
<span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></p>
<p><span id="sprytextfield3">
<label>Matric. Number:
  <input type="text" name="matric_no" id="matricn" value="<?php echo $rw['matric_no'];?>"/>
</label>
<span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></p>    
  <p><span id="spryselect1">
    <label>Level:
      <select name="stlevel" size="1" id="level">
        <option selected="selected">.:: Select Level .::</option>
        <option>ND I</option>
        <option>ND II</option>
        <option>HND I</option>
        <option>HND II</option>
      </select>
    </label>
    <span class="selectInvalidMsg">Please select a valid item.</span></span></p>
    <p><span id="spryselect2">
      <label>Department:
        <select name="dept" id="dept">
          <option>.:: Select Department .::</option>
          <option>Computer Engeering</option>
          <option>Electrical Engeering</option>
          <option>Mechnical Engeering</option>
          <option>Mining</option>
          <option>SLT</option>
          <option>Statistics</option>
          <option>Agric Science</option>
        </select>
      </label>
      <span class="selectInvalidMsg">Please select a valid item.</span></span> </p>
    <p><span id="sprytextfield4">
    <label>Username:
      <input type="text" name="uname" id="uname"  value="<?php echo $rw['uname'];?>"/>
    </label>
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldMaxCharsMsg">Exceeded maximum number of characters.</span></span></p>
    <p><span id="sprypassword1">
    <label>Password:
      <input type="password" name="paswd" id="paswd" />
    </label>
    <span class="passwordRequiredMsg">A value is required.</span><span class="passwordMaxCharsMsg">Exceeded maximum number of characters.</span></span></p>
<p><span id="spryconfirm1">
  <label>Confirm Password:
    <input type="password" name="password1" id="password1" />
  </label>
  <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></p>
  <p align="center">
  <input type="hidden" name="submitted" value="TRUE" />
 <input type="hidden" name="id" value="' .$id. '" />
    <label>
      <input type="submit" name="button1" id="button" value="Register An Aspirant" />
    </label>
    <label>
      <input type="reset" name="button2" id="button2" value="Cancel" />
    </label>
  </p>
  
</form>
</div>

<div id="sidebar1">
<?php /*if ($userid)
{
   $sql = "UPDATE userdet SET 
  surname = '" . $_POST['surname'] ."',
  firstname = '". $_POST['firstname'] ."',
  matric_no = '". $_POST['matric_no'] ."',
  stlevel = '". $_POST['stlevel'] ."',
  dept = '".$_POST['dept']."',
  uname = '" . $_POST['uname'] ."',
  paswd = '" . $_POST['paswd'] ."'
  WHERE user_id = $id  ";
  $result_update = mysqli_query($dbc,$sql) or die(mysqli_error($dbc));
  if( $result_update = mysqli_affected_rows($dbc))
      {
   	  header('Location: user/viewuseraccount.php');
      }
 
 }
 
 else {echo "Unable to get user identity.";} **/
  ?>
  <img src="../images/wwe_ass.png" width="355" height="461" /></div>
</div>
<div id="footer"> footer
</div>
</div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {maxChars:30, hint:"Enter Surname"});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2", "none", {hint:"Enter First Name", maxChars:30});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "none", {hint:"Enter Matric. No", maxChars:23});
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {isRequired:false, invalidValue:"-1"});
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {hint:"Enter Username", maxChars:20});
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {maxChars:18});
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "paswd", {validateOn:["blur"]});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {isRequired:false, invalidValue:"-1"});
//-->
</script>
</body>
</html>