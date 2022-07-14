<?php 
session_start();
require_once 'includes/conn.php';
//declare varible

//check if empty
if (!empty($_POST['userna']))
{
	$user = mysqli_real_escape_string($dbc, $_POST['userna']) ;
	}
	
if (!empty($_POST['paswrd']))
{
	$pass = mysqli_real_escape_string($dbc, $_POST['paswrd']) or die(mysqli_error($dbc));
	//$pass = $_POST['password'];
	$pass1 = strtoupper($pass);
	}
	if ((!empty($user))  && (!empty($pass)))
{
//query db
$query = "SELECT * FROM voterss WHERE  matrnum ='$user' AND srname ='$pass1'";
$result = mysqli_query($dbc,$query) or die(mysqli_error($dbc));
$num = mysqli_num_rows($result);
if ($num == 1) 
{
	$row = mysqli_fetch_assoc($result);
	$_SESSION['vota_id'] = $row['vota_id'];
	$_SESSION['votaname'] = $row['matrnum'];
	$_SESSION['status'] = $row['status'];
	$status = $_SESSION['status'];
	if ($status == 0)
	{
	$name = $_SESSION['username'];
	//echo $name;
	header('location: castvote.php');
	}
	else
	{$infomsg = "You have cast your vote.";}
	
}
	else 
	{ // echo $pass1;
		$msg = "Invalid username or password.";
		}
}
/*else
{$errormsg = "Username field is empty";}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login Form | NUESA 2018/2019 Election</title>
<link rel ="stylesheet" type = "text/css" href="css/loginstyle.css"/>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
</head>
<body  bgcolor="#F3F3F3">
<div id="container">
<div id="banner"><img src="images/banner.png" width="1050"  /></div>
<div id="contentarea">
<div id="content" align="center">
<p><?php if (isset($infomsg)) 
{
	echo '<div class="alert alert-warning alert-dismissable">';
	echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		echo '<font color="red" size="+1">'. $infomsg.'</font>';
		echo '</div>';
}
?></p>
<p><?php if (isset($msg)) {
		echo '<div class="alert alert-warning alert-dismissable">';
	echo '<button type="button" class="close" data-dismiss="alert">&times;</button>';
		echo '<font color="red" size="+1">'. $msg.'</font>';
		echo '</div>';
} ?></p>
<p>
<?php // if (isset($errormsg)) echo $errormsg; ?>
</p>
<p align="center">Login with your username and password. </p>
<fieldset>
<legend> Login Form </legend>
<form action="login.php" method="post" name="login" id="login">
        <p><span class="input-group-addon">
          <label>Username:
            <input type="text" name="userna" id="userna" required="required" />
          </label>
       </span></p>
        <p>
<span class="input-group-addon">
          <label>Password:
            <input type="password" name="paswrd" id="paswrd" required="required" />
          </label>
          </span></p>
        
<input type="submit" value="Login"  name="submit"  />
          &nbsp;&nbsp;&nbsp;&nbsp;
          <input type="reset" value="Clear Fields" name="reset" />   
</form>
</fieldset>
</div>
<div id="sidebar1"><img src="images/votepic2.jpg"  alt="vote" class="img-circle"/> </div>
<div id="footer"> <img src="images/foota.png" width="1050"  /></div>
</div>
<script src="js/jquery-1.11.2.min.js"></script>
<script src="js/bootstrap-3.3.4.js"></script>
<script type="text/javascript">
<!--
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {hint:"Enter Username"});
//-->
</script>
</body>
</html>