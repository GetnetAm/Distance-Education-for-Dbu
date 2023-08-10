
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
<script type="text/javascript">
function validate(form){
var file = form.file.value;
var Tname = form.Tname.value;
var modulename = form.modulename.value;
var modulenum=form.modulenum.value;
var dept = form.dept.value;
var term = form.term.value;
var year=form.year.value;
  if (file.length ==0) {
  alert("please browse a file");
  return false;
  }

if (Tname.length ==0) {
  alert("please enter teacher name");
  return false;
  }
if (modulename.length ==0) {
  alert("please enter module name");
  return false;
  }
if (modulenum.length ==0) {
  alert("please enter your modulenum");
  return false;
  }
if (dept.length ==0) {
  alert("please enter your dept");
  return false;
  }
if (term.length ==0) {
  alert("please enter term to upload module");
  return false;
}
if (year.length ==0) {
  alert("please enter year to upload module");
  return false;
  }
 return true;
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
	 <font size="2"><a href="logout.php" id="login">Logout</a>
	
	  
	 </div>
</td>
</tr>
<tr>
<td  height=500px width=150px bgcolor=black valign=top>

<table   bgcolor="#686868" border="0"  width="200" height="900" class="menu-bar" align="center">
<tr >
<td width="110" height="20"><b><font color="white">
<a href="upload.php" link="white" >Upload Module</a></font></b></td>
</tr>
<tr >
<td width="110" height="20"><b><font color="white">
<a href="download2.php" link="white" >Download Assignment</a></font></b></td>
</tr>
<tr >
<td width="110" height="20"><b><font color="white">
<a href="create.php" link="white" >Create User Account</a></font></b></td>
</tr>
<tr >
<td width="110" height="20"><b><font color="white">
<a href="manageuser.php" link="white" >Manage User Account</a></font></b></td>
</tr>

<tr>
<td width="110" height="20"><b><font color="white">
<a href="changepassword.php" link="white" >Change Password</a></font></b></td>
</tr>
<tr>
 <td width="150" height="20">
 <a href="academic.php" id="drop"><b>View Comments</b></a></td>
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
<form action="module.php" method="post"
enctype="multipart/form-data"  onSubmit="return validate(this);">
<table bgcolor="#F0F8FF"  style="border:1px solid #336699;width:350px;height:350px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center"><tr><td>
<ul><label for="file">Filename:</label></ul>
<input type="file" name="file" id="file" />
<ul><label for="TeacherName:">TeacherName:</label></ul>
<input type="text" name="Tname" size="30"/>
<ul><label for="modulename:">modulename:</label></ul>
<input type="text" name="modulename" size="30"/>
<ul><label for="moduleno:">moduleno:</label></ul>
<input type="text" name="modulenum" size="30"/>
<ul><label for="Deprtment">Deprtment:</ul>
<select name="dept" >
<option>choose your department</option>
<option>Sociology</option>
<option>Economics</option>
<option>Management</option>
<option>Accounting</option>
<option>Information Technology</option>
<option>Biology</option>
<option>Geography</option>
<option>English</option>
<option>Law</option>
</select></label>
<ul><label for="Term">Semister</label></ul>
<input type="text" name="term" size="30"/>
<ul><label for="year">year</label></ul>
<input type="text" name="year" size="30"/>
<ul><input type="submit" name="submit" value="Upload" />
<input type="reset" name="submit" value="cancel" /></ul>
</tr></td></table>
</form>











</div>
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