<?php
	include("connection.php");  
 session_start();
if(isset($_SESSION['user_id']))
 {
  $mail=$_SESSION['user_id'];
 } else {
 ?>

 <script>
  alert('You Are Not Logged In !! Please Login to access this page');
  alert(window.location='login.php');
 </script>
 <?php
 }
 ?>

<?php
$user_id=$_SESSION['user_id'];
$result=mysql_query("select * from account where user_id='$user_id'")or die(mysql_error);
$row=mysql_fetch_array($result);
$FirstName=$row['FNAME'];
$middleName=$row['mNAME'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Debre Berhan University Online Dormitory managent system</title>
<link rel="icon" type="image/png" href="img/dbuicon.png"/>
<link href="adminstyle.css" rel="stylesheet" type="text/css" media="screen" />
<link href="slideshow/js-image-slider.css" rel="stylesheet" type="text/css" />
<script src="slideshow/js-image-slider.js" type="text/javascript"></script>
<link href="aa.css" rel="stylesheet" type="text/css" media="screen" />
<script src="aa.js" type="text/javascript"></script>
<link href="src/facebox.css" media="screen" rel="stylesheet" type="text/css" />
<script src="lib/jquery.js" type="text/javascript"></script>
<script src="src/facebox.js" type="text/javascript"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('a[rel*=facebox]').facebox({
      loadingImage : 'src/loading.gif',
      closeImage   : 'src/closelabel.png'
    })
  })
</script>
</head>
<body>
<table  border="0" align="center">
<!--Header-->
<tr>
<td width="500px"></td>
<td><?php 
echo '<img src="img/people.png" width="40px" height="30px">&nbsp;'.'<font face="times new roman" color="white" size="3">'.$FirstName."&nbsp;".$middleName." ".'</font>';?></td>
<td id="logoutlink" align="center"><a href="logout.php" id="log">Logout</a></td>
</tr>
<tr>
<td width="750px" colspan="3" height="100px">
<p><a href="index.php"><img src="img/logo.png" align="left" width="150px" height="120px"></a><img src="img/admin.png" align="center" width="490px" height="120px"></p>
</td>
</tr>
<!--End Of Header-->
<!--Main menus-->
<tr>
<td colspan="3">
<div id="sse2">
        <div id="sses2"  >
         <ul>
         <li><a href="admin.php">Home</a></li>
         <li><a href="viewcom.php">View Comment</a></li>
         <li><a href="postinfo.php">Post Info</a></li>
		 <li><a href="viewstudenta.php">View StudentInfo</a></li>
         </ul>
         </div>
    </div>

</td>
</tr>
<!--End of main menus-->
<!--Slide shows-->
<!--End of Slide shows-->
<table align="center" id="insides" width="890px">
<tr>
<!--Sub menus-->
<td width="190px" height="500px" valign="top" id="insides">
<table>
<tr>
<th align="center" width="450px" height="25px" bgcolor="#336699"><font face="arial" color="white" size="2">Manage Record</font></th>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="#">Search</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="#">Update</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="#">Delete</a></td>
</tr>
</table>
<br>
<br>
<table border="0">
<tr>
<th width="300px" bgcolor="#336699" height="25px"><font face="arial" color="white" size="2">Manage Account</font></th>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="cua.php">Create User Account</a></td>
</tr>
<tr>
<td><img src="img/Picture2.png" width="10px">&nbsp;<a href="raccount.php">Remove User Account</a></td>
</tr>
</table>
<br>
<br>
<?php 
include "cal.php"; 
?>


</td>
<!--End Of Sub menus-->
<!--Body section-->
<td valign="top">
<br>
<br>
<font face="Arial" size="2px">Our Home page......</font>
  <div style="width:480px; height:510px; margin:0 auto; position:relative; border:2px solid rgba(0,0,0,0); -webkit-border-radius:5px; -moz-border-radius:5px; border-radius:25px; -webkit-box-shadow:0 0 18px rgba(0,0,0,0.4); -moz-box-shadow:0 0 18px rgba(0,0,0,0.4); box-shadow:0 0 18px rgba(0,0,0,0.4); margin-top:20px; color:#000000;">
