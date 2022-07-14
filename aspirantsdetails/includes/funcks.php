<?php 
global $dbc;
function passport($passport,$file_type,$error,$src,$path)
{
$allowed = array ('image/pjpeg',
'image/jpeg', 'image/jpeg',
'image/JPG', 'image/X-PNG',
'image/PNG', 'image/png',
'image/x-png');
 if (in_array($filetype, $allowed)) 
 {
	 $details = $path.$passport;
move_uploaded_file($src, $details);


 return $details;
}

else 
{echo "file not support.";}
 

  switch ($error){
case 1:
   echo 'Upload size too big from the ini file';
    
break;
case 2:
echo 'Upload size bigger than the 1 specified in Html form';
    
break;
case 3:
echo 'file partially uploaded';
    
break;
case 4:
echo 'No file was uploaded ';
    
break;
case 6:
echo 'no temporary folder found';
    
break;
case 7:
echo 'No more space';
    
break;
default :
echo 'Cant detect error';
    
break;

  }

}


	// function to delete user account 
function delete_user()
         {
require_once("..includes/conn.php");
  $user_id = $_GET['user_id'];
  echo $user_id;
$query1 = "DELETE FROM userdet WHERE user_id =$user_id LIMIT 1 ";
$result = mysqli_query($dbc,$query1) or die(mysqli_error($dbc));

if ($result = (mysqli_affected_rows($query1) == 1))
{
//echo "User Account has been Delete ";
header( 'Location:viewuseraccount.php');
}
else
{
echo "Delete Failed"; 
}
 
}
?>