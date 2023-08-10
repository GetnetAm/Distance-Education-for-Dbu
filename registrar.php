<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
 } 
 else 
 {
 ?>

<script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>
<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">
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
   <li><a href="registrar.php">Home</a></li>
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
	
	
	<li><a href="#">Feed Back</a>
	</li>
	<li><a href="#">News</a>
	</li>
	</li>
	
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
	 <font size="2"><a href="logout.php" id="login">Logout</a> </font>
	 
	 </div>
</td>
</tr>
<tr>
<td  height=500px width=150px bgcolor=black valign=top>
<table   bgcolor="#2F4F4F" border="0"  width="200" height="900" class="menu-bar" align="center">
<tr >
<td width="110" height="20"><b><font color="white">
<a href="registrar.php" link="white" >Register student</a></font></b></td>
</tr>

<tr >
<td width="110" height="20"><b><font color="white">
<a href="changepassword.php" link="white" >Change Password</a></font></b></td>
</tr>
<tr >
<td width="110" height="20"><b><font color="white">
<a href="viewapplication.php" link="white" >View Applicants</a></font></b></td>
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
<!--------body  --->
<table align="center"><tr><td><h2><font color="#0000CD">Register Here</font></h2></td></tr></table>
	<form method="post" action="" name="aform"  onsubmit='return formValidation()'>
<table bgcolor="#F0F8FF" style="border:1px solid #336699;width:350px;height:350px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<input type="hidden" name="status" value="4"/>
<tr><td><font face="verdana,arial" size="4"><font color="red">*</font>User Id:</font></td>
  <td><font face="verdana,arial" size="4"><input name="userid" type="text" id="userid" placeholder='User Id'></font></td></tr>
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
  <td><font face="verdana,arial" size="4"><input name="email" type="text" id="email" placeholder='Email'></font></td></tr>
 <tr><td><font face="verdana,arial" size="4"><font color="red">*</font>Password:</font></td>
  <td><font face="verdana,arial" size="4"><input name="pass" type="password" id="pass" placeholder='pasword'></font></td></tr>  
  
<tr><td><font face="verdana,arial" size="4"> <font color="red">*</font>department:</font></td>
 <td><font face="verdana,arial" size="4"><input name="department" type="text" id="department" placeholder='Department'></font></td></tr>
 <tr><td><font face="verdana,arial" size="4"> <font color="red">*</font>program:</font></td>
 <td><font face="verdana,arial" size="4"><input name="program" type="text" id="program" placeholder='program'></font></td></tr>

  
 <tr><td><font face="verdana,arial" size="4"><font color="red">*</font>phone No:</font></td>
  <td><font face="verdana,arial" size="4"><input name="phone" type="text" id="phone" placeholder='Phone Number'></font></td></tr>

<tr><td><font face="verdana,arial" size="4"></font></td>
  <td><font face="verdana,arial" size="4"><input value="Register" style="width:60%;height:30px;color:#0000CD;
					   text-transform:capitalize;Font-weight:bolder;font-size:15px";  type="submit" name='submitMain' Onclick="return check(this.form);"></font></td></tr>
</table>
</form>
<?php
 if(isset($_POST['submitMain']))
 {
mysql_select_db("my_db", $conn);

$sql="INSERT INTO student (User_Id,First_Name,Last_Name,Sex,Email,password,dept,program,Phone_No,status)
VALUES
('$_POST[userid]','$_POST[firstname]','$_POST[lastname]','$_POST[sex]','$_POST[email]','$_POST[pass]','$_POST[department]','$_POST[program]','$_POST[phone]','$_POST[status]')";

if (!mysql_query($sql,$conn))
  {
 echo'<font color=red>your detail is not correct</font>';
  }
  else
  {
echo"<img src='correct.jpg' width='40' height='30'>Successfully Registered !!";
}}
mysql_close($conn)


?>




</td>

<td width=150px>
<table border=0 width=150px height=500px>
<tr>
<td valign=top bgcolor=gray>
<h2><center>
<font color="black" face="monotype corsiva" size="5">"DBU Continuing and distance Office  works for change!!"</font><br>
<font color="white"><a href="debre.php"><img src="tot1.jpg" width="100"><a></center></h2>
<font color="black" face="arial" class="just">
<p align="justify">DBU Continuing and distance Office plays a great role 
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
<table align="center"><tr><td><font face="Times New Roman" color="blue" size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DBU CDE OFFICE &copy; 2006 E.C.
 &nbsp; &nbsp; &nbsp; &nbsp;

</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>