<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
// Start the session
session_start();
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<?php include("conn.php");?>
<?php include("hometabs.html");?>
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
<style>




form {
  margin:0 auto;
  width:300px
}
input {
  margin-bottom:3px;
  padding:10px;
  width: 100%;
  border:1px solid #CCC
}
button {
  padding:10px
}
label {
  cursor:pointer
}
#form-switch {
  display:none
}
#register-form {
  display:none
}
#form-switch:checked~#register-form {
  display:block
}
#form-switch:checked~#login-form {
  display:none
}
</style>
	<link rel="stylesheet" href="Style_button_text.css">
    <style type="text/css">
<!--
.style2 {
	font-size: 24px;
	color: #FFFFFF;
}
.style10 {color: #CC9966}
.style13 {
	font-size: 36px;
	color: #000000;
}
.style15 {color: #000000; font-weight: bold; font-size: 18px; }
.style16 {color: #000099}
-->
    </style>
</head>

<body>

<p>
  <input type='checkbox' id='form-switch'>
</p>
<form id='login-form' action="" method='post'>
  <p align="center" class="style2 style13" style="font-weight:bold">&nbsp;</p>
  <p align="center" class="style13 style16" style="font-weight:bold"> Patient Login   </p>
  <table width="547" border="0">
    <tr>
      <td width="174" height="89"><span class="style15">Enter Patient name </span></td>
      <td width="363"><input type="text" placeholder="Patient Name" name="username" required /></td>
    </tr>
    <tr>
      <td height="76"><span class="style15">Enter Patient ID </span></td>
      <td><input type="password" placeholder="Patient ID" name="password" required /></td>
    </tr>
    <tr>
      <td height="44"><span class="style10"></span></td>
      <td><button type='submit' name="login">Login</button></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>

<?php 
if(isset($_POST['login'])){
$un=$_POST["username"];
$pw=$_POST["password"];
  
  
 
 $sql = "SELECT * FROM patient where name='$un' and id='$pw'";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
if($row = mysqli_fetch_assoc($retval)){ 
  $_SESSION["pid"]=$pw;
 echo '<script>alert("login Successfull");</script>';
 echo '<script>window.location.href = "patientviewdata.php";</script>';
 //end of while  
 }
}else{  
 echo '<script>alert("login Failed");</script>';
 
 } 
 
  
  }
?>




</body>
</html>
