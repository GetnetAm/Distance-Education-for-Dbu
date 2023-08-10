<?php   
 session_start();
 include("connection.php");
?>

<html>
<head>
<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
<link style="text/css" href="3.css" rel="stylesheet">
<link style="text/css" href="3.css" rel="stylesheet">

<script language="javascript">
  function check()
  {
   if(document.getElementById("Email").value =="")
   {
    alert('first fill Email text field !!'); 
    document.getElementById("Email").focus();
    return false;
   }
   if(document.getElementById("firstname").value =="")
   {
    alert('first fill firstname text field !!');
    document.getElementById("firstname").focus();
    return false;
   }
      if(document.getElementById("lastname").value =="")
   {
    alert('first fill last name text field !!');
    document.getElementById("lastname").focus();
    return false;
   }
      if(document.getElementById("city").value =="")
   {
    alert('first fill city text field!!');
    document.getElementById("city").focus();
    return false;
   }
      if(document.getElementById("phone").value =="")
   {
    alert('first fill phone text field !!');
    document.getElementById("phone").focus();
    return false;
   }
      if(document.getElementById("username").value =="")
   {
    alert('first fill username text field !!');
    document.getElementById("username").focus();
    return false;
   }
      if(document.getElementById("password").value =="")
   {
    alert('first fill password text field !!');
    document.getElementById("password").focus();
    return false;
   }
   
  }
 </script>
</head>
<body>
<table align=center width=1000px  border=1 bgcolor="#ffebcd">
<tr>
<td height=20px  colspan=4>

<img src="logo.GIF" width="1000px" height="140" >
</td>

</tr>
<tr>
<td  height=20px colspan=3 bgcolor=tan >
  <div id="dropdown">
   <li><a href="index.php">Home</a></li>
   <li><a href="#">Departments</a>
      <ul>
	        <li><a href="#">Civil Engineering</a>
		<li><a href="#">&nbsp;Information Technology</a>
		<li><a href="#">&nbsp;&nbsp;Accounting</a>
		<li><a href="#">&nbsp;&nbsp;Economics</a></li>
		<li><a href="#">&nbsp;&nbsp;Management</a>
		<li><a href="#">&nbsp;&nbsp;Nursing</a>
		<li><a href="#">&nbsp;&nbsp;English</a>
        <li><a href="#">&nbsp;&nbsp;Chemistry</a>
        <li><a href="#">&nbsp;&nbsp;Biology</a>

	  </ul>
	</li>
	
	
	<li><a href="feedback.php">Feed Back</a>
	</li>
	<li><a href="new.php">News</a>
	</li>
	</li>
	
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 <font size="2"><a href="login.php" id="login">Login</a>
	 <font size="2"><a href="register.php" id="login">|Sign Up</a>
	</font>
	  &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp;
	 </div>
</td>
</tr>
<tr>
<td  height=500px width=150px bgcolor=black valign=top>
<table   bgcolor="#2F4F4F" border="0"  width="200" height="900" class="menu-bar" align="center">
<tr >
<td width="110" height="20"><b><font color="white">
<a href="about.php" link="white" >About Us</a></font></b></td>
</tr>

<tr>
<td width="110" height="20"><b><font color="white">
<a href="director.php" link="white" >About office director </a></font></b></td>
</tr>
<tr>
 <td width="150" height="20">
 <a href="academic.php" id="drop"><b>Statistical Information</b></a></td>
</tr>

<tr>
 <td width="150" height="20">
 <a href="#" id="drop"><b>Photo Gallery</b></a></td>
</tr>    
<tr>
<td>
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

    </td>
   </tr>
   </table>
</td>
<td  valign="top">
<script type='text/javascript'>
function formValidation(){
//assign the fields
        var Email = document.getElementById('Email');
		var firstname=document.getElementById('firstname');
	var lastname= document.getElementById('lastname');
	var city = document.getElementById('city');
	var phone = document.getElementById('phone');
	var username = document.getElementById('username');
	var password = document.getElementById('password');

if(isAlphabet(firstname, "please enter Your First name in letters only")){
if(lengthRestriction(firstname, 3, 30,"for your First name")){
if(isAlphabet(lastname, "please enter Your Last name in letters only")){
if(lengthRestriction(lastname, 3, 30,"for your Last name")){
if(emailValidator(Email,"check your E-mail format")){

if(isAlphanumeric(password,"Please Enter Correct Password")){
if(lengthRestriction(password, 3, 8,"for your Password")){
if(isAlphanumeric(username,"Please Enter Correct Password")){
if(lengthRestriction(username, 3, 25,"for your username")){
if(isNumeric(phone, "please enter Number only For Mobile Phone")){
if(lengthRestriction(phone, 10, 15,"for your Phone number")){
	return true;
	}}}}
	}
	}
	}}
	}}}
	
return false;
		
}	
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter between " +min+ " and " +max+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
	</script>
	<br><br><br><br>
	<table align="center"><tr><td><h2><font color="#0000CD">Application Form For Students</font></h2></td></tr></table>
	<form method="post" action="" name="aform"  onsubmit='return formValidation()'>
