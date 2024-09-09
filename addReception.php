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
	background-image: url(images/h5.jpg);
	
 
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
.style10 {font-size: 18px; font-weight: bold; }
.style11 {font-size: 24px}
-->
</style></head>

<body><br />
<br />

<div align="center" class="style11" style="font-weight:bold">Add New Reception</div>
<br />

<form id="form1" name="form1" method="post" action="">
  <table width="362" border="0" align="center">
    <tr >
      <td width="176" height="37"><span class="style10">Recption name </strong></span></td>
      <td width="176"><input type="text" name="r1" required/></td>
    </tr>
   
    <tr>
      <td height="31"><span class="style10">Enter email </strong></span></td>
      <td><input type="email" name="r2" required/></td>
    </tr>
    <tr>
      <td height="37"><span class="style10">Password</strong></span></td>
      <td><input type="password" name="r3" required/></td>
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
$r3=$_POST['r3'];




$sql2 = "insert into reception(name,username,password) values('$r1','$r2','$r3')";  
if(mysqli_query($conn, $sql2)){ 
 ?>
  <script>
  alert("Data  added  Successfully");
  window.open("addReception.php","_self");
  
  </script>
  ; 
  
  
  <?php 
}else{ 
  ?>
<script>
alert( " email id is already exist"); 
</script>
<?php 
}  


 

}
?>
</p>

<center> 
  <span class="style1">Reception list </span>
</center>
<table width="200" border="1" align="center">
  <tr bgcolor="#000033">
    <td><span class="style4">Name</span></td>
  
    <td><span class="style4">Email</span></td>
  
    <td><span class="style4">ID</span></td>
    <td>&nbsp;</td>
  </tr>
   <?php 
	$sql = "select * from  reception  ";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
  
	?>	
	<form method="post"  action="" >
  <tr bgcolor="#999999">
    <td><input type="text" name="s1"  value="<?php echo $row['name'] ?>"/></td>
  
    <td><input type="text" name="s2" value="<?php echo $row['username'] ?>" /></td>
    
    <td><input type="text" name="s4" value="<?php echo $row['id'] ?> " readonly="true"/></td>
    <td><input type="submit" name="update" value="Update" /><input type="submit" name="delete" value="Delete " /></td>
  </tr>
  </form>
  <?php 
  
  }
  }
  
  ?>
</table>
<p>&nbsp;</p>

 <?php
 if (isset($_POST['update'])) {
  	// Get image name
  	
  	// Get text
  	//$image_text = mysqli_real_escape_string($conn, $_POST['image_text']);
	$s1=$_POST['s1'];
	$s2=$_POST['s2'];

	$s4=$_POST['s4'];
	
 

  	$sql = "update reception set name='$s1',username='$s2'  where id='$s4'";
  	// execute query
  

  if(mysqli_query($conn, $sql)){ 
 ?>
 <script>alert("Data Updated successfully");
 window.open("addReception.php","_self");
 </script>; 
 
 <?php 
}else{  
echo "Could not Update record: ". mysqli_error($conn);  
}  


 
}
?>








<?php
 if (isset($_POST['delete'])) {
  	// Get image name
  	
  	// Get text
  	//$image_text = mysqli_real_escape_string($conn, $_POST['image_text']);
	
	$id=$_POST['s4'];
 

  	$sql = "delete from reception  where id='$id'";
  	// execute query
  

  if(mysqli_query($conn, $sql)){ 
 ?>
 <script>alert("Data Deleted successfully");
  window.open("addReception.php","_self");
 </script>; 
 
 <?php 
}else{  
echo "Could not Update record: ". mysqli_error($conn);  
}  


 

}
?>
</body>
</html>
