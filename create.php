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
   <li><a href="admin.php">Home</a></li>
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
	 <font size="2"><a href="logout.php" id="login">Logout</a></font>
	 
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
<a href="upload.php" link="white" >Upload Module</a></font></b></td>
</tr>

<tr>
<td width="110" height="20"><b><font color="white">
<a href="#" link="white" >Generate Report </a></font></b></td>
</tr>
<tr>
 <td width="150" height="20">
 <a href="changepassword.php" id="drop"><b>Change Password</b></a></td>
</tr>
<tr>
 <td width="150" height="20">
 <a href="create.php" id="drop"><b>Create User account</b></a></td>
</tr>

<tr>
 <td width="150" height="20">
 <a href="download2.php" id="drop"><b>Download Assignment</b></a></td>
</tr>
<tr>
 <td width="150" height="20">
 <a href="viewcomment.php" id="drop"><b>View Comments</b></a></td>
</tr>
<tr>
 <td width="150" height="20">
 <a href="manageuser.php" id="drop"><b>Manage User Account</b></a></td>
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
<br><br>
<h2 align="center">Create Account page</h2>
<br>


<script type='text/javascript'>
function formValidation(){
//assign the fields
       var fname=document.getElementById('fname');
		var lname=document.getElementById('lname');
	var phone_no = document.getElementById('phone_no');
	var username = document.getElementById('username');
	var password = document.getElementById('password');
if(isAlphabet(fname, "please enter Your First name in letters only")){
if(lengthRestriction(fname, 3, 30,"for your First name")){
if(isAlphabet(lname, "please enter Your Last name in letters only")){
if(lengthRestriction(lname, 3, 30,"for your Last name")){
if(lengthRestriction(password, 3, 10,"for your Password")){
if(lengthRestriction(username, 3, 25,"for your username")){
if(lengthRestriction(phone_no, 10, 13,"for your Phone number")){
	return true;
	}}}}
	}
	}
	}
	
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
<?php
if(isset($_POST['save']))
 {
 $fname=$_POST['fname'];
 $lname=$_POST['lname'];
 $user_id=$_POST['user_id'];
 $phone_no=$_POST['phone_no'];
  $username=$_POST['username'];
   $password=$_POST['password'];
  $actype=$_POST['actype'];
mysql_select_db("my_db", $conn);
						
$sql="INSERT INTO account (fname, lname ,User_Id,phone,username,password,accounttype)
VALUES
('$fname','$lname','$user_id','$phone_no','$username','$password','$actype')";

if (!mysql_query($sql,$conn))
  {
 echo'<p class="wrong">your detail is not correct</p>';
  }
  else
  {
echo'<p class="success">Successfully created!!</p>';
echo' <meta content="4;create.php" http-equiv="refresh" />';
}}
mysql_close($conn)

?>
<form action="create.php" method="POST" onsubmit='return formValidation()'>
<table style="border:1px solid #336699;width:350px;height:350px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr><td><font color="red">*</font>First Name</td><td><input type="text" name="fname" required id="fname"/></td></tr>
<tr><td><font color="red">*</font>Last Name</td><td><input type="text" name="lname" required id="lname"/></td></tr>
<tr><td><font color="red">*</font>User ID</td><td><input type="text" name="user_id" required id="user_id"/></td></tr>
<tr><td><font color="red">*</font>Phone No</td><td><input type="text" id="phone_no" onKeyPress="return isNumberKey(event)" name="phone_no" required/></td></tr>
<tr><td><font color="red">*</font>User name</td><td><input type="text" id="username" name="username" required/></td></tr>
<tr><td><font color="red">*</font>Password</td><td><input type="password" id="password" name="password" required/></td></tr>
<tr><td><font color="red">*</font>Account Type</td><td>
<select name="actype" required>
<option value="admin">Administrator</option>
<option value="registrar">Registrar</option>
<option value="director">Director</option>
</select>

</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="save" value="Save"/></td>
</table>
</form>

</td>
<td width=150px>
<table border=0 width=150px height=500px>
<tr>
<td valign=top bgcolor=gray>
<h2><center>
<font color="black" face="monotype corsiva" size="5">DBU Continuing and distance Office  works for change!!</font><br>
<font color="white"><a href="debre.php"><img src="tot1.jpg" width="100"><a></center></h2>
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
<table align="center"><tr><td><font face="Times New Roman" color="blue" size="3">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;DBU CDE OFFICE &copy; 2006 E.C.
 &nbsp; &nbsp; &nbsp; &nbsp;

</font></td></tr></table>
</td>
</tr>
</table>
</body>
</html>