<table bgcolor="#F0F8FF"  style="border:1px solid #336699;width:350px;height:350px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<input type="hidden" name="status" value="4"/>
<tr><td><font face="verdana,arial" size="4"><font color="red">*</font>First Name:</font></td>
  <td><font face="verdana,arial" size="4"><input name="firstname" type="text" id="firstname" placeholder='First Name'></font></td></tr>
<tr><td><font face="verdana,arial" size="4"><font color="red">*</font>Last Name:</font></td>
  <td><font face="verdana,arial" size="4"><input name="lastname" type="text" id="lastname" placeholder='Last Name'></font></td></tr>
  <tr><td><font face="verdana,arial" size="4"><font color="red">*</font>Sex:</font></td>
  <td><font face="verdana,arial" size="4">
  <select name="sex">
  <option>male</option>
  <option>female</option>
  </select>
  </font></td></tr>
  <tr><td><font face="verdana,arial" size="4"><font color="red">*</font>Email:</font></td>
  <td><font face="verdana,arial" size="4"><input name="email" type="text" id="Email" placeholder='Email'></font></td></tr>
 <tr><td><font face="verdana,arial" size="4"><font color="red">*</font>Password:</font></td>
  <td><font face="verdana,arial" size="4"><input name="pass" type="password" id="pass" placeholder='pasword'></font></td></tr>  
  
<tr><td><font face="verdana,arial" size="4"> <font color="red">*</font>department:</font></td>
 <td><font face="verdana,arial" size="4"><input name="department" type="text" id="department" placeholder='Department'></font></td></tr>
 <tr><td><font face="verdana,arial" size="4"> <font color="red">*</font>program:</font></td>
 <td><font face="verdana,arial" size="4"><input name="program" type="text" id="program" placeholder='program'></font></td></tr>

  
 <tr><td><font face="verdana,arial" size="4"><font color="red">*</font>phone No:</font></td>
  <td><font face="verdana,arial" size="4"><input name="phone" type="text" id="phone" onKeyPress="return isNumberKey(event)" placeholder='Phone Number'></font></td></tr>

<tr><td><font face="verdana,arial" size="4"></font></td>
  <td><font face="verdana,arial" size="4"><input value="Apply" style="width:60%;height:30px;color:#0000CD;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px";  type="submit" name='submitMain' Onclick="return check(this.form);"></font></td></tr>
</table>
</form>

<?php
 if(isset($_POST['submitMain']))
 {


mysql_select_db("my_db", $conn);

$sql="INSERT INTO application (First_Name, Last_Name ,Sex,Email,password,dept,program,Phone_No,status)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[sex]','$_POST[email]','$_POST[pass]','$_POST[department]','$_POST[program]','$_POST[phone]','$_POST[status]')";

if (!mysql_query($sql,$conn))
  {
 echo'<font color=red>your detail is not correct</font>';
  }
  else
  {
echo"<img src='correct.jpg' width='40' height='30'>Successfully applied !!";
echo' <meta content="4;create.php" http-equiv="refresh" />';
}}
mysql_close($conn)


?>

	

<td width=150px>
<table border=0 width=150px height=500px>
<tr>
<td valign=top bgcolor=gray>
<h2><center>
<font color="black" face="monotype corsiva" size="5">DBU Continuing and distance Office  works for change!!</font><br>
<font color="white"><a href="#"><img src="tot1.jpg" width="100"><a></center></h2>
<font color="black" face="arial" class="just">
<p style="padding:5px;">DBU Continuing and distance Office plays a great role 
in producing a well knowledgeable citizen
 for the development of our country.</font>
</td>
</tr>
<tr>
<td >

<marquee direction="up"><font face="Lucida Calligraphy" color="black" size="4">
<center>DBU CDE OFFICE!!!</center></font></marquee></td></tr>
<tr>
<td bgcolor="white"><img src="DSC01924.JPG" width="200" height="260"></font></h3>




</td>
</tr>
</table>

</td>
</tr>
<tr>
<td colspan=3 bgcolor=gray>
<table align="center"><tr><td><font face="Times New Roman" color="blue" size="3">&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DBU CDE OFFICE &copy; 2006 E.C.
 &nbsp; &nbsp; &nbsp; &nbsp;

</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>