<!--Form Validation-->
<script type='text/javascript'>
function formValidation(){
//assign the fields
    var firstname=document.getElementById('fname');
	var middlename= document.getElementById('mname');
    var lastname= document.getElementById('lname');
	var user_id = document.getElementById('user_id');
	var phone = document.getElementById('phone');
	var username = document.getElementById('username');
	var password = document.getElementById('password');
	var cpassword = document.getElementById('cpassword');
if(isAlphabet(firstname, "please enter Your First name in letters only")){
if(lengthRestriction(firstname, 3, 30,"for your First name")){
if(isAlphabet(middlename, "please enter Your Middle name in letters only")){
if(lengthRestriction(middlename, 3, 30,"for your Middle name")){
if(isAlphabet(lastname, "please enter Your Last name in letters only")){
if(lengthRestriction(lastname, 3, 30,"for your Last name")){
if(isAlphanumeric(user_id,"Please Enter the Correct ID No (!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(user_id, 3, 15,"for your ID No")){
if(isAlphanumeric(password,"Please Enter the Correct Password (!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(password, 5, 10,"for your Password")){
if(isAlphanumeric(cpassword,"Please Enter the Correct Confirmation Password (!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(cpassword, 5, 10,"for your Confirmation Password")){
if(isAlphanumeric(username,"Please Enter the Correct Username(!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(username, 5, 10,"for your username")){
if(isNumeric(phone, "please enter Number only For Phone Number")){
if(lengthRestriction(phone, 10, 10,"for your Phone number")){
	return true;
	}}}}
	}
	}
	}}
	}}}}
	}}}}
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
	var alphaExp = /^[0-9a-zA-Z\/]+$/;
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

  <form id="form1" name="login" method="POST" action="cua.php"  onsubmit='return formValidation()'>
 <div style="background-color:#336699;border-radius:5px;font-family:Arial, Helvetica, sans-serif; color:#000000; padding:5px; height:22px;"> 
 
 
 <div style="float:left;" ><strong><font color="white" size="2px">Create User Account</font></strong></div>
<div style="float:right; margin-right:20px; background-color:#cccccc; width:25px;  text-align:center; border-radius:10px; height:12px;"><a href="admin.php" title="Close"><img src="img/close_icon.gif"></a></div> 
 
 </div><br>
  <table width="426px" align="center">
	<tr>
	<td></td>
	<td><font color="red">*</font>&nbsp;<font size="1">required.</font></td>
	</tr>
         <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font> First Name:</td><td><input type="text" name="fname" id="fname" required x-moz-errormessage="Enter Your First name" ></td>
	     </tr>
		 <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font> Middle Name:</td><td><input type="text" name="mname" id="mname" required x-moz-errormessage="Enter Your Middle name" ></td>
	     </tr>
		 <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font> Last Name:</td><td><input type="text" name="lname" id="lname" required x-moz-errormessage="Enter Your Last name" ></td>
	     </tr>
		 <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font> User ID:</td><td><input type="text" name="user_id" id="user_id" required x-moz-errormessage="Enter Your Last name" ></td>
	     </tr>
		 <tr>
                
                <td class='para1_text' width="220px"><font color="red">*</font> Sex:</td>
                <td><input type="radio"  name="sex" value="male" title="choose either male by clicking here" required />
                  Male
                  <input type="radio" name="sex" value="female" title='choose female by clicking here' required />
                  Female</td>
              </tr>
		 <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font> Phone No.:</td>
		   <td><input type="text" name="phone" id="phone" value="+251" onKeyPress="return isNumberKey(event)" required x-moz-errormessage="Enter Your Phone Number" ></td>
	     </tr>
              <tr>
              <td style="padding-top:12px;"><font color="red" size="3">*</font>Access Type :</td>
              <td style="padding-top:12px;"><select name="actype" required maxlength="5">
                  <option ></option>
                  <option value='1'>Admin</option>
                  <option value='2'>Proctor manager</option>
                  <option value='3'>Proctor</option>
                </select></td>
              </tr>
			  <tr>
              <td style="padding-top:12px;"><font color="red" size="3"></font>&nbsp;&nbsp;&nbsp;Block Number :</td>
              <td><select value=" " name="block" id="keyword" title="Student ID"   class="txt_field">
            <option>
            <option>
            <?php
									$result = mysql_query("SELECT blockno FROM block ");
									while($row = mysql_fetch_array($result))
										{  
											echo '<option value="'.$row['blockno'].'">';
											echo $row['blockno'];
											echo '</option>';
										}
									?>
          </select></td><td>(Optional)</td>
			  
			 
              </tr>
			  
			  
			  
  
         <tr>
	       <td class='para1_text' width="220px"><font color="red">*</font> Username:</td><td><input type="text" name="username" required x-moz-errormessage="Enter Username" ></td>
	     </tr>
		 <tr>
	       <td class='para1_text'><font color="red">*</font> Password:</td><td><input type="password" name="password" required x-moz-errormessage="Enter password" id="username"></td>
	     </tr>
		 <tr>
	       <td class='para1_text' ><font color="red">*</font> Confirm Password:</td>
		   <td><input type="password" name="confirmpassword" required x-moz-errormessage="Re-enter password" id="cpassword"></td>
	     </tr>
<tr>
	<br><br><br>
	
	<td colspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="condition" value="checkbox" style="width: 13px;" required x-moz-errormessage="Please check on agree" /> I agree the <a rel="facebox" href="terms_condition.php">terms and condition</a> of this site</td>
	</tr><tr>
	<td>&nbsp;</td>
    <td ><input type="submit" name="save" value="Save" class="button_example"/></td>
  </tr>
  
  
</table> 
  </form>

  
  <?php
 if(isset($_POST['save']))
 {
 $level=$_POST['actype'];
 $block=$_POST['block'];
 $password=md5($_POST['password']);
 $cpassword=md5($_POST['confirmpassword']);
 $query="SELECT * FROM users where username='$_POST[username]'";
$resultw=mysql_query($query);
$count=mysql_num_rows($resultw);
if($count==1){
while($row=mysql_fetch_array($resultw)){
$user=$row[8];
}
if($user==$_POST['username'])
{
echo'  <p align="center"><font color="red" size="3">
<img src="img/error.png">&nbsp;&nbsp;User Name is used by another user</font></p></p>';
echo'<meta content="3;cua.php" http-equiv="refresh" />';
}
}
else
{
if($password==$cpassword)
{
$sql="INSERT INTO users (fname,mname,lname,user_id,sex,level,block,phone_no,username ,password,confirmpassword)
VALUES
('$_POST[fname]','$_POST[mname]','$_POST[lname]','$_POST[user_id]','$_POST[sex]','$_POST[actype]','$_POST[block]','$_POST[phone]','$_POST[username]','$_POST[password]','$_POST[confirmpassword]')";

if (!mysql_query($sql,$conn))
  {
         echo'  <p align="center"><font color="red" size="3"><img src="img/error.png">&nbsp;&nbsp;Already Registered</font></p></p>';
  die('Error: '.'Already Exist'.mysql_error());
  }
  else
  {
echo'<meta content="1;thank_you.php" http-equiv="refresh" />';
}
}
else
{
echo'<br><br><br>';
       echo'  <p align="center"><font color="red" size="3"><img src="img/error.png">&nbsp;&nbsp;Your Password Does not match!! </font></p>        </p>';
	   echo'<meta content="3;cua.php" http-equiv="refresh" />';
	   }
	   
	   }
}
mysql_close($conn)
?>    
  </div>                 


</td>
</tr>
</table>
<!--End Body of section-->
</table>
<!--Footer-->

<div id="sample">
      <footer>
	  <br>
	  <div align="right">
<a href="#top"><img src="img/arrow_up.png" width="40px" title="Scroll Back to Top"></a>
</div>
        <p align="center"><font face="Times New Roman" color="white" size="2">Copyright &copy 2014 Debre Berhan University  ODMS. All rights reserved.</font></p>
		<br><br>
		<div class="pull-right_foot" align="center">
		&nbsp;&nbsp;&nbsp;<font face="Times New Roman" color="white" size="3">
		<a href="admin.php">Home</a>&nbsp;|&nbsp;<a href="viewcom.php">View Comment</a>&nbsp;|&nbsp;<a href="Postinfo.php">Post Info</a>&nbsp;|&nbsp;<a href="viewstudent.php">View StudentInfo</a></font>
		</div>

      </footer>
</div>

<!--End of Footer-->
</body>
</html>