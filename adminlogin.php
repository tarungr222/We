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
	background-image: url(images/h1.jpg);
	
 
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
.style3 {font-size: 24pt}
</style>
</head>

<body>

<input type='checkbox' id='form-switch'>
<form id='login-form' action="" method='post'>
  <p align="center" class="style3" style="font-weight:bold"> Admin Login   </p>
  
  
 
  <table width="446" border="0">
    <tr>
      <th width="156" height="58">Enter Username </th>
      <td width="280"><input type="text" placeholder="Username" name="username" required /></td>
    </tr>
    <tr>
      <th height="72">Enter Password </th>
      <td><input type="password" placeholder="Password" name="password" required /></td>
    </tr>
    <tr>
      <td height="44">&nbsp;</td>
      <td bordercolor="#00FFFF"><button type='submit' name="login">Login</button>
      <button type='reset' name="Reset">Reset</button></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>

<?php 
if(isset($_POST['login'])){
$un=$_POST["username"];
$pw=$_POST["password"];

  
  
 
 $sql = "SELECT * FROM login where username='$un' and password='$pw'";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
if($row = mysqli_fetch_assoc($retval)){ 

 echo '<script>alert("login Successfull");</script>';
 echo '<script>window.location.href = "beds.php";</script>';
 //end of while  
 }
}else{  
 echo '<script>alert("login Failed");</script>';
 
 } 
 
  
  }
?>




</body>
</html>
