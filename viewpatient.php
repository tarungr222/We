<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php include("conn.php");?>
<?php include("admintabs.html");?>
<title>Untitled Document</title>
<style type="text/css">
<!--
body,td,th {
	color: Black;
}
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {font-size: 18px}
-->
</style></head>

<body><br />
<br />

<div align="center" class="style2" style="font-weight:bold">View Patients</div>
<br />

<table bgcolor="#E1E1E1" width="1065" border="1" align="center">
   <tr bgcolor="#000066" style="color:white">
     <td width="51"><span class="style1">Name	</span></td>
     <td width="128"><span class="style1">Suffering from </span></td>
     <td width="75"><span class="style1">Gender</span></td>
     <td width="89"><span class="style1">Address</span></td>
     <td width="68"><span class="style1">Height</span></td>
	 <td width="59"><span class="style1">Weight</span></td>
	  <td width="53"><span class="style1">Age</span></td>
	 <td width="75"><span class="style1">Gaurdian</span></td>
	 <td width="85"><span class="style1">Doctor</span></td>
	  <td width="251"><span class="style1">Visited date</span></td>
      <td width="61"><span class="style1">ID</span></td>
   </tr>
   
   <?php 
	$sql = "select * from  patient  ";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
  
	?>	
   <form action="" method="post">
   <tr>
     <td><?php echo $row['name'] ?></td>
	   <td><?php echo $row['diesease'] ?></td>
	     <td><?php echo $row['gender'] ?></td>
		   <td><?php echo $row['address'] ?></td>
		     <td><?php echo $row['height'] ?></td>
			   <td><?php echo $row['weight'] ?></td>
			     <td><?php echo $row['age'] ?></td>
				   <td><?php echo $row['gardien'] ?></td>
				     <td><?php echo $row['doctor'] ?></td>
					   <td><?php echo $row['joindate'] ?></td>
					   <td><?php echo $row['id'] ?></td>
   </tr>
   </form>
   	<?php }
	}
	 ?>
</table>
 
</body>
</html>
