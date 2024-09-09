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
	color: #FFFFFF;
	font-weight: bold;
}
.style2 {font-size: 24px}
-->
</style></head>

<body><br />
<br />

<div align="center" class="style2" style="font-weight:bold">Feedbacks</div>
<br />

<table bgcolor="#E2E2E2" width="560" border="1" align="center">
   <tr bgcolor="#000033">
     <td width="133" height="31"><span class="style1">Name	</span></td>
     <td width="411"><span class="style1">Feedbacks </span></td>
   </tr>
   
   <?php 
	$sql = "select * from  feedback  ";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
  
	?>	
   <form action="" method="post">
   <tr>
     <td height="30"><?php echo $row['name'] ?></td>
	   <td><?php echo $row['description'] ?></td>
   </tr>
   </form>
   	<?php }
	}
	 ?>
</table>
 
</body>
</html>
