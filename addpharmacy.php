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
	background-image: url(images/p1.jpg);
	
 
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
.style8 {font-size: 18px}
.style10 {color: #000000; font-weight: bold; }
.style11 {color: #000000}
-->
</style></head>

<body><br />
<br />

<div align="center" class="style8" style="font-weight:bold">Add New Pharmacy</div>
<br />

<form id="form1" name="form1" method="post" action="">
  <table  width="428" height="248" border="0" align="center">
    <tr>
      <td width="220"><span class="style10">Pharmacist name </span></td>
      <td width="198"><input type="text" name="r1" required/></td>
    </tr>
    <tr>
      <td><span class="style10">Contact Number </span></td>
      <td><input name="r2" type="text" title=" 10 digit phone number " maxlength="10" pattern="[0-9]{10}"  required/></td>
    </tr>
    <tr>
      <td><span class="style10">Email</span></td>
      <td><input type="Email" name="r3" required="required"/></td>
    </tr>
    <tr>
      <td><span class="style10">Password</span></td>
      <td><input type="password" name="r4" required="required"/></td>
    </tr>
	
	 <tr>
      <td><span class="style10">pharmacy ID</span></td>
      <td><input type="text" name="r5" required="required"/></td>
    </tr>
    <tr>
      <td><span class="style11"></span></td>
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


$sql2 = "insert into pharmacy(name,phone,username,password,pid) values('$r1','$r2','$r3','$r4','$r5')";  
if(mysqli_query($conn, $sql2)){ 
 ?>
  <script>
  alert("Data  added  Successfully");
  window.open("addpharmacy.php","_self");
  
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
  <span class="style1">Pharmacy list </span>
</center>
<table bgcolor="#E2E2E2" width="200" border="1" align="center">
  <tr bgcolor="#000066">
    <td><span class="style4">Name</span></td>
   <td><span class="style4">Phone No.</span></td>
    <td><span class="style4">Email</span></td>
	 <td><span class="style4">Pharmacy ID</span></td>
  
    <td><span class="style4"></span></td>
  </tr>
   <?php 
	$sql = "select * from  pharmacy  ";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
  
	?>	
	<form method="post"  action="" >
  <tr bgcolor="#999999">
    <td><input type="text" name="s1"  value="<?php echo $row['name'] ?>"/></td>
    <td><input type="text" name="s4" value="<?php echo $row['phone'] ?> " /></td>
    <td><input type="text" name="s2" value="<?php echo $row['username'] ?>" /></td>
	  <td><input type="text" name="s5" value="<?php echo $row['pid'] ?>" /></td>
  
   
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
	
 

  	$sql = "update pharmacy set name='$s1',username='$s2'  where phone='$s4'";
  	// execute query
  

  if(mysqli_query($conn, $sql)){ 
 ?>
 <script>alert("Data Updated successfully");
 window.open("addpharmacy.php","_self");
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
  window.open("addpharmacy.php","_self");
 </script>; 
 
 <?php 
}else{  
echo "Could not Update record: ". mysqli_error($conn);  
}  


 

}
?>
</body>
</html>
