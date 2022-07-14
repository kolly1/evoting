<?php //require '../includes/conn.php';
require '../includes/session.php';
found_correct();?>
<?php 
require '../includes/conn.php';
if ( (isset($_GET['post_id'])) && (is_numeric($_GET['post_id'])) ) { // 
 $id = $_GET['post_id'];
 } 
 elseif ((isset($_POST['post_id'])) && (is_numeric($_POST['post_id'])) ) { // Form submission.
$id = $_POST['post_id'];
 }
 else {echo "Error in file";}
 
 if(isset($_POST['sub'])){
	 require '../includes/conn.php';
// varibles declaration 
$surname = $_POST['stuname'];
$firstname = $_POST['firstname'];
$othername = $_POST['ortname'];
$matric = $_POST['matnum'];
$dept = $_POST['deptm'];
$level = $_POST['level'];
$postaspiring= $_POST['postasp'];
//$pic = $_POST['passp'];

/*if (isset($pic))
{*/
   $sql = "UPDATE aspirantdt SET 
  stuname = '$surname',
  firstname = '$firstname',
  ortname = '$othername',
  matnum = '$matric',
  deptm = '$dept',
  level = '$level',
  postasp = '$postaspiring'
   WHERE post_id = $id ";
  $result = mysqli_query($dbc,$sql) or die(mysqli_error($dbc));
  if( $result = mysqli_affected_rows($dbc) == 1)
      {
		  echo "Weldone";
   	  header('Location:viewaspirant.php');
      } 
 else {echo "Unable to get user identity.";}
 }// end of if statement if there is a pic
 /*else 
 {
  $sql = "UPDATE aspirantdt SET 
  stuname = '$surname',
  firstname = '$firstname',
  ortname = '$othername',
  matnum = '$matric',
  dept = '$dept',
  level = '$level',
  postap = '$postaspiring', 
  WHERE post_id = $id ";
  $result = mysqli_query($dbc,$sql) or die(mysqli_error($dbc));
  if( $result = mysqli_affected_rows($dbc) == 1)
      {
		  echo "Weldone";
   	  header('Location:viewaspirantdetails.php');
      } 
 else {echo "Unable to get user identity.";}
	 
	 }*///else of pic statement
// }
/*else
 {echo "Error";}
*/

if (!isset($_GET['post_id']) && !is_numeric($_GET['post_id']))
{
	header("Location: ../index.php");
}
else
{ $id = $_GET['post_id'];}
$aspirg = "select * from aspirantdt where post_id = '$id'";
 $r = mysqli_query($dbc,$aspirg) or die(mysqli_error($dbc))  ;
 $nm = mysqli_num_rows($r);
 if ($nm != 1)
 {
 echo "Unable to edit aspirant details.";
 }
 else
 {
	 
 //$dse = mysqli_result($dt);
 $row = mysqli_fetch_array($r);
 }
 

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Aspirant Details</title>
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
<li> <a href="adminhomepage.php"> Home </a> </li>
<li><a href="logout.php"> Log Out </a> </li>
</ul>
</div>
<div id="contentarea">
<div id="content">
<form  action="" method="post" enctype="multipart/form-data">
 <p> <span id="sprytextfield1">
  <label> Surname:</label>
  <input type="text" name="stuname" id="text1"  value="<?php echo $row['stuname'];?>"/>
  <span class="textfieldRequiredMsg">A value is required.</span></span>
</p>
<p> <span id="sprytextfield3">
  <label>First Name:
    <input type="text" name="firstname" id="frstname"  value="<?php echo $row['firstname'];?>"/>
  </label>
  <span class="textfieldRequiredMsg">A value is required.</span></span></p>
<p> <span id="sprytextfield4">
  <label>Other Name:
    <input type="text" name="ortname" id="ortname" value="<?php echo $row['ortname'];?>" />
  </label>
  <span class="textfieldRequiredMsg">A value is required.</span></span></p>
  <p>
    <span id="sprytextfield7">
    <label>Matric. Number:
      <input type="text" name="matnum" id="text2"  value="<?php echo $row['matnum'];?>"/>
    </label>
    <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></p>
  <p><span id="spryselect1">
    <label>Department:
      <select name="deptm" >
 <?php 
 echo "<option value=".$row['deptm'].">";
echo $row['deptm'];
echo '</option>';
 ?>
        <option> Electrical Engineeering</option>
        <option> Accounting</option>
        <option> Science Lab. Tech</option>
        <option> Computer Science</option>
      </select>
    </label>
    <span class="selectInvalidMsg">Please select a valid item.</span></span></p>
  <p><span id="spryselect2">
    <label>Level:
      <select name="level" id="level">
 <?php 
 echo "<option value=".$row['level'].">";
echo $row['level'];
echo '</option>';
 ?>
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

        <option> President </option>
        <option> Vice President </option>
        <option> Treasurer </option>
        <option> General Secretary </option>
      </select>
    </label>
    <span class="selectInvalidMsg">Please select a valid item.</span></span> </p>
    
  <p align="center">
   <input type="hidden" name="sub" value="TRUE" />
 <input type="hidden" name="id" value="'.$id.'" />
    <label>
      <input type="submit" name="button1" id="button" value="Edit Aspirant Details" />
    </label>
    <label>
      <input type="reset" name="button2" id="button2" value="Cancel" />
    </label>
  </p>
  
</form>
</div>

<div id="sidebar1">
  <img src="../images/wwe_ass.png" width="355" height="461" /></div>
</div>
<div id="footer"> <img src="../images/foota.png"  />
</div>
</div>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1", {invalidValue:"-1", isRequired:false});
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2", {isRequired:false, invalidValue:"-1"});
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7", "custom", {pattern:"kpt/cst/00/0000", hint:"kpt/cst/00/0000"});
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3", {isRequired:false, invalidValue:"-1"});
var spryselect4 = new Spry.Widget.ValidationSelect("spryselect4", {isRequired:false, invalidValue:"-1"});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
//-->
</script>
</body>
</html>