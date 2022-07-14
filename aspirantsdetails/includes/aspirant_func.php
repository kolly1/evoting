<?php 
function aspirant_president()
{
	require 'conn.php';
echo "<div class='heding'>";
echo "<font size='5' color='#009500'>Aspirant for the Post of President.</font>";
$dreg = "select * from aspirantdt where postasp = 'president'";
 $dt = mysqli_query($dbc,$dreg) or mysqli_error($dbc);
 $num = mysqli_num_rows($dt);
 if ($num > 0)
 {
	$sn = 0;
	 echo '<table  class="table table-striped table-bordered table-hover">';
echo '<tr >';
echo '<td ><strong> S/N </strong></td>';
echo '<td ><strong> Surname </strong></td>';
echo ' <td ><strong> Firstname </strong></td>';
echo '<td ><strong> Othername </strong></td>';
echo '<td ><strong> Matric. No </strong></td>';
echo '<td ><strong>Department </strong></td>';
echo '<td ><strong>Level </strong></td>';
echo '<td ><strong>Aspiring Post</strong></td>';
echo '<td >More Option  </td>';
echo '</tr>';
 while($row = mysqli_fetch_assoc($dt) )
 {
	 	$conid= $row['post_id'];

echo '<tr >';
echo '<td >';
echo $sn =$sn + 1 .'.'; 
echo '</td>';
echo '<td ><a href="viewdetails.php?post_id= '.$row['post_id'].'">' .'<strong>'.strtoupper($row['stuname']). '</strong>'. '</a></td>';
echo '<td >' .$row['firstname']. '</td>';
echo '<td >' .$row['ortname']. '</td>';
echo '<td >' .$row['matnum']. '</td>';
echo '<td >' .$row['deptm'] . '</td>';
echo '<td >' . $row['level'] . '</td>';
echo '<td >' . $row['postasp'] . '</td>';
echo '<td ><a href="editaspirantdetails.php?post_id='.$row['post_id'].'"> Edit </a></td>';
echo '</tr>';
 
	 }
	 echo '</table>';
	  }
 else {echo "<font size='4' color='red'><center> No Aspirant. </center></font>";}
 echo "</div>";
 }

