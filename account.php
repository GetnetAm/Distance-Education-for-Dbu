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
</head>
<body>
<table align=center width=1000px height="900" border=1 bgcolor="#ffebcd">
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
	 <font size="4px"><a href="#" id="login">Login</a></font>
	
	 <font size="4px"><a href="logout.php" id="logout">Logout</a></font>
	  
	  
	 </div>
</td>
</tr>
<tr>
<td  height=500px width=150px bgcolor=black valign=top border="1">
<table   bgcolor="#2F4F4F" border="0"  width="200" height="900" class="menu-bar" align="center">
<tr >
<td width="110" height="20"><b><font color="white">
<a href="changepassword.php" link="white" >Change Password</a></font></b></td>
</tr>

<tr>
<td width="110" height="20"><b><font color="white">
<a href="create.php" link="white" >Create User nAccount</a></font></b></td>
</tr>
<tr>
 <td width="150" height="20">
 <a href="manageuser.php" id="drop"><b>Manage User Account</b></a></td>
</tr>
<tr>
 <td width="150" height="20">
 <a href="download2.php" id="drop"><b>Download Assignment</b></a></td>
</tr>
<tr>
 <td width="150" height="20">
 <a href="upload.php" id="drop"><b>upload Module</b></a></td>
 <tr>
 <td width="150" height="20">
 <a href="account.php" id="drop"><b>Activate/Deactivate</b></a></td>
</tr>
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
<!--------body  ---><br><br>

		<form action="" method="post">
			
			
					<table cellpadding="4" cellspacing="0" >
					
							<tr>
						
							<th> Name </th>
							<th> User_Id </th>
							    
								
								<th> Mobile
							</th>
							<th >UserName</th>
								
								
									<th> action </th>
							
								<hr>
							</tr>
							
						
						
					
						<?php
						
$result = mysql_query("SELECT * FROM account");
while($row = mysql_fetch_array($result))
  { 
		$status=$row['status'];								
	$name=$row['fname'];								
   $lname=$row['lname'];
   $User_Id= $row['User_Id'];
									$ge=$row['phone'];
								$mail=$row['username'];
									$mo=$row['accounttype'];
									
									
?> 
<tr>
<td><?php echo $name.$lname;?></td>
<td><?php echo $ge;?></td>
<td><?php echo $mail;?></td>
<td><?php echo $mo;?></td>	
	
		<td><?php
					
						
						if(($status)=='3')
						{
						?>
                       			 <a href="status.php?status=<?php echo $row['username'];?>" onclick="return confirm('Really you De-activate (<?php echo $email?>)');"> 
                       			 <img src="activate.png" width="16" id="view" height="16" alt=""  />Activated</a>
                        <?php
						}
						
						if(($status)=='2')
						{
						?>
                       			 <a href="status.php?status=<?php echo $row['username'];?>" onclick="return confirm('Really you De-activate (<?php echo $username?>)');"> 
                       			 <img src="activate.png" width="16" id="view" height="16" alt=""  />Activated</a>
                        <?php
						}
						
						
						if(($status)=='4')
						{
						?>
                       			 <a href="status.php?status=<?php echo $row['username'];?>" onclick='isConfirmlog()'>
                        		<img src="deactivate.png" id="view" width="16" height="16" alt="" onclick='isConfirmlog()'/>Deactivated </a>
                        <?php
						}
						
						if(($status)=='5')
						{
						?>
                       			 <a href="status.php?status=<?php echo $row['username'];?>" onclick='isConfirmlog()'>
                        		<img src="deactivate.png" id="view" width="16" height="16" alt="" onclick='isConfirmlog()'/>Deactivated </a>
                        <?php
						}
                        ?>
						</td>

		
		
		
		</tr>
<?php
  }
 
print( "</table>");

?>
						</form>


						</td>

		
		
		
		</tr>
						
						
						
						




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