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
	 <font size="4px"><a href="login.php" id="login">Login</a>
	 <font size="4px"><a href="register.php" id="login">|Sign Up</a>
	 </font><font color="black">|</font>
	  <font size="4px"><a href="login2.php" id="login">Student Login</a>
	  
	 </div>
</td>
</tr>
<tr>
<td  height=500px width=150px bgcolor=black valign=top border="1">
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
 <a href="#" id="drop"><b>Contact Us</b></a></td>
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
<!--------body  ---><br><form action="" method="post" >
					 <?php
 $sel=mysql_query("SELECT * FROM module where dept='stdept' ");
			echo '<table border=1 style="width:500px;border:1px solid #336699;border-radius:10px;"><tr>';
			echo '<th bgcolor="#336699"><font color="white" size="2">coursename.</th><th bgcolor="#336699" ><font color="white" size="2">modulenum</th><th bgcolor="#336699"><font color="white" size="2">department.</th><th bgcolor="#336699"><font color="white" size="2">year.</th><th bgcolor="#336699"><font color="white" size="2">term.</th></tr>';
			$rowcolor=0;
			$aa=mysql_num_rows($sel);
			echo"<br><br>";
			while($row=mysql_fetch_array($aa)){
 print ("<tr>");
	 print ("<td border='1'><font size='2'>" . $row['coursename'] . "</td>");
	  print ("<td border='1'><font size='2'>" . $row['modulenum'] . "</td>");	
	 print ("<td border='1'><font size='2'>" . $row['dept'] . "</td>");
	  print ("<td border='1'><font size='2'>" . $row['year'] . "</td>");	
	 print ("<td border='1'><font size='2'>" . $row['term'] . "</td>");
	  
   
		
	  
  print ("</tr>");
  }
print( "</table>");
			?>
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
<p style="padding:10px">DBU Continuing and distance Office plays a great role 
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