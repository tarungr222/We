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
.style1 {
	font-size: 24px;
	font-weight: bold;
}
.style4 {color: white; font-weight: bold; }
.style5 {font-size: 18px}
-->
</style></head>

<body><br />
<br />

<div align="center" class="style5" style="font-weight:bold">Add Oxygen</div>
<br />

<form id="form1" name="form1" method="post" action="">
  <table width="auto" border="0" align="center">
    <tr>
      <td>Total Availbality of Oxygen </td>
      <td><input type="text" name="r1" required/></td>
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




$sql2 = "insert into oxygen(available) values('$r1')";  
if(mysqli_query($conn, $sql2)){ 
 ?>
  <script>
  alert("Oxygen availability  added  Successfully");
  window.open("addoxygen.php","_self");
  
  </script>
  ; 
  
  
  <?php 
}else{ 
 
echo "Could not insert record: ". mysqli_error($conn);  
}  


 

}
?>
</p>

<center> 
  <span class="style1">Oxygen Availblity </span>
</center>
<table width="475" border="1" align="center">
  <tr bgcolor="#000033">
    <td width="181"><span class="style4">No of Oxygen Cylinders</span></td>
    <td width="278"><span class="style4">Date</span></td>
   
  </tr>
   <?php 
	$sql = "select * from  oxygen  ";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
  
	?>	
  <tr bgcolor="#999999">
    <td><?php echo $row['available'] ?></td>
    <td><?php echo $row['date'] ?></td>
   
  </tr>
  <?php 
  
  }
  }
  
  ?>
  
</table>
<p>&nbsp;</p>
</body>
</html>
