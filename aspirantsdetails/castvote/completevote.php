<?Php require '../includes/votassession.php';?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Thanks For Voting</title>
<link rel="stylesheet" href="../css/style.css" type="text/css" />
<link href="../css/bootstrap-3.3.4.css" rel="stylesheet" type="text/css">
</head>

<body>
<div id="container">
<div id="banner"><img src="../images/banner.png" width="1050" height="105" />
</div>
<div id="nav">
<ul>
<li> <a href="../index.php"> Home </a> </li>
<li></li>
<li></li></ul>
</div>
<div id="contentarea">
<div id="content"> <p style=" font-size:24px; color:#093">Thanks <?php echo $_SESSION['votaname'];?>, you have cast your vote successfully. Bye! </p>
<p><a href="http://localhost/nuesaapp/voting/login.php"> Click here to go to login page </a></p>
</div>
<div id="footer"> <img src="../images/foota.png" width="1050" height="40" /></div>
</div>
<script src="../js/jquery-1.11.2.min.js"></script>
<script src="../js/bootstrap-3.3.4.js"></script>
</body>
</html>