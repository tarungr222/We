
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
	background-image: url(images/p3.jpg);
	
 
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
.style2 {
	font-size: 24px;
	font-weight: bold;
}
.style5 {
	font-size: 16px;
	font-weight: bold;
}
.style7 {font-size: 16; font-weight: bold; }
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
<?php include("pharmacytabs.html");?>
  <form action="" method="post" name="form1" id="form1">
    <table width="455" border="0" align="center">
      <tr>
        <td width="144"><span class="style7">Enter Patient name </span></td>
        <td width="207"><input name="s1" type="text" required/></td>
        <td width="23">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="style7">Enter Patient Id </span></td>
        <td><input name="s2" type="text" required/></td>
        <td><input name="search" type="submit" onclick="return validate()" value="search" /></td>
      </tr>
    </table>
  </form>
  <p>&nbsp;</p>
  <div align="center">
  <?php 
  if(isset($_POST['search'])){
  $s1=$_POST["s1"];
   $s2=$_POST["s2"];
	
  
	
  
 
     
     
	$sql = "select * from prescribedmedicine where   patientid='$s2' ";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 if($row = mysqli_fetch_assoc($retval)){  
  
	?>
     </p>
   <p><span class="style2">Prescribed Madicine</span></p>
</div>
  <table width="542" border="3" align="center" bordercolor="#000000" bgcolor="#FFFFFF">
    <tr>
      <td width="164"><div align="left" class="style5">Medicines</div></td>
      <td width="244"><?php echo $row['madicine'] ?></td>
    </tr>
    <tr>
      <td><div align="left" class="style5">Tests</div></td>
      <td><?php echo $row['tests'] ?></td>
    </tr>
    <tr>
      <td><div align="left" class="style5">Date</div></td>
      <td><?php echo $row['date'] ?></td>
    </tr>
    <tr>
      <td><div align="left" class="style5">Enter Total Billing Amunt </div></td>
      <td><form id="form2" name="form2" method="post" action="">
          <input name="id" type="hidden" value="<?php echo $s2 ?>" />
          <input type="number" name="s12" />
          <input type="submit" name="Submit" value="Submit" />
      </form></td>
    </tr>
  </table>
  <?php 
 }
 
 }
 ?>
  <?php 
 }
 ?>
  <?php 

if(isset($_POST['Submit']))
{
$r1=$_POST['s1'];
$id=$_POST['id'];

$r2='Purchased';


$sql2 = "update prescribedmedicine set status='$r2',totalprice='$r1' where patientid='$id'";  
if(mysqli_query($conn, $sql2)){ 
 ?>
<script>
  alert("Billing  done  Successfully");
  window.open("prescribedmadicine.php","_self");
  
  </script>
  ; 
  
  
  <?php 
}else{ 
 
echo "Could not insert record: ". mysqli_error($conn);  
}  


 

}
?>
  
  
</body>
</html>
