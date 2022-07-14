<?php 
session_start();
require_once '../includes/conn.php';
//declare varible

//check if empty
if (!empty($_POST['uname']))
{
	$user = mysqli_real_escape_string($dbc, $_POST['uname']);
	}
	
if (!empty($_POST['paswd']))
{
	$pass = mysqli_real_escape_string($dbc, $_POST['paswd']);
	//$pass = $_POST['password'];
	$pass1 = sha1($pass);
	}
	if ((!empty($user))  && (!empty($pass)))
{
//query db
$query = "SELECT * FROM userdet WHERE  uname ='$user' AND paswd ='$pass1'      ";
$result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
$num = mysqli_num_rows($result);
if ($num == 1) 
{
	$row = mysqli_fetch_assoc($result);
	
	$_SESSION['user_id'] = $row['user_id'];
	$_SESSION['username'] = $row['uname'];
	$name = $_SESSION['username'];
	//echo $name;
	header('location: adminhomepage.php');
}
	else 
	{  //echo $pass1;
		$msg = "Invalid username or password";
		}
}
else
{$errormsg = "Username field is empty";}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Login Form</title>

<link rel ="stylesheet" type = "text/css" href="../css/loginstyle.css"/>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
</head>

<body  bgcolor="#F3F3F3">
<div id="container">
<div id="banner"><img src="../images/banner.png" width="1050" height="200" /></div>
<div id="contentarea">
<div id="content" align="center">

<p>&nbsp;  </p>
<p><?php if (isset($msg)) {
	echo '<div class="alert alert-warning alert-dismissable">';
	echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		echo '<font color="red" size="+1">'. $msg.'</font>';
		echo '</div>';
	
	//echo "<font size ='4' color ='red'>" .$msg; 
//echo "</font>";
} ?></p>
<p>
<?php //if (isset($errormsg)) echo $errormsg; ?>
</p>
<form action="login.php" method="post" name="login" id="login">
        <p><span id="sprytextfield1">
          <label>Username:
            <input type="text" name="uname" id="uname" />
          </label>
        <span class="textfieldRequiredMsg">A value is required.</span></span></p>
        
<p><span id="sprypassword1">
          <label>Password:
            <input type="password" name="paswd" id="paswd" />
          </label>
          <span class="passwordRequiredMsg">A value is required.</span></span></p>
        
<input type="submit" value="Login"  name="submit" id="submit" />
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input type="reset" value="Cancel" name="reset" />   
</form>
</div>
<div id="footer"> <img src="../images/foota.png" width="1050" height="70" /></div>
</div>
<script src="../js/jquery-1.11.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script> 
<script type="text/javascript">
<!--
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {hint:"Enter Username"});
//-->
</script>
</body>
</html>