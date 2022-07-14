<?php 
require '../../includes/session.php';
found_correct();?>
  <?php 
//
 // $id = $_GET['user_id'];
// if (isset($_GET['user_id']) && is_numeric($_GET['user_id']))
 //{
//$id = $_GET['user_id'];
//echo $id;
//if ($id)
if ( (isset($_GET['user_id'])) && (is_numeric($_GET['user_id'])) ) { // From view_users.php
 $id = $_GET['user_id'];
 } 
 elseif ( (isset($_POST['user_id'])) && (is_numeric($_POST['user_id'])) ) { // Form submission.
 $id = $_POST['user_id'];
 }
 else {echo "Error in file";}
 if(isset($_POST['submitted'])){
	 require '../../includes/conn.php';


   $sql = "UPDATE userdet SET 
  surname = '" . $_POST['surname'] ."',
  firstname = '". $_POST['firstname'] ."',
  matric_no = '". $_POST['matric_no'] ."',
  stlevel = '". $_POST['stlevel'] ."',
  dept = '".$_POST['dept']."',
  uname = '" . $_POST['uname'] ."',
  paswd = '" . $_POST['paswd'] ."'
  WHERE user_id = $id ";
  $result_update = mysqli_query($dbc,$sql) or die(mysqli_error($dbc));
  if( $result_update = mysqli_affected_rows($dbc) == 1)
      {
		  echo "Weldone";
   	  header('Location:user/viewuseraccount.php');
      } 
 else {echo "Unable to get user identity.";}
 }
 else
 {echo "Error";}
  ?>