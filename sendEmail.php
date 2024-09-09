<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php 
use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 
 
require 'PHPMailer/Exception.php'; 
require 'PHPMailer/PHPMailer.php'; 
require 'PHPMailer/SMTP.php'; 


?>


<?php
// Start the session
session_start();
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
body, html {
  height: 100%;
}
<!--
body {
	background-image: url(images/h4.jpg);
	
 
  background-repeat: no-repeat;
  background-attachment: fixed;
   background-size: cover;

}
.style1 {font-size: 24px}
-->
</style>
</head>

<body>
<?php include("conn.php");?>
<?php include("doctortabs.html");?>

<p align="center" class="style1">Send Notification</p>
<form id="form1" name="form1" method="post" action="">
  <table  bgcolor="#EBEBEB"  width="463" height="262" border="0" align="center">
    <tr>
      <td width="90">From</td>
      <td width="357"><input type="text" name="s1" value="<?php echo $_SESSION["did"]; ?>" readonly="true"/></td>
    </tr>
    <tr>
      <td>To</td>
      <td>	<select name="s2" >
	 <?php
	 $doctor=$_SESSION["did"]; 
	$sql = "select emailid from  patient where doctor='$doctor'";  
$retval=mysqli_query($conn, $sql);  
  
if(mysqli_num_rows($retval) > 0){  
 while($row = mysqli_fetch_assoc($retval)){  
  
	?>	
        <option><?php echo $row['emailid'] ?></option>
		<?php  } 
		}
		?>
      </select> 
      </td>
    </tr>
    <tr>
      <td>Subject</td>
      <td><textarea name="s3" cols="50" rows="5" required></textarea></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="Send" value="Send" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
<p>
  <?php 
if(isset($_POST['Send'])){
$from=$_POST["s1"];
$to=$_POST["s2"];
$matter=$_POST["s3"];



 
$mail = new PHPMailer; 
 
$mail->isSMTP();                      // Set mailer to use SMTP 
$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;               // Enable SMTP authentication 
$mail->Username = 'ehealthcare2122@gmail.com';   // SMTP username 
$mail->Password = 'gwceldozovbsuiyi';   // SMTP password 
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, `ssl` also accepted 
$mail->Port = 587;                    // TCP port to connect to 
 
// Sender info 
$mail->setFrom('ehealthcare2122@gmail.com', 'E-healthcare'); 
$mail->addReplyTo('ehealthcare2122@gmail.com', 'E-healthcare'); 
 
// Add a recipient 
$mail->addAddress($to); 
 
//$mail->addCC('cc@example.com'); 
//$mail->addBCC('bcc@example.com'); 
 
// Set email format to HTML 
$mail->isHTML(true); 
 
// Mail subject 
$mail->Subject = 'Appointment Notification: From '.$from.':'; 
 
// Mail body content 
$bodyContent = '<h1>Doctors Appointment</h1>'.$matter; 

$mail->Body    = $bodyContent; 
 
// Send email 
if(!$mail->send()) { 
    echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo; 
} else { 
    //echo 'Message has been sent.'; 
	 ?>
  <script>alert("Notofication Sent successfully .");
  
  </script>
  <?php 
} 

  
  }
?>
  
  
</p>
</body>
</html>
