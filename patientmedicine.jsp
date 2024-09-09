<%@ page contentType="text/html; charset=iso-8859-1" language="java" import="java.sql.*" errorPage="" %>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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
.style3 {
	color: #CCFFFF;
	font-weight: bold;
}
.style6 {font-size: 18px}
.style7 {color: #FFFFFF; font-weight: bold; font-size: 18px; }
.style8 {color: #FFFFFF; font-size: 18px; }
-->
</style>
</head>

<body>
<%@ include file="db.jsp" %>
<%@ page import="java.util.Date"%>

<div align="center" class="style2">Prescribe Medicine  for Patient </div>
<form id="form1" name="form1" method="post" action="">
  <table width="523" border="0" align="center">
    <tr>
      <td width="130"><div align="right" class="style3 style6">
        <div align="left">Madicine List</div>
      </div></td>
      <td width="383"><textarea name="r1" cols="50" rows="10" id="r1"></textarea></td>
    </tr>
    <tr>
      <td><div align="right" class="style7">
        <div align="left">Tests</div>
      </div></td>
      <td><textarea name="r2" cols="50" rows="5" id="r2"></textarea></td>
    </tr>
    <tr>
      <td><div align="right" class="style7">
        <div align="left">Date</div>
      </div></td>
	  <% Date d=new Date(); %>
      <td><input name="r3" type="text" id="r5" size="50"  value="<%=    d.toString() %>"/></td>
    </tr>
    <tr>
      <td><div align="right" class="style8">
        <div align="left">Patient Name </div>
      </div></td>
      <td><input type="text" name="r4" value="<%= request.getParameter("p1") %>"/></td>
    </tr>
	<tr>
      <td><div align="right" class="style8">
        <div align="left">Patient id </div>
      </div></td>
      <td><input type="text" name="r5" value="<%= request.getParameter("p2") %>"/></td>
    </tr>
    <tr>
      <td><div align="left"></div></td>
      <td><input type="submit" name="Submit" value="Submit" />
      <input type="reset" name="Submit2" value="clear" /></td>
    </tr>
  </table>
</form>

<% 
if(request.getParameter("Submit")!=null){
String r1=request.getParameter("r1");
String r2=request.getParameter("r2");
String r3=request.getParameter("r3");
String r4=request.getParameter("r4");
String r5=request.getParameter("r5");

rst=stmt.executeQuery("select * from patient where id='"+r5+"' ");
if(rst.next()){


try{
int x=stmt.executeUpdate("insert into PrescribedMedicine (madicine,tests,date,patientid)  values('"+r1+"','"+r2+"','"+r3+"','"+r5+"')");
if(x!=0){
out.print("Medicine and tests Prescribed successfully");
}

}catch(Exception e){
out.print("error i adding patient");
}
}else{
out.print("No Such patient ID exist in the hospital ");
}

}


 %>
</body>
</html>
