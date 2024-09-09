
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
	background-image: url(images/d3.jpg);
	
 
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
	cover:fixed;
}
.style1 {color: #000033}
.style2 {
	font-size: 24px;
	font-weight: bold;
}
.style3 {font-size: 24px}
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
<?php include("doctortabs.html");?>
  <form action="" method="post" name="form1" id="form1">
    <table width="455" border="0" align="center">
      <tr>
        <td width="156">Enter Patient name </td>
        <td width="175"><input type="text" name="s1" required/></td>
        <td width="110">&nbsp;</td>
      </tr>
      <tr>
        <td>Enter Patient id </td>
        <td><input type="text" name="s2" required/></td>
        <td><input type="submit" name="search" value="search" onclick="return validate()" /></td>
      </tr>
    </table>
  </form>
  <p align="center" class="style3">Patient Details </p>
  <div align="center">
  <?php 
  if(isset($_POST['search'])){
  $s1=$_POST["s1"];
   $s2=$_POST["s2"];
	$sql = "select * from patient where name='$s1' and  id='$s2' ";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 if($row = mysqli_fetch_assoc($retval)){  
  
	?>	
  
	
  
 <table width="452" border="1" align="center">
   <tr>
     <td width="128" bgcolor="#CCCCCC"><div align="left"><strong>Name</strong></div></td>
     <td width="398" bgcolor="#FFFFFF"><span class="style1"><?php echo $row['name'] ?></span></td>
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
 $s2=$_POST["s2"];
	$sql = "select * from prescribedmedicine where   patientid='$s2' ";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 if($row = mysqli_fetch_assoc($retval)){  
  
	?>
   </p>
   <p><span class="style2">Prescribed Madicine</span></p>
</div>
 <table width="542" border="1" align="center">
   <tr>
     <td width="164"><div align="right"><strong>Medicines</strong></div></td>
     <td width="244"><?php echo $row['madicine'] ?></td>
   </tr>
   <tr>
     <td><div align="right"><strong>Tests</strong></div></td>
     <td><?php echo $row['tests'] ?></td>
   </tr>
   <tr>
     <td><div align="right"><strong>Date</strong></div></td>
     <td><?php echo $row['date'] ?></td>
   </tr>
  
</table>

  
 <?php 
 }
 
 }
 ?>
 
 
 
 
  <?php 
 }
 ?>
  
  
  
  
  
  
  
</body>
</html>
