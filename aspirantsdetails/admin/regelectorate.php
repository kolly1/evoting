<?php 
require '../includes/session.php';
require '../includes/conn.php'; ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Register An Aspirant</title>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<script src="../register/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../register/SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="../register/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../register/SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="container">
<div id="banner"><img src="../images/banner.png" width="1050" height="200" /></div>
<div id="nav">
<ul>
<li> <a href="../index.php"> Home </a> </li>
<li><a href="../register/register.php"> Register </a></li>
<li><a href="logout.php"> Log Out </a> </li>

</ul>
</div>
<div id="contentarea">
<div id="content">
<p> <?php

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
$asde = "insert into aspirantdt values('','$suname','$fname','$odaname','$matname','$departm','$level','$aspiring','$passq','')";
$result = mysqli_query($dbc,$asde) or die(mysqli_error($dbc));
if($result)
{
	//echo "<h1> Aspirant Registration Complete!</h1>";
	header('Location:viewaspirant.php');
}
else
{
	echo "Aspirant is yet to be registered.";
	}

}

}
	
}
/*else
{echo "Details not Submitted";}*/
?></p>
<form   method="post" enctype="multipart/form-data" action="">
 <p> <span id="sprytextfield1">
  <label> Surname:</label>
  <input type="text" name="stuname" id="text1" />
  <span class="textfieldRequiredMsg">A value is required.</span></span>
</p>
<p> <span id="sprytextfield3">
  <label>First Name:
    <input type="text" name="firstname" id="frstname" />
  </label>
  <span class="textfieldRequiredMsg">A value is required.</span></span></p>
<p> <span id="sprytextfield4">
  <label>Other Name:
    <input type="text" name="ortname" id="ortname" />
  </label>
  <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p>
    <span id="sprytextfield7">
    <label>Matric. Number:
      <input type="text" name="matnum" id="text2" />
    </label>
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></p>
  <p><span id="spryselect1">
    <label>Department:
      <select name="deptm" id="deptm">
               <option> .::Select Department .:: </option>
        <option> Electrical Engineering</option>
        <option> Mechanical Engineering</option>
        <option>Civil Engineering</option>
        <option>Computer Engineering</option>
        <option>Chemical Engineering</option>
        <option> Agric Engineeering</option>
        <option> Accounting</option>
        <option> Science Lab. Tech</option>
        <option> Computer Science</option>
        <option> Mining</option>
        <option> Agric. Sci</option>
        <option> Food Tech.</option>
        <option>Printing</option>
        <option>Statistics</option>
        <option>Textile Mgt</option>
      </select>
    </label>
    <span class="selectInvalidMsg">Please select a valid item.</span></span></p>
  <p><span id="spryselect2">
    <label>Level:
      <select name="level" id="level">
        <option> .::Select Level.:: </option>
        <option> ND I</option>
        <option> ND II</option>
        <option> HND I</option>
        <option> HND II</option>
      </select>
    </label>
    <span class="selectInvalidMsg">Please select a valid item.</span></span></p>
  <p><span id="spryselect4">
    <label>Post Aspiring For:
      <select name="postasp" size="1" id="postasp">
        <option selected="selected"> .:: Select Post .::</option>
        <option> President </option>
        <option> Vice President </option>
        <option> Treasurer </option>
        <option> General Secretary </option>
         <option> Social Director</option>
          <option> PRO </option>
          <option> Sport Director</option>
          <option> SRC </option>
      </select>
    </label>
    <span class="selectInvalidMsg">Please select a valid item.</span></span> </p>
    <p><label > Upload Picture: </label><input name="passp" type="file" id="passp" /></p>
  <p align="center">
    <label>
      <input type="submit" name="submitted" id="button" value="Register An Aspirant"  />
    </label>
    <label>
      <input type="reset" name="button2" id="button2" value="Cancel" />
    </label>
  </p>
  
</form>
</div>

<div id="sidebar1"><img src="../images/votepic2.jpg" width="350" height="350" /></div>
</div>
<div id="footer"><img src="../images/foota.png" width="1050" height="70" /></div>
</div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {hint:"Name"});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"-1", isRequired:false});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {isRequired:false, invalidValue:"-1"});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "custom", {hint:"kpt/cst/00/0000", pattern:"kpt/cst/00/0000"});
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3", {isRequired:false, invalidValue:"-1"});
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4", {isRequired:false, invalidValue:"-1"});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
  function DisableButton(b)
   {
      b.disabled = true;
      b.value = 'Submitting';
      b.form.submit();
   }
//-->
</script>
</body>
</html>