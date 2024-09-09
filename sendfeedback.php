<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<?php include("conn.php");?>
<?php include("patienttabs.html");?>
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
.style5 {font-size: 24px}
.style7 {font-size: 18px}
-->
</style></head>

<body><br />
<br />

<div align="center" class="style5" style="font-weight:bold">Feedback</div>
<br />

<form id="form1" name="form1" method="post" action="">
  <table width="303" border="0" align="center">
    <tr>
      <td width="112" height="47"><span class="style7">Enter Name  </span></td>
      <td width="181"><input type="text" name="r1" required/></td>
    </tr>
   
    <tr>
      <td height="57"><span class="style7">Feedback</span></td>
      <td><textarea name="r2"></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Submit" value="Send" /></td>
    </tr>
  </table>
</form>
<p>
  <?php 

if(isset($_POST['Submit']))
{
$r1=$_POST['r1'];
$r2=$_POST['r2'];



$sql2 = "insert into feedback(name,description) values('$r1','$r2')";  
if(mysqli_query($conn, $sql2)){ 
 ?>
  <script>
  alert("Feedback sent  Successfully");
  window.open("sendfeedback.php","_self");
  
  </script>
 
  
  
  <?php 
}else{ 
 
echo "Could not insert record: ". mysqli_error($conn);  
}  


 

}
?>
</p>

<center>
</center>
<p>&nbsp;</p>
</body>
</html>
