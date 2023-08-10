<html>
<head>
</head>
<body bgcolor="silver">
<?php
session_start();
include("connection.php");
class assignment{
public $query;
public $rs;
/*session_start(); 
session_destroy();
public function connects(){

$this->con=mysql_connect("localhost","root",""); //NO MORE USE OF CONNECTION DECLARE ANCE WE INCLUDE USING ****CONNECTION.PHP***
mysql_select_db("jucde");
}*/
public function query(){
$this->query= "select * from studentassignment where dept='".$_POST['dept']."'and year='".$_POST['year']."' and term='".$_POST['term']."'";
//$query = "select * from module where dept='$dept'";
}
public function display(){
$this->rs = mysql_query($this->query);
echo("<table border='3' align='center'><tr></td><th>ASSIGNMENT NAME</th><th>STUDENT ID</th><th>term</><th>year</th>");
while($rows=mysql_fetch_array($this->rs,MYSQL_ASSOC))
{
	$_SESSION['dept']=$_POST['dept'];
	$_SESSION['year']=$_POST['year'];
	$_SESSION['term']=$_POST['term'];
	
$path = "http://127.0.0.1/jucde2/assignment/".$rows["Filename"];
echo("<tr>");
echo ("<td><a href=\"$path\">".$rows["coursename"]."</a></td>");
//echo("<td> ".$rows["sid"]."</td>");
//echo ("<td> ".$rows["term"]."</td>");
//echo ("<td>".$rows["year"]."</td>");
//echo("<td>".$this->row["sid"]."</td>");
echo("</tr>");
echo("</th></td></table>");
}
}}
$ass=new assignment();
//$ass->connects();
$ass->query();
$ass->display();
?>
</body>
</html>