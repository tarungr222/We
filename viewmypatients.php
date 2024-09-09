
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-weight: bold;
}
.style3 {
	font-size: 24px;
	color: #993333;
}
.style5 {color: #996600}
-->
</style>
</head>
<?php
// Start the session
session_start();
?>

<style type="text/css">
body, html {
  height: 100%;
}
<!--
body {
	background-image: url(images/r1.jpg);
	
 
  background-repeat: no-repeat;
  background-attachment: fixed;
   background-size: cover;

}
-->
</style>
</head>
<body>
<?php include("conn.php");?>
<?php include("doctortabs.html");?>

<p align="center" class="style3 style5">
 
  
All Patients </p>
<table width="770" border="1" align="center">
  <tr bgcolor="#000066">
    <td width="58" height="28" bgcolor="#0000FF"><span class="style1">Name</span></td>
    <td width="120" bgcolor="#0000FF"><span class="style1">Suffering from</span> </td>
    <td width="58" bgcolor="#0000FF"><span class="style1">gender</span></td>
    <td width="77" bgcolor="#0000FF"><span class="style1">address</span></td>
    <td width="60" bgcolor="#0000FF"><span class="style1">height</span></td>
	<td width="56" bgcolor="#0000FF"><span class="style1">weight</span></td>
	<td width="25" bgcolor="#0000FF"><span class="style1">age</span></td>
	<td width="62" bgcolor="#0000FF"><span class="style1">Gardian</span></td>
	<td width="56" bgcolor="#0000FF"><span class="style1">Doctor</span></td>
	<td width="89" bgcolor="#0000FF"><span class="style1">Visited  date</span></td>
	<td width="39" bgcolor="#0000FF"><span class="style1">ID</span></td>
  </tr>
 
    <?php 
	
	$did=$_SESSION["did"];
	$sql = "select * from patient where doctor='$did' order by joindate desc";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
  
	?>
  <tr bgcolor="#CCCCCC">
  
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
		<td><a href="patientmedicine.php?p1=<?php echo $row['name'] ?>&p2=<?php echo $row['id'] ?>"><?php echo $row['name'] ?></a></td>
  </tr>
  
  
<?php  } 
  
  }
 ?>
</table>
</body>
</html>
