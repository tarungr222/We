<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php include("conn.php");?>
<?php include("admintabs.html");?>
<title>Untitled Document</title>
<style type="text/css">
body, html {
  height: 100%;
}
<!--
body {
	background-image: url(images/h2.jpg);
	
 
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
	font-size: 18px;
	font-weight: bold;
}
.style4 {color: white; font-weight: bold; }
.style5 {font-size: 18px}
-->
</style></head>

<body><br />
<br />

<div align="center" class="style5" style="font-weight:bold">Update  Bed Details</div>
<br />

<form id="form1" name="form1" method="post" action="">
  <table width="auto" border="0" align="center">
    <tr>
      <td>Total Beds In Hospital </td>
      <td><input name="r1" type="text" pattern="[0-9]{1,}" title="Only Number is required" required/></td>
    </tr>
   <tr>
      <td>Available Beds In Hospital </td>
      <td><input type="text" name="r2"pattern="[0-9]{1,}" title="Only Number is required" required/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit" /></td>
    </tr>
  </table>
</form>
<p>
  <?php 

if(isset($_POST['Submit']))
{
$r1=$_POST['r1'];

$r2=$_POST['r2'];


$sql2 = "insert into beds(totalbeds,available) values('$r1','$r2')";  
if(mysqli_query($conn, $sql2)){ 
 ?>
  <script>
  alert("Beds Added  Successfully");
  window.open("beds.php","_self");
  
  </script>
  
  
  
  <?php 
}else{ 
 
echo "Could not insert record: ". mysqli_error($conn);  
}  


 

}
?>
</p>

<center> 
  <p class="style1">Beds Details  </p>
</center>
<table width="475" border="1" align="center">
  <tr bgcolor="#000066">
    <td width="133"><div align="center"><span class="style4">Total Beds</span></div></td>
    <td width="255"><div align="center"><span class="style4">Available Beds</span></div></td>
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
