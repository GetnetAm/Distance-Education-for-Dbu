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
<script language="javascript">
  function check()
  {
   if(document.getElementById("txt_username").value =="")
   {
   
    alert('first fill the text fields !!'); 
    document.getElementById("txt_username").focus();
    return false;
   }
   if(document.getElementById("txt_password").value =="")
   {
    alert('first fill the text fields !!');
    document.getElementById("txt_password").focus();
    return false;
   }
   if (isUcase(document.getElementById("txt_username").value) == false || isUcase(document.getElementById("txt_password").value) == false)
   {
    alert("Username and Password not match!!");
    document.getElementById("txt_password").value = "";
    document.getElementById("txt_username").focus();
    return false;
   }
  }
 </script>
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
	 <font size="2"><a href="logout.php" id="login">Logout</a>
	
	 </font>
	  
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

<tr>
<td width="110" height="20"><b><font color="white">
<a href="Changepassword.php" link="white" >Change Password</a></font></b></td>
</tr>
<tr>
 <td width="150" height="20">
 <a href="viewcomment.php" id="drop"><b>View Comment</b></a></td>
</tr>
<tr>
 <td width="150" height="20">
 <a href="viewcomment.php" id="drop"><b>Create User Account</b></a></td>
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
<script type='text/javascript'>
 function formValidation(){
//assign the fields
     
	var txt_username = document.getElementById('txt_username');
	
	if(emailValidator(txt_username,"check your e-mail format")){
	
	return true;
	}
return false;
		
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


	</script>
	<br><br><br>
	
	 <?php
$result = mysql_query("SELECT * FROM feedback");
print( "<table border='1' align='center' bgcolor='white'>");
print("<tr>");
print("<th>Name </th>");
print("<th>Gender </th>");
print("<th>E-Mail</th>");
print("<th>Comment</th>");


while($row = mysql_fetch_array($result))
  {
$ctrl = $row['Email'];
  print ("<tr>");
  print ("<td>" . $row['name'] . "</td>");
  print ("<td>" . $row['gender'] . "</td>");
  print "<td>" . $row['Email'] . "</td>";
  print "<td>" . $row['comment'] . "</td>";
 print("<td align = 'center' width = '1'><a href = 'delete_mail.php?key=".$ctrl."'><img src = 'remove.png' border = '0' title='Delete' onclick='isdelete();'></img></a>
		</td>");
  print( "</tr>");
  }
print("</table>");

mysql_close($conn);
?>

	
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