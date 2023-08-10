<?php
	include("connection.php");
     session_start();	
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
<tr>\\fl\a\a\p.....
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
	 <font size="3px" color="blue"><a href="login.php" id="login">Login</a></font>
	 <font size="3px" color="blue"><a href="register.php" id="login">|Sign Up</a>
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
 <a href="academic.php" id="drop"><b>Staff Stastical Information</b></a></td>
</tr>

  
<tr>
<td>

    </td>
   </tr>
   </table>
</td>
<td  >
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
		
<form action="login.php" method="post" >
<table bgcolor="#F0F8FF"  style="border:1px solid #336699;width:350px;height:350px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
<tr>
<td colspan=2 align=center><b><font color="#0000CD" size="6px">LOGIN FORM</font></b></td>
</tr>
<tr>
<td><font color=red> * </font><font size='5px'>Username:</font></td><td><input type="text" name="mail" value="" size="20%" id="txt_username" placeholder="Username"></input></td>
</tr>
<tr>
<td><font color=red> * </font> <font size='5px'>Password:</font></td><td>
<input type="password" name="pass" value="" size="20%" id="txt_password" placeholder="Password"></input></td>
</tr>
<tr><td colspan=2 align=center><input type='submit' value='login' name='submitMain' Onclick="return check(this.form);"/>
<input type='reset' value='Reset'/></td></tr>

</table>	
</form>
 <?php
 if(isset($_POST['submitMain']))
 {
  $acc=$_POST['actype'];
   $user =$_POST['mail'];
   //$_SESSION['mail']=$_POST['mail'];
   $password=$_POST['pass'];

 
    //$_SESSION['pass']=$_POST['pass'];
   $query = "SELECT * FROM  account WHERE 	username= '{$user}' AND password= '{$password}';";
   $result=mysql_query($query);

   $rowCheck = mysql_num_rows($result);
		
		$row=mysql_fetch_array($result); 
		 if($row['status']==1){ 
	
		$_SESSION['user_id']=$user;
		
        echo "<script>window.location='admin.php';</script>";
			} 
			else if($row['status']==2){ 
		$_SESSION['user_id']=$user;
		
        echo "<script>window.location='registrar.php';</script>";
			}
			else if($row['status']==3){ 
		$_SESSION['user_id']=$user;
           echo "<script>window.location='director.php';</script>";
			}
						else if($row['status']==4){ 
		$_SESSION['user_id']=$user;
           echo'<meta content="1;student.php" http-equiv="refresh" />';
			}
		else {
		
		echo"<p  class='wrong'>User Name & Password Not Match !!</p>"; 
		 echo'<meta content="5;login.php" http-equiv="refresh" />';
		}
}
mysql_close($conn);
?>

	
	




</td>
<td width=150px>
<table border=0 width=150px height=500px>
<tr>
<td valign=top bgcolor=gray>
<h2><center>
<br>
<font color="white"><a href="debre.php"><img src="tot1.jpg" width="150" height="150"><a></center></h2>

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