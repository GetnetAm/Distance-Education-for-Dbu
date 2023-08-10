
<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">
<script type="text/javascript">
function validate(form){
var file = form.file.value;
 var sid = form.sid.value;
var stname = form.stname.value;
var stdept = form.stdept.value;
var year = form.year.value;
var coursename=form.coursename.value;
var term=form.term.value;
  if (file.length ==0) {
  alert("please browse a file");
  return false;
  }

if (sid.length ==0) {
  alert("please enter sid");
  return false;
  }
if (stname.length ==0) {
  alert("please enter stname");
  return false;
  }
if (stdept.length ==0) {
  alert("please enter your dept");
  return false;
  }
if (year.length ==0) {
  alert("please enter your year");
  return false;
  }
if (coursename.length ==0) {
  alert("please enter your coursename");
  return false;
  }
 return true;
if (term.length ==0) {
  alert("please enter your term");
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
	 <font size="3px"><a href="logout.php" id="login">Logout</a>
	  </font>
	  
	 </div>
</td>
</tr>
<tr>
<td  height=500px width=150px bgcolor=black valign=top>
<table   bgcolor="#2F4F4F" border="0"  width="200" height="900" class="menu-bar" align="center">
<tr >
<td width="110" height="20"><b><font color="white">
<a href="download.php" link="white" >Download Module</a></font></b></td>
</tr>

<tr>
<td width="110" height="20"><b><font color="white">
<a href="assignmentsubmit.php" link="white" >Submit Assignment</a></font></b></td>
</tr>
<tr>
 <td width="150" height="20">
 <a href="changepassword.php" id="drop"><b>Change Password</b></a></td>
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
<td  valign="top" bgcolor="white">

<br><br>
<table bgcolor="#F0F8FF"  style="border:1px solid #336699;width:350px;height:350px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center"><tr><td>
<form action="studentassignment1.php" method="post"
enctype="multipart/form-data"  onSubmit="return validate(this);"><ul><br>
<ul><label for="filename">Filename:</label></ul> <br>
<input type="file" name="file" id="file" /> 
<ul><label for="studentId">StudentId:</lable></ul><br>
<input type="text" name="userid" size="30"/>
<ul><label for="studentName">studentName:</lable></ul><br>
<input type="text" name="stname" size="30"/></ul>
<ul>Department<br>
<select name="stdept">
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
</select>
<ul><label for="year">year</lable></ul><br>
<input type="text" name="year" size="30"/><br>
<ul><label for="CourseName">CourseName</lable></ul><br>
<input type="text" name="coursename" size="30"/><br>
<ul><label for="Term">Term</lable></ul><br>
<input type="text" name="term" size="30"/><br>
<input type="submit" name="submit" value="Submit" />
<input type="reset" name="submit" value="Reset" />
</ul>
</form></td></tr></table>





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