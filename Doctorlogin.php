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
	background-image: url(images/h2.jpg);
	
 
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
.style4 {font-size: 16px; font-weight: bold; }
.style5 {font-size: 24px}
</style>
</head>

<body>


<form id='login-form' action="" method='post'>
  <p align="center" class="style5" style="font-weight:bold">Doctor Login   </p>

  <table width="448" border="0">
    <tr>
      <td width="129" height="71"><span class="style4">Enter Email</span> </td>
      <td width="309"><input type="text" placeholder="Email" name="username" required /></td>
    </tr>
    <tr>
      <td height="69"><span class="style4">Enter Password </span></td>
      <td><input type="password" placeholder="password" name="password" required /></td>
    </tr>
    <tr>
      <td height="85">&nbsp;</td>
      <td><button type='submit' name="login">Login</button></td>
    </tr>
  </table>
</form>

<?php 
if(isset($_POST['login'])){
$un=$_POST["username"];
$pw=$_POST["password"];

  
 
 $sql = "SELECT * FROM doctor where username='$un' and password='$pw'";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
if($row = mysqli_fetch_assoc($retval)){ 
  $_SESSION["did"]=$un;
 echo '<script>alert("login Successfull");</script>';
 echo '<script>window.location.href = "viewmypatients.php";</script>';
 //end of while  
 }
}else{  
 echo '<script>alert("login Failed");</script>';
 
 } 
 
  
  }
?>




</body>
</html>