function aspirant_vp()
{
	require 'conn.php';
	echo "<p class='heding'><font size='5' color='#009500'>Aspirant for the Post of Vice President.</font>";
$dreg = "select * from aspirantdt where postasp = 'vice president'";
 $dt = mysqli_query($dbc,$dreg) or mysqli_error($dbc);
 $num = mysqli_num_rows($dt);
 if ($num > 0)
 {
	 $sn = 0;
	echo '<table  class="table table-striped table-bordered table-hover">';
echo '<tr >';
echo '<td ><strong> S/N </strong></td>';
echo '<td ><strong> Surname </strong></td>';
echo ' <td ><strong> Firstname </strong></td>';
echo '<td ><strong> Othername </strong></td>';
echo '<td ><strong> Matric. No </strong></td>';
echo '<td ><strong>Department </strong></td>';
echo '<td ><strong>Level </strong></td>';
echo '<td ><strong>Aspiring Post</strong></td>';
echo '<td >More Option  </td>';

echo '</tr>';
 while($row = mysqli_fetch_assoc($dt) )
 {
	 	$id = $row['post_id'];
	
echo '<tr >';
echo '<td >' ;
echo $sn+=1 .'.';
echo '</td>';
echo '<td ><a href="viewdetails.php?post_id='.$row['post_id'].'">' .'<strong>'.strtoupper($row['stuname']). '</strong>'. '</a></td>';
echo '<td>' .$row['firstname']. '</td>';
echo '<td >' .$row['ortname']. '</td>';
echo '<td >' .$row['matnum']. '</td>';
echo '<td >' .$row['deptm'] . '</td>';
echo '<td >' . $row['level'] . '</td>';
echo '<td >' . $row['postasp'] . '</td>';
echo '<td ><a href="editaspirantdetails.php?post_id='.$row['post_id'].'"> Edit </a></td>';
echo '</tr>';
	 }
echo '</table>';
 
	 
 }
 else {echo "<font size='4' color='red'><center> No Aspirant. </center></font>";}
	}
	
	
	function aspirant_treasurer()
	{
		require 'conn.php';
		echo "<p class='heding'><font size='5' color='#009500'>Aspirant for the Post of Treasurer.</font>";
$result = "select * from aspirantdt where postasp = 'treasurer'";
 $dt = mysqli_query($dbc,$result) or mysqli_error($dbc);
 $num = mysqli_num_rows($dt);
 if ($num > 0)
 {
	 $sn = 0;
	
	 echo '<table  class="table table-striped table-bordered table-hover">';
echo '<tr >';
echo '<td ><strong> S/N </strong></td>';
echo '<td ><strong> Surname </strong></td>';
echo ' <td ><strong> Firstname </strong></td>';
echo '<td ><strong> Othername </strong></td>';
echo '<td ><strong> Matric. No </strong></td>';
echo '<td ><strong>Department </strong></td>';
echo '<td ><strong>Level </strong></td>';
echo '<td ><strong>Aspiring Post</strong></td>';
echo '<td >More Option  </td>';

echo '</tr>';
 while($row = mysqli_fetch_assoc($dt) )
 {
	 	$id = $row['post_id'];
	
echo '<tr >';
echo '<td >';
echo $sn =$sn + 1 .'.'; 
echo '</td>';
echo '<td ><a href="viewdetails.php?post_id='.$row['post_id'].'">' .'<strong>'.strtoupper($row['stuname']). '</strong>'. '</a></td>';
echo '<td >' .$row['firstname']. '</td>';
echo '<td >' .$row['ortname']. '</td>';
echo '<td >' .$row['matnum']. '</td>';
echo '<td >' .$row['deptm'] . '</td>';
echo '<td >' . $row['level'] . '</td>';
echo '<td >' . $row['postasp'] . '</td>';
echo '<td ><a href="editaspirantdetails.php?post_id='.$row['post_id'].'"> Edit </a></td>';
echo '</tr>';
	 }
	 echo '</table>';
 }
 else {echo "<font size='4' color='red'><center> No Aspirant. </center></font>";}
		}
	
	
	function aspirant_gensec()
	{
		require 'conn.php';
		echo "<p class='heding'><font size='5' color='#009500'>Aspirant for the Post of General Secretary.</font>";
$dreg = "select * from aspirantdt where postasp = 'general secretary'";
 $dt = mysqli_query($dbc,$dreg) or mysqli_error($dbc);
 $num = mysqli_num_rows($dt);
 if ($num > 0)
 {
	$sn = 0;
	 echo '<table  class="table table-striped table-bordered table-hover">';
echo '<tr >';
echo '<td ><strong> S/N </strong></td>';
echo '<td ><strong> Surname </strong></td>';
echo ' <td ><strong> Firstname </strong></td>';
echo '<td ><strong> Othername </strong></td>';
echo '<td ><strong> Matric. No </strong></td>';
echo '<td ><strong>Department </strong></td>';
echo '<td ><strong>Level </strong></td>';
echo '<td ><strong>Aspiring Post</strong></td>';
echo '<td>More Options </td>';
echo '</tr>';
 while($row = mysqli_fetch_assoc($dt) )
 {
	 	$id = $row['post_id'];
	
echo '<tr >';
echo '<td >';
echo $sn =$sn + 1 .'.'; 
echo '</td>';
echo '<td ><a href="viewdetails.php?post_id='.$row['post_id'].'">' .'<strong>'.strtoupper($row['stuname']). '</strong>'. '</a></td>';
echo '<td >' .$row['firstname']. '</td>';
echo '<td >' .$row['ortname']. '</td>';
echo '<td >' .$row['matnum']. '</td>';
echo '<td >' .$row['deptm'] . '</td>';
echo '<td >' . $row['level'] . '</td>';
echo '<td >' . $row['postasp'] . '</td>';
echo '<td ><a href="editaspirantdetails.php?post_id='.$row['post_id'].'"> Edit </a></td>';
echo '</tr>';
	 }
echo '</table>';	 
 }
 else {echo "<font size='4' color='red'><center> No Aspirant. </center></font>";}
		}
		
		function aspirant_ags()
		{
			require 'conn.php';
 echo "<p class='heding'><font size='5' color='#009500'>Aspirant for the Post of Asst. Gen. Sec..</font>";
$dreg = "select * from aspirantdt where postasp = 'Assistant General Secretary'";
 $dt = mysqli_query($dbc,$dreg) or mysqli_error($dbc);
 $num = mysqli_num_rows($dt);
 if ($num > 0)
 {
$sn = 0;	
	 echo '<table  class="table table-striped table-bordered table-hover">';
echo '<tr >';
echo '<td ><strong> S/N </strong></td>';
echo '<td ><strong> Surname </strong></td>';
echo ' <td ><strong> Firstname </strong></td>';
echo '<td ><strong> Othername </strong></td>';
echo '<td ><strong> Matric. No </strong></td>';
echo '<td ><strong>Department </strong></td>';
echo '<td ><strong>Level </strong></td>';
echo '<td ><strong>Aspiring Post</strong></td>';
echo '<td ><strong>More Options</strong></td>';
echo '</tr>';
 while($row = mysqli_fetch_assoc($dt) )
 {
	 	$id = $row['post_id'];
	echo '<tr >';
echo '<td >';
echo $sn =$sn + 1 .'.'; 
echo '</td>';
echo '<td ><a href="viewdetails.php?post_id='.$row['post_id'].'">' .'<strong>'.strtoupper($row['stuname']). '</strong>'. '</a></td>';
echo '<td >' .$row['firstname']. '</td>';
echo '<td >' .$row['ortname']. '</td>';
echo '<td >' .$row['matnum']. '</td>';
echo '<td >' .$row['deptm'] . '</td>';
echo '<td >' . $row['level'] . '</td>';
echo '<td >' . $row['postasp'] . '</td>';
echo '<td ><a href="editaspirantdetails.php?post_id='.$row['post_id'].'"> Edit </a></td>';
echo '</tr>';
 	 }
echo '</table>';	 
 }
 else {echo "<font size='4' color='red'><center> No Aspirant. </center></font>";}
		}
		
