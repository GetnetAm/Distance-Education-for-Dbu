 <?php
include("rep1.html");
$con=mysql_connect("localhost","root","") or die ("unable to connect");
$db=mysql_select_db("cde",$con);
$dept=$_POST['dept'];
$rs = mysql_query("SELECT * FROM application where dept='$dept' ");
echo"<table border='1' align='center'><tr><td>";
print "Total number of new applicants Registred in ".$dept." departments is: ".mysql_num_rows($rs);
echo"</tr>";
echo"</td>";
echo"</table>";
?>