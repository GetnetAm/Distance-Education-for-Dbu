<?php
	include("connection.php");	
?>

<html>
<head>
<link style="text/css" href="3.css" rel="stylesheet">
<link style="text/css" href="3.css" rel="stylesheet">
  <script language="javascript">
  function check()
  {
   if(document.getElementById("name").value == "")
   {
    alert("please enter your full name !!");
    document.getElementById("name").focus();
    return false;
   }
     if(document.getElementById("email").value =="")
   {
    alert('Please Enter your email address !!');
    document.getElementById("email").focus();
    return false;
   }
     if(document.getElementById("comment").value =="")
   {
    alert('Please Enter Message !!');
    document.getElementById("comment").focus();
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
 <a href="#" id="drop"><b>Contact Us</b></a></td>
</tr>
  
<tr>
<td>


    </td>
   </tr>
   </table>
</td>
<td>
<!--------body  ---> 
<script language="javascript">
function formValidation(){
//assign the fields
        var name = document.getElementById('name');
		var email=document.getElementById('email');
	var comment = document.getElementById('comment');
	if(emailValidator(email,"check your E-mail format")){
if(isAlphabet(name, "please enter Your full name in letters only")){
if(lengthRestriction(name, 8, 30,"for your full name")){
if(lengthRestriction(comment, 3, 50,"for your comment")){


	return true;
	}}}
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
	
<form method="post" action="feedback.php" name="aform" onsubmit='return formValidation()'>
     <table bgcolor="#F0F8FF" valign="top" style="border:1px solid #336699;width:400px;height:350px;border-radius:15px;box-shadow:1px 10px 10px gray" align="center">
 <tr>
     <td><b><font size="4px">Name:</font></b></td><td>
	 <input name="name" size="32" id="name" type="text" placeholder="Your name"></td>
     </tr>
     <tr>
     <td><b><font size="4px">Gender:</font></b></td><td>
	 <select name="gender">
	 <option>male</option>
	 <option>female</option>
	 </select>
	 </td>
     </tr><tr>
     <td width="1000"><b><font size="4px">E-mail:</font></b></td><td><input name="email" size="32" id="email" type="text" placeholder="Enter Your Email"></td>
     </tr>
     <tr>
     <td colspan="2"><center><b><font size="4px">Write  Comment here</font></b></center></td>
     </tr>
     <tr>
     <td colspan="2"><center><textarea name="comment" id="comment" placeholder="Write comment here" cols="34" rows="7"></textarea></center></td>
     </tr>
     <tr>
     <td colspan="2"><center><input value="Send" name="sent" type="Submit" Onclick="return check(this.form);"/><input value="Reset" type="Reset"></center></td>
     </tr>
     </body></table>
</form>
<?php
 if(isset($_POST['sent']))
 {
define("DB_SERVER","localhost");
define("DB_USER","root");
define("DB_PASS","");
define("DB_NAME","cde");
$conn=mysql_connect(DB_SERVER,DB_USER,DB_PASS);
if (!$conn)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("cde", $conn);

$sql="INSERT INTO feedback (name,gender ,Email, comment )
VALUES
('$_POST[name]','$_POST[gender]','$_POST[email]','$_POST[comment]')";

if (!mysql_query($sql,$conn))
  {
  die('Error: ' . mysql_error());
  }
echo"<img src='correct.jpg' width='40' height='30'>Your comment has been Successfully sent!!";
echo' <meta content="4;feedback.php" http-equiv="refresh" />';
}
//mysql_close($conn)
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

</font>
</td>
</tr>
</table>
</body>
</html>