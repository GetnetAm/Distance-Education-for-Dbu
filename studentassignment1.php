<?php
session_start();
include("assignmentsubmit.php");
class Assignment{
var $con;
var $query;
var $res;
var $destion;
function connects()
{
$this->con = mysql_connect("localhost",'root','') or die("not connected");
mysql_select_db("cde");		
}
function query()
{	 
$this->destination = "assignment\\" . $_FILES["file"]["name"];//****************upload page******//
			 
//echo "<br>",$this->destination, "<br>";
			
move_uploaded_file($_FILES["file"]["tmp_name"], $this->destination);			
//echo "Stored in: " . "www/assignment" . $_FILES["file"]["name"];
$sid=$_POST['userid'];
$stname=$_POST['stname'];	
$stdept=$_POST['stdept'];
$year=$_POST['year'];	
$course=$_POST['coursename'];
$term=$_POST['term'];			 
$fileName=$_FILES['file']['name'];
$tmpName=$_FILES['file']['tmp_name'];
$fileSize=$_FILES['file']['size'];
$fileType=$_FILES['file']['type'];
$this->query="insert into studentassignment values('$sid','$stname','$stdept','$year','$course','$term','$fileName','$tmpName','$fileSize','$fileType')";
$this->res=mysql_query($this->query);
    }
function display()
{
if(mysql_affected_rows()==1)
{

echo("<table border='0' align='center'><tr><td>");

echo"you submitted your assignment successfully ";
echo("</tr></td></table>");
}
else
{
echo"something wrong when uploading the file";	   	
}
}
}
$Ass=new Assignment();
$Ass->connects();
$Ass->query();
$Ass->display();
?> 