function aspirant_sport()
{
	require 'conn.php';
	echo "<p class='heding'><font size='5' color='#009500' >Aspirant for the Post of Sport Director.</font>";
$dreg = "select * from aspirantdt where postasp = 'Sport Director'";
 $dt = mysqli_query($dbc,$dreg) or mysqli_error($dbc);
 $num = mysqli_num_rows($dt);
 if ($num > 0)
 {
	$sn = 0;
	 echo '<table  class="table table-striped table-bordered table-hover">';
echo '<tr >';
echo '<td ><strong> S/N </strong></td>';
echo '<td ><strong> Surname </strong></td>';
echo ' <td ><strong> Firstname </strong></td>';
echo '<td ><strong> Othername </strong></td>';
echo '<td ><strong> Matric. No </strong></td>';
echo '<td ><strong>Department </strong></td>';
echo '<td ><strong>Level </strong></td>';
echo '<td ><strong>Aspiring Post</strong></td>';
echo '<td ><strong>More Option</strong></td>';
echo '</tr>';
 while($row = mysqli_fetch_assoc($dt) )
 {
	 	$id = $row['post_id'];
	
echo '<tr >';
echo '<td >';
echo $sn =$sn + 1 .'.'; 
echo '</td>';
echo '<td ><a href="viewdetails.php?post_id='.$row['post_id'].'">' .'<strong>'.strtoupper($row['stuname']). '</strong>'. '</a></td>';
echo '<td >' .$row['firstname']. '</td>';
echo '<td >' .$row['ortname']. '</td>';
echo '<td >' .$row['matnum']. '</td>';
echo '<td >' .$row['deptm'] . '</td>';
echo '<td >' . $row['level'] . '</td>';
echo '<td >' . $row['postasp'] . '</td>';
echo '<td ><a href="editaspirantdetails.php?post_id='.$row['post_id'].'"> Edit </a></td>';
echo '</tr>';
	 }
echo '</table>';	 
 }
 else {echo "<font size='4' color='red'><center> No Aspirant. </center></font>";}
 }

