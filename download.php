<?php   
 session_start();
 include("connection.php");
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
   <li><a href="download.php">Home</a></li>
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
	<li><a href="new.php">News</a>
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
<table   bgcolor="#2F4F4F" border="0"  width="200" height="900" class="menu-bar" align="center">
<tr >
<td width="110" height="20"><b><font color="white">
<a href="download.php" link="white" >Download Module</a></font></b></td>
</tr>

<tr >
<td width="110" height="20"><b><font color="white">
<a href="assignmentsubmit.php" link="white" >Submit Assignment</a></font></b></td>
</tr>

<tr >
<td width="110" height="20"><b><font color="white">
<a href="changepassword.php" link="white" >Change Password</a></font></b></td>
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
<br><br><br>
<font color="#8A2BE2"><h3 align=center>  
Modules To be downloaded</h3></font>
<p align="center"><img src="download.GIF"></p>
<?php		
$result = mysql_query("SELECT * FROM module");
echo "<table id='vtable' style='width:500px;border:1px solid #336699;border-radius:10px;' align='center'><font color=white>
<tr>
<th bgcolor='#336699'><font color='white' size='2'>Module Name</th>
<th bgcolor='#336699'><font color=white size='2'>Department</th>
<th bgcolor='#336699'><font color=white size='2'>Term</th>
<th bgcolor='#336699'><font color=white size='2'>Year</th>
<th bgcolor='#336699'><font color=white size='2'>File</th>
</tr>";
echo'</font>';
while($row = mysql_fetch_array($result))
  {
  $files=$row['Filename'];
  print ("<tr>");
  print ("<td><font size='2'>" . $row['coursename'] . "</td>");
 print ("<td><font size='2'>" . $row['dept'] . "</td>");
 print ("<td><font size='2'>" . $row['term'] . "</td>");
	 print ("<td><font size='2'>" . $row['year'] . "</td>");
	  print ("<td><font size='2'>" ."<a href='module/$files'>Download</a>". "</td>");
    print ("</tr>");
  }

print( "</table>");
mysql_close($conn);
?>
</p>
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