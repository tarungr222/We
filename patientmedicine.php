
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
	background-image: url(images/p2.jpg);
	
 
  background-repeat: no-repeat;
  background-attachment: fixed;
   background-size: cover;

}
-->
</style>
<style type="text/css">
<!--
.style2 {
	color: #000000;
	font-weight: bold;
	font-size: 24px;
}
body {
	background-color: #8BACBD;
}
-->
</style>
</head>

<body>
<?php include("conn.php");?>
<?php include("doctortabs.html");?>

<div align="center" class="style2">Prescribe Medicine  for Patient </div>
<form id="form1" name="form1" method="post" action="">
  <table width="542" border="1" align="center">
    <tr>
      <td width="164"><div align="right"><strong>MadicineList</strong></div></td>
      <td width="244"><textarea name="r1" cols="50" rows="10" id="r1"></textarea></td>
    </tr>
    <tr>
      <td><div align="right"><strong>Tests</strong></div></td>
      <td><textarea name="r2" cols="50" rows="5" id="r2"></textarea></td>
    </tr>
    <tr>
      <td><div align="right"><strong>Date</strong></div></td>
	 
      <td><input name="r3" type="text" id="r5" size="50"  value="<?php  echo date("l jS \of F Y h:i:s A") ?>"/></td>
    </tr>
    <tr>
      <td><div align="right">Patient Name </div></td>
      <td><input type="text" name="r4" value="<?php  echo $_GET["p1"]; ?>"/></td>
    </tr>
	<tr>
      <td><div align="right">Patient id </div></td>
      <td><input type="text" name="r5" value="<?php  echo $_GET["p2"]; ?>"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Submit" />
      <input type="reset" name="Submit2" value="clear" /></td>
    </tr>
  </table>
</form>
<br />
<br />
<br />
<br />
<br />

 <?php 

if(isset($_POST['Submit']))
{
$r1=$_POST['r1'];

$r2=$_POST['r2'];
$r3=$_POST['r3'];
$r4=$_POST['r4'];
$r5=$_POST['r5'];



$sql2 = "insert into PrescribedMedicine (madicine,tests,date,patientid)  values('$r1','$r2','$r3','$r5')";  
if(mysqli_query($conn, $sql2)){ 
 ?>
  <script>
  alert("patient Madicine  added  Successfully");
  window.open("viewmypatients.php","_self");
  
  </script>
  
  
  
  <?php 
}else{ 
 
echo "Could not insert record: ". mysqli_error($conn);  
}  


 

}
?>



</body>
</html>