function aspirant_social()
{
	require 'conn.php';
	echo "<p class='heding'><font size='5' color='#009500'>Aspirant for the Post of Social Director.</font>";
$dreg = "select * from aspirantdt where postasp = 'Social Director'";
 $dt = mysqli_query($dbc,$dreg) or mysqli_error($dbc);
 $num = mysqli_num_rows($dt);
 if ($num > 0)
 {
$sn = 0;	
	 echo '<table  class="table table-striped table-bordered table-hover">';
echo '<tr >';
echo '<td ><strong> S/N </strong></td>';
echo '<td ><strong> Surname </strong></td>';
echo ' <td ><strong> Firstname </strong></td>';
echo '<td ><strong> Othername </strong></td>';
echo '<td ><strong> Matric. No </strong></td>';
echo '<td ><strong>Department </strong></td>';
echo '<td ><strong>Level </strong></td>';
echo '<td ><strong>Aspiring Post</strong></td>';
echo '<td ><strong>More Option</strong></td>';
echo '</tr>';
 while($row = mysqli_fetch_assoc($dt) )
 {
	 	$id = $row['post_id'];
	
echo '<tr >';
echo '<td >';
echo $sn =$sn + 1 .'.'; 
echo '</td>';
echo '<td ><a href="viewdetails.php?post_id='.$row['post_id'].'">' .'<strong>'.strtoupper($row['stuname']). '</strong>'. '</a></td>';
echo '<td >' .$row['firstname']. '</td>';
echo '<td >' .$row['ortname']. '</td>';
echo '<td >' .$row['matnum']. '</td>';
echo '<td >' .$row['deptm'] . '</td>';
echo '<td >' . $row['level'] . '</td>';
echo '<td >' . $row['postasp'] . '</td>';
echo '<td ><a href="editaspirantdetails.php?post_id='.$row['post_id'].'"> Edit </a></td>';
echo '</tr>';
	 }
echo '</table>';	 
 }
 else {echo "<font size='4' color='red'><center> No Aspirant. </center></font>";}
	}
	
	function aspirant_finsec()
	{
		require 'conn.php';
		echo "<p class='heding'><font size='5' color='#009500'>Aspirant for the Post of Financial Secretary.</font>";
$dreg = "select * from aspirantdt where postasp = 'Financial Secretary'";
 $dt = mysqli_query($dbc,$dreg) or mysqli_error($dbc);
 $num = mysqli_num_rows($dt);
 if ($num > 0)
 {
	 $sn= 0;
echo '<table  class="table table-striped table-bordered table-hover">';
echo '<tr >';
echo '<td ><strong> S/N </strong></td>';
echo '<td ><strong> Surname </strong></td>';
echo ' <td ><strong> Firstname </strong></td>';
echo '<td ><strong> Othername </strong></td>';
echo '<td ><strong> Matric. No </strong></td>';
echo '<td ><strong>Department </strong></td>';
echo '<td ><strong>Level </strong></td>';
echo '<td ><strong>Aspiring Post</strong></td>';
echo '<td ><strong>More Options</strong></td>';
echo '</tr>';
 while($row = mysqli_fetch_assoc($dt) )
 {
	$id = $row['post_id'];
	
echo '<tr >';
echo '<td >';
echo $sn =$sn + 1 .'.'; 
echo '</td>';
echo '<td ><a href="viewdetails.php?post_id='.$row['post_id'].'">' .'<strong>'.strtoupper($row['stuname']). '</strong>'. '</a></td>';
echo '<td >' .$row['firstname']. '</td>';
echo '<td >' .$row['ortname']. '</td>';
echo '<td >' .$row['matnum']. '</td>';
echo '<td >' .$row['deptm'] . '</td>';
echo '<td >' . $row['level'] . '</td>';
echo '<td >' . $row['postasp'] . '</td>';
echo '<td ><a href="editaspirantdetails.php?post_id='.$row['post_id'].'"> Edit </a></td>';
echo '</tr>';
	 }
echo '</table>';	 
 }
 else {echo "<font size='4' color='red'><center> No Aspirant. </center></font>";}
		}
		
