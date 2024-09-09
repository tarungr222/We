<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php include("conn.php");?>
<?php include("patienttabs.html");?>
<title>Untitled Document</title>
<style type="text/css">
body, html {
  height: 100%;
}
<!--
body {
	background-image: url(images/oxygen.jpg);
	
 
  background-repeat: no-repeat;
  background-attachment: fixed;
   background-size: cover;

}
-->
</style>
<style type="text/css">
<!--
body,td,th {
	color: Black;
}
.style5 {font-size: 24px}
.style7 {color: #FFFFFF; font-weight: bold; }
-->
</style></head>

<body><br />
<br />

<div align="center" class="style5" style="font-weight:bold">Available Oxygen</div>
<br />


<p>
 
</p>

<center> 

</center>
<table width="457" border="0" align="center">
  <tr>
    <td width="194" bgcolor="#9966FF"><div align="center"><span class="style7">No of Oxygen Cylinders</span></div></td>
    <td width="265" bgcolor="#9966FF"><div align="center"><span class="style7">Date</span></div></td>
  </tr>
   <?php 
	$sql = "select * from  oxygen  ";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
  
	?>	
  <tr bgcolor="#999999">
    <td><div align="center"><?php echo $row['available'] ?></div></td>
    <td><div align="center"><?php echo $row['date'] ?></div></td>
  </tr>
  <?php 
  
  }
  }
  
  ?>
</table>
<p>&nbsp;</p>
</body>
</html>
