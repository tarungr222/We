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
	background-image: url(images/bed.jpg);
	
 
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
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style4 {color: #000033; font-weight: bold; }
-->
</style></head>

<body><br />
<br />

<div align="center" style="font-weight:bold"></div>
<br />


  

<center> 
  <span class="style1">Beds Details </span>
</center>
<table width="475" border="2" align="center">
  <tr>
    <td width="133"><div align="center"><span class="style4">Total Beds</span></div></td>
    <td width="255"><div align="center"><span class="style4">Availble Beds</span></div></td>
	 <td width="255"><div align="center"><span class="style4">Date </span></div></td>
  </tr>
   <?php 
	$sql = "select * from  beds  ";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
  
	?>	
  <tr bgcolor="#999999">
    <td><div align="center"><?php echo $row['totalbeds'] ?></div></td>
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