function aspirant_pro()
{
	require 'conn.php';
	echo "<p class='heding'><font size='5' color='#009500'>Aspirant for the Post of P R O.</font>";
$dreg = "select * from aspirantdt where postasp = 'PRO'";
 $dt = mysqli_query($dbc,$dreg) or mysqli_error($dbc);
 $num = mysqli_num_rows($dt);
 if ($num > 0)
 {
	$sn =0;
	 echo '<table  class="table table-striped table-bordered table-hover">';
echo '<tr >';
echo '<td ><strong> S/N </strong></td>';
echo '<td ><strong> Surname </strong></td>';
echo ' <td ><strong> Firstname </strong></td>';
echo '<td ><strong> Othername </strong></td>';
echo '<td ><strong> Matric. No </strong></td>';
echo '<td ><strong>Department </strong></td>';
echo '<td ><strong>Level </strong></td>';
echo '<td ><strong>Aspiring Post</strong></td>';
echo '<td ><strong>More Option</strong></td>';
echo '</tr>';
 while($row = mysqli_fetch_assoc($dt) )
 {
	 	$id = $row['post_id'];
	
echo '<tr >';
echo '<td >';
echo $sn =$sn + 1 .'.'; 
echo '</td>';
echo '<td ><a href="viewdetails.php?post_id='.$row['post_id'].'">' .'<strong>'.strtoupper($row['stuname']). '</strong>'. '</a></td>';
echo '<td >' .$row['firstname']. '</td>';
echo '<td >' .$row['ortname']. '</td>';
echo '<td >' .$row['matnum']. '</td>';
echo '<td >' .$row['deptm'] . '</td>';
echo '<td >' . $row['level'] . '</td>';
echo '<td >' . $row['postasp'] . '</td>';
echo '<td ><a href="editaspirantdetails.php?post_id='.$row['post_id'].'"> Edit </a></td>';

echo '</tr>';
	 }
	echo '</table>'; 
 }
 else {echo "<font size='4' color='red'><center> No Aspirant. </center></font>";}
 }

function aspirant_vpfemale()
{
	require 'conn.php';
	echo "<p class='heding'><font size='5' color='#009500'>Aspirant for the Post of Vice President (Female).</font>";
$dreg = "select * from aspirantdt where postasp = 'Vice President(F)'";
 $dt = mysqli_query($dbc,$dreg) or mysqli_error($dbc);
 $num = mysqli_num_rows($dt);
 if ($num > 0)
 {
	$sn = 0;
	 echo '<table  class="table table-striped table-bordered table-hover">';
echo '<tr >';
echo '<td ><strong> S/N </strong></td>';
echo '<td ><strong> Surname </strong></td>';
echo ' <td ><strong> Firstname </strong></td>';
echo '<td ><strong> Othername </strong></td>';
echo '<td ><strong> Matric. No </strong></td>';
echo ' <td><strong> Department </strong></td>';
echo '<td ><strong>Level </strong></td>';
echo '<td ><strong>Aspiring Post</strong></td>';
echo '<td ><strong>More Option</strong></td>';
echo '</tr>';
 while($row = mysqli_fetch_assoc($dt) )
 {
	 	$id = $row['post_id'];
	
echo '<tr >';
echo '<td >';
echo  $sn  = $sn+1 .'.';
echo '</td>';
echo '<td ><a href="viewdetails.php?post_id='.$row['post_id'].'">' .'<strong>'.strtoupper($row['stuname']). '</strong>'. '</a></td>';
echo '<td >' .$row['firstname']. '</td>';
echo '<td >' .$row['ortname']. '</td>';
echo '<td >' .$row['matnum']. '</td>';
echo '<td >' .$row['deptm'] . '</td>';
echo '<td >' . $row['level'] . '</td>';
echo '<td >' . $row['postasp'] . '</td>';
echo '<td ><a href="editaspirantdetails.php?post_id='.$row['post_id'].'"> Edit </a></td>';

echo '</tr>';

 
	 }
echo '</table>';	 
 }
 else {echo "<font size='4' color='red'><center> No Aspirant. </center></font>";}
 }

?>