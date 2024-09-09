<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php include("conn.php");?>
<?php include("receptiontabs.html");?>
<title>Untitled Document</title>
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
<style type="text/css">
<!--
body,td,th {
	color: Black;
}
.style1 {
	font-size: 36px;
	font-weight: bold;
}
.style5 {font-size: 24px}
.style6 {
	color: #FF66FF;
	font-weight: bold;
}
.style7 {color: #6600FF}
.style9 {
	color: #0000FF;
	font-size: 18px;
}
.style10 {
	color: #0000FF;
	font-size: 36px;
}
.style12 {color: #0000FF; font-weight: bold; font-size: 18px; }
-->
</style></head>

<body><br />
<br />

<div align="center" class="style5 style10" style="font-weight:bold">Add New Patient</div>
<br />

<form id="form1" name="form1" method="post" action="">
  <table  border="0" align="center">
    <tr>
      <td width="169"><div align="left" class="style6 style9">Name</div></td>
      <td width="300" ><input name="r1" type="text" id="r1" size="50" required/></td>
    </tr>
    <tr>
      <td><div align="left" class="style12">Suffering from </div></td>
      <td><input name="r2" type="text" id="r2" value="" size="50" required="required" /></td>
    </tr>
    <tr>
      <td><div align="left" class="style12">Gender</div></td>
      <td><input name="r3" type="radio" value="male" checked="checked" />
        <strong>Male
        <input name="r3" type="radio" value="female" />
      Female</strong></td>
    </tr>
    <tr>
      <td><div align="left" class="style12">Address</div></td>
      <td><input name="r4" type="text" id="r4" value="" size="50" required="required" /></td>
    </tr>
    <tr>
      <td><div align="left" class="style12">Height </div></td>
      <td><input name="r5" type="text" id="r5" size="50" required/></td>
    </tr>
    <tr>
      <td><div align="left" class="style12">Weight</div></td>
      <td><input name="r6" type="text" id="r6" size="50" required/></td>
    </tr>
    <tr>
      <td><div align="left" class="style12">age</div></td>
      <td><input name="r7" type="text" id="r7" size="50" required/></td>
    </tr>
    <tr>
      <td><div align="left" class="style12">Gardian</div></td>
      <td><input name="r8" type="text" id="r8" size="50" required/></td>
    </tr>
    <tr>
      <td><div align="left" class="style12">Assaign to Doctor </div></td>
      <td><select name="r9" >
	 <?php 
	$sql = "select * from  doctor  ";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
  
	?>	
        <option><?php echo $row['username'] ?></option>
		<?php  } 
		}
		?>
      </select>      </td>
    </tr>
    <tr>
      <td><div align="left" class="style12">Visited Date  </div></td>
      <td><input name="r10" type="text" id="r10" value="<?php echo date("l jS \of F Y h:i:s A")?>" size="50" /></td>
    </tr>
	 <tr>
      <td><div align="left" class="style12">Enter Patient Email</div></td>
      <td><input name="r11" type="email" id="r11" value="" size="50" /></td>
    </tr>
    <tr>
      <td><span class="style7"></span></td>
      <td><input type="submit" name="Submit" value="Add Patient" />
      <input type="reset" name="Submit2" value="clear" /></td>
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
$r6=$_POST['r6'];
$r7=$_POST['r7'];
$r8=$_POST['r8'];
$r9=$_POST['r9'];
$r10=$_POST['r10'];
$r11=$_POST['r11'];


$sql2 = "insert into patient (name,diesease,gender,address,height,weight,age,gardien,doctor,joindate,emailid) values('$r1','$r2','$r3','$r4','$r5','$r6','$r7','$r8','$r9','$r10','$r11')";  
if(mysqli_query($conn, $sql2)){ 
 ?>
  <script>
  alert("Patient  added  Successfully");
  window.open("addpatient.php","_self");
  
  </script>
  ; 
  
  
  <?php 
}else{ 
 ?>
<script>
alert( "email id is already exist"); 
</script>
<?php   
}  


  //echo '<script>window.location.href = "employeeConfermation.php";</script>';

}
?>
</p>

<center> 
  <span class="style1">Patient list </span>
</center>
<table width="1189" border="3" align="center">
  <tr>
   <td width="90" bgcolor="#0000CC"><strong>Name</strong></td>
    <td width="106" bgcolor="#0000CC"><strong>Suffering from </strong></td>
    <td width="51" bgcolor="#0000CC"><strong>Gender</strong></td>
    <td width="174" bgcolor="#0000CC"><strong>Address</strong></td>
    <td width="64" bgcolor="#0000CC"><strong>Height</strong></td>
	<td width="56" bgcolor="#0000CC"><strong>Weight</strong></td>
	<td width="27" bgcolor="#0000CC"><strong>Age</strong></td>
	<td width="96" bgcolor="#0000CC"><strong>Gardian</strong></td>
	<td width="98" bgcolor="#0000CC"><strong>Doctor</strong></td>
	<td width="293" bgcolor="#0000CC"><strong>Visited Date</strong></td>
	<td width="64" bgcolor="#0000CC"><strong>ID</strong></td>
  </tr>
   <?php 
	$sql = "select * from  patient  ";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
  
	?>	
	
  <tr bgcolor="#999999">
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
