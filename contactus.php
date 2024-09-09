<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style type="text/css">
body, html {
  height: 100%;
}
<!--
body {
	background-image: url(images/h6.jpg);
	
 
  background-repeat: no-repeat;
  background-attachment: fixed;
   background-size: cover;

}
-->
</style>
<style>
.mySlides {display:none;}
.style1 {font-size: 24px; color:white;}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}
.style2 {
	font-size: 24px;
	font-weight: bold;
}
</style>
<body> 
<?php include("hometabs.html");?>
<div class="w3-container">
  <h2 align="center" class="style2">Contact us </h2>
  <p>&nbsp;</p>
</div>
<table width="1185" height="258" border="0" align="center" bordercolor="#0099FF">
<tr>
  <td width="635"><div align="justify">
    <blockquote>
      <p>&nbsp;</p>
      <p align="center" class="style1"><strong>E-Health Care</strong></p>
      <p align="center" class="style1">&nbsp;</p>
      <p align="center" class="style1"><strong>Bangalore</strong></p>
      <p align="center" class="style1"><strong>Phone:8660819574</strong></p>
      <p align="center" class="style1"><strong>Email: ehealthcare@gmail.com </strong></p>
    </blockquote>
  </div></td>
  <td width="649" bordercolor="#6699FF">

	  <div class="w3-content w3-section" style="max-width:500px"  >   
        <img class="mySlides w3-animate-top" src="images/slider-01.jpg" style="width:100%">
        <img class="mySlides w3-animate-bottom" src="images/slider-02.jpg" style="width:100%">
    <img class="mySlides w3-animate-top" src="images/slider-03.jpg" style="width:100%">	  </div></td>
</tr>
</table>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2500);    
}
</script>

</body>
</html>
