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
	font-size: 24px;
	font-weight: bold;
}
.style4 {color: #000033; font-weight: bold; }
-->
</style></head>

<body><br />
<br />



<center> 
  <span class="style1">Doctors  list </span>
</center>
<table width="200" border="0" align="center">
  <tr border="0" bgcolor="blue">
    <td height="34"><span class="style4">Name</span></td>
  
    <td><span class="style4">Email</span></td>
  
    <td><span class="style4">ID</span></td>
	<td></td>
  </tr>
   <?php 
	$sql = "select * from  doctor ";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
  
	?>	
	<form method="post"  action="" >
  <tr>
    <td><input type="text" name="s1"  value="<?php echo $row['name'] ?>"/></td>
  
    <td><input type="text" name="s2" value="<?php echo $row['username'] ?>" /></td>
    
    <td><input type="text" name="s4" value="<?php echo $row['id'] ?> " readonly="true"/></td>
    <td><input type="submit" name="update" value="Update" />
      <input type="submit" name="delete" value="Delete " /></td>
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
