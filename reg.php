<?php
include("instructorupdate.html");
$host="localhost"; 
$username="root"; 
$password="vertrigo"; 
$db_name="jucde"; 
$tbl_name="instructor"; 
$rows;
mysql_connect("$host", "$username", "$password");
mysql_select_db("$db_name");
//$Tid=$_GET['Tid'];
$query="SELECT * FROM $tbl_name";
$result=mysql_query($query);
$rows=mysql_fetch_array($result);
?>
<table width="400" border="0" cellspacing="1" cellpadding="0" align="center">
<tr>
<form name="form1" method="post" action="instructorupdate1.php">
<td>
<table width="100%" border="0" cellspacing="1" cellpadding="0" bgcolor="silver" align="center" >
<tr>
<td>&nbsp;</td>
<center><td colspan="9" align="center"><strong>UPDATE DATA IN MYSQL DATABASE</strong> </td></center>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center"><strong>Teachername</strong></td>
<td align="center"><strong>TeacherId</strong></td>
<td align="center"><strong>FACULTY</strong></td>
<td align="center"><strong>Department</strong></td>
<td align="center"><strong>Year</strong></td>
<td align="center"><strong>Term</strong></td>
<td align="center"><strong>Email</strong></td>
<td align="center"><strong>Ponenumber</strong></td>
<td align="center"><strong>Status</strong></td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center"><input name="Tname" type="text" id="Tname" value="<?php echo $rows['Tname']; ?>"></td>
<td align="center"><input name="Tid" type="text" id="Tid" value="<?php echo$rows['Tid']; ?>" size="15"></td>
<td align="center"><input name="faculty" type="text" id="faculty" value="<?php echo$rows['faculty']; ?>" size="15"></td>
<td align="center"><input name="department" type="text" id="department" value="<?php echo$rows['department']; ?>" size="15"></td>
<td align="center"><input name="year" type="text" id="year" value="<?php echo$rows['year']; ?>" size="15"></td>
<td align="center"><input name="term" type="text" id="term" value="<?php echo$rows['term']; ?>" size="15"></td>
<td align="center"><input name="email" type="text" id="email" value="<?php echo$rows['email']; ?>" size="15"></td>
<td align="center"><input name="phoneno" type="text" id="phoneno" value="<?php echo$rows['phoneno']; ?>" size="15"></td>
<td align="center"><input name="status" type="text" id="status" value="<?php echo$rows['status']; ?>" size="15"></td>

</tr>
<tr>
<td>&nbsp;</td>
<td align="center"><input name="Tid" type="hidden" id="Tid" value="<?php echo $rows['Tid']; ?>"></td>
<td align="center"><input type="submit" name="Submit" value="Submit"></td>
<td align="center"><input type="reset" name="Submit" value="cancel"></td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<?
// close connection
mysql_close();