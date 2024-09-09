
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php
// Start the session
session_start();
?>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
body {
	background-color: #000099;
	
}
.style1 {color: #000033}
.style2 {
	font-size: 24px;
	font-weight: bold;
}
-->
</style>

<script type="text/javascript" >
function validate(){
var x=document.forms["form1"]["s1"].value;
var y=document.forms["form1"]["s2"].value;
if(x==""){
alert(" name cannot be blank");
return false;
}else if(y==""){
alert("alias name cannot be blank");
return false;

}else{
return true;
}

}



</script>



</head>

<body>

<?php include("conn.php");?>
<?php include("patienttabs.html");?>

  <?php 
  $pid=$_SESSION["pid"];
  echo $pid;
  
	$sql = "select * from patient where   id='$pid' ";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 if($row = mysqli_fetch_assoc($retval)){  
  
	?>	
  
	
  
 <table width="387" border="1" align="center">
   <tr>
     <td width="138" bgcolor="#CCCCCC"><div align="left"><strong>Name</strong></div></td>
     <td width="233" bgcolor="#FFFFFF"><span class="style1"><?php echo $row['name'] ?></span></td>
   </tr>
   <tr>
     <td bgcolor="#CCCCCC"><div align="left"><strong>Suffering from </strong></div></td>
    <td bgcolor="#FFFFFF"><span class="style1"><?php echo $row['diesease'] ?></span></td>
   </tr>
   <tr>
     <td bgcolor="#CCCCCC"><div align="left"><strong>Gender</strong></div></td>
      <td bgcolor="#FFFFFF"><span class="style1"><?php echo $row['gender'] ?></span></td>
   </tr>
   <tr>
     <td bgcolor="#CCCCCC"><div align="left"><strong>Address</strong></div></td>
    <td bgcolor="#FFFFFF"><span class="style1"><?php echo $row['address'] ?></span></td>
   </tr>
   <tr>
     <td bgcolor="#CCCCCC"><div align="left"><strong>Height </strong></div></td>
       <td bgcolor="#FFFFFF"><span class="style1"><?php echo $row['height'] ?></span></td>
   </tr>
   <tr>
     <td bgcolor="#CCCCCC"><div align="left"><strong>Weight</strong></div></td>
    <td bgcolor="#FFFFFF"><span class="style1"><?php echo $row['weight'] ?></span></td>
   </tr>
   <tr>
     <td bgcolor="#CCCCCC"><div align="left"><strong>age</strong></div></td>
    <td bgcolor="#FFFFFF"><span class="style1"><?php echo $row['age'] ?></span></td>
   </tr>
   <tr>
     <td bgcolor="#CCCCCC"><div align="left"><strong>Gardian</strong></div></td>
 <td bgcolor="#FFFFFF"><span class="style1"><?php echo $row['gardien'] ?></span></td>
   </tr>
</table>


 <div align="center">
   <p>
     <?php 
 }
 
 }
 ?>
     
     
     
     <?php 

	$sql = "select * from prescribedmedicine where   patientid='$pid' ";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 if($row = mysqli_fetch_assoc($retval)){  
  
	?>
   </p>
   <p><span class="style2">Prescribed Madicine</span></p>
</div>
 <table width="542" border="1" align="center">
   <tr>
     <td width="164"><div align="left"><strong>Medicines</strong></div></td>
     <td width="244"><?php echo $row['madicine'] ?></td>
   </tr>
   <tr>
     <td><div align="left"><strong>Tests</strong></div></td>
     <td><?php echo $row['tests'] ?></td>
   </tr>
   <tr>
     <td><div align="left"><strong>Date</strong></div></td>
     <td><?php echo $row['date'] ?></td>
   </tr>
   <tr>
     <td><div align="left"><strong>Purchase Status</strong></div></td>
     <td><?php echo $row['status'] ?></td>
   </tr>
    <tr>
     <td><div align="left"><strong>Total Bill Amount</strong></div></td>
     <td><?php echo $row['totalprice'] ?></td>
   </tr>
</table>

  
 <?php 
 }
 
 }
 ?>
 
 
 
 
  
  
  
  
  
  
  
  
</body>
</html>
