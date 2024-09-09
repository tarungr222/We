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
	background-image: url(images/d1.jpg);
	
 
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
.style9 {
	font-size: 24px;
	color: #FFFFFF;
}
.style10 {
	color: #000000;
	font-weight: bold;
}
.style12 {color: #000000}
-->
</style></head>

<body><br />
<br />

<div align="center" class="style9" style="font-weight:bold"><span class="style12">Add New Doctor</span></div>
<br />

<form id="form1" name="form1" method="post" action="">
  <table width="369" border="0" align="center">
    <tr>
      <td width="141" height="24"><div align="left" class="style10"> Doctor name</div></td>
      <td width="210"><input type="text" name="r1" required/></td>
    </tr>
    <tr>
      <td width="141" height="30"><div align="left" class="style12"><strong>phone</strong></strong></strong></div></td>
      <td><input name="r2" type="text" title=" 10 digit phone number " maxlength="10" pattern="[0-9]{10}" required/></td>
    </tr>
    <tr>
      <td width="141" height="32"><div align="left" class="style12"><strong>Address</strong></strong></strong></div></td>
      <td><input type="text" name="r3" required/></td>
    </tr>
    <tr>
      <td width="141" height="27"><div align="left" class="style12"><strong>Email</strong></strong></strong></div></td>
      <td><input type="email" name="r4" required/></td>
    </tr>
    <tr>
      <td width="141" height="29"><div align="left" class="style12"><strong>Password</strong></strong></strong></div></td>
      <td><input type="password" name="r5" required/></td>
    </tr>
    <tr>
      <td height="26">&nbsp;</td>
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
$r3=$_POST['r3'];
$r4=$_POST['r4'];
$r5=$_POST['r5'];



$sql2 = "insert into doctor(name,phone,address,username,password) values('$r1','$r2','$r3','$r4','$r5')";  
if(mysqli_query($conn, $sql2)){ 
 ?>
  <script>
  alert("Docter  added  Successfully");
  window.open("addDoctor.php","_self");
  
  </script>
  ; 
  
  
  <?php 
}else{ 
 ?>
<script>
alert( "phone number or email id is already exist"); 
</script>
<?php 
}  


 

}
?>
</p>

<center> 
  <span class="style1">Doctor list </span>
</center>
<table width="600" border="2" align="center" bordercolor="#FFFFFF">
  <tr bgcolor="#000066">
    <td height="31"><span class="style4">Name</span></td>
    <td><span class="style4">Phone</span></td>
    <td><span class="style4">Address</span></td>
    <td><span class="style4">Email</span></td>
   
    <td><span class="style4">ID</span></td>
  </tr>
   <?php 
	$sql = "select * from  doctor  ";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
  
	?>	
  <tr bgcolor="#999999">
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['phone'] ?></td>
    <td><?php echo $row['address'] ?></td>
    <td><?php echo $row['username'] ?></td>
  
    <td><?php echo $row['id'] ?></td>
  </tr>
  <?php 
  
  }
  }
  
  ?>
  
</table>
<p>&nbsp;</p>
</body>
</html>
