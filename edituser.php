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
	
	
	<li><a href="feedback.php">Feed Back</a>
	</li>
	<li><a href="new.php">News</a>
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
<table   bgcolor="#2F4F4F" border="0"  width="200" height="860" class="menu-bar" align="center">
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
 <a href="#" id="drop"><b>Delete Student</b></a></td>
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
Manage User Account page

<?php
$ctrl = $_REQUEST['key'];
$query="SELECT * FROM account where User_Id='{$ctrl}'";

$result=mysql_query($query);
$count=mysql_num_rows($result);
if(!$result){
die("user not registered!".mysql_error());
}
if($count==1){
while($row=mysql_fetch_array($result)){
$r0=$row[0];
$r1=$row[1];
$r2=$row[2];
$r3=$row[3];
$r4=$row[4];
$r5=$row[5];
$r6=$row[6];
}
?>
  <form id="form1" method="POST" action="edituser.php"  onsubmit='return formValidation()'>
 <table valign='top' align="center">
<tr>
<tr><td>First Name:</td><td><input type='text' name='fname' value="<?php echo "$r0"?>"></td></tr>
<tr><td>Last Name:</td><td><input type='text' name='lname' value="<?php echo "$r1"?>"></td></tr>
<tr><td>User ID:</td><td bgcolor="red"><input  type='text' name='user_id' readonly="readonly" value="<?php echo "$r2"?>"></td></tr>
<tr><td>Phone No  :</td><td><input type='text' name='phone_no' value="<?php echo "$r3"?>"></tr></td>
<tr><td>User Name:</td><td><input type='text' name='username' value="<?php echo "$r4"?>"></tr></td>
<tr><td>Password:</td><td><input type='text' name='password' value="<?php echo "$r5"?>"></tr></td>
<tr><td>Account Type:</td><td><input type='text' name='actype' value="<?php echo "$r6"?>"></tr></td>
<tr><td colspan=2 align='center'><input type='submit' name='update' value='Save Changes' class="button_example"></tr></td>
</table>
 <?php
}
?>
 
 <?php
  if(isset($_POST['update']))
  {
  
	            $fname=$_POST['fname'];
				$lname=$_POST['lname'];
				$user_id=$_POST['user_id'];
				$phone_no=$_POST['phone_no'];
				$username=$_POST['username'];
				$password=$_POST['password'];
				$actype=$_POST['actype'];
										
  $update = mysql_query("update account set fname='$fname',lname='$lname',
	User_Id='$user_id', phone='$phone_no' ,username='$username',password='$password',accounttype='$actype'
  WHERE User_Id='{$user_id}'") or die(mysql_error());
 echo "<script>window.location='manageuser.php';</script>";
  }
  
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