<html>
<head>
</head>
<body bgcolor="silver">
<a href="LOGOUT.php">Logout</a>
<?php
session_start();
$con=mysql_connect("localhost","root","");
mysql_select_db("cde");
//$dept = $_POST['dept'];
//$dept = "Sociology";
//=$_POST['ID'];
/*$query=mysql_query("SELECT * FROM  applicant WHERE ID='".$_POST['ID']."'");
$rs =mysql_num_rows($query);
if ($rs == 0)
{
 echo "invalid user";
}
else*/
$query= "select * from module where dept='".$_POST['dept']."'and year='".$_POST['year']."' and term='".$_POST['term']."'";
//$query = "select * from module where dept='$dept'";
$rs = mysql_query($query, $con);
//echo"<img src='download.jpg' style='align:center'>";
echo"<table border='0' width='700' height='300' bgcolor='white' align='center'><tr></td><th>moduleName</th><th>department</th><th>term</th><th>year</th>";
while($row=mysql_fetch_array($rs,MYSQL_ASSOC))
{
	$_SESSION['dept']=$_POST['dept'];
	$_SESSION['year']=$_POST['year'];
	$_SESSION['term']=$_POST['term'];
echo("<tr>");
$path = "xampp/htdocs/cde/module/".$row["Filename"];
echo ("<td><a href=\"$path\">".$row["modulname"]."</a></td>");
echo("<td> ".$row["dept"]."</td>");
echo ("<td> ".$row["term"]."</td>");
echo ("<td>".$row["year"]."</td>");
echo("</tr>");
echo("</th></td></table>");
}
?>
</body>
</html>