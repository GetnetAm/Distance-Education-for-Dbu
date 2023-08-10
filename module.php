<html>
<body bgcolor="yesweardd">
  		<?php
		session_start();
		include("upload.php");
class Module{
			var $con;
			var $query;
			var $res;
			var $destination;
			var   $tname;
			var  $modulename;
			var  $modulenum;
			var $dept;
			var $term;
			var $year;
			var $fileName;
			var $tmpName;
			var $fileSize;
			var $fileType;
function connects()
{
			$this->con=mysql_connect("localhost","root","");
			mysql_select_db("cde");
}
function query()
{
				$this->destination = "module\\" . $_FILES["file"]["name"];//****************upload page******//
			 
				//echo "<br>",$this->destination, "<br>";**********************destination testing************//
			
				move_uploaded_file($_FILES["file"]["tmp_name"], $this->destination);			
				//echo "Stored in: " . "www/module" . $_FILES["file"]["name"];
				$this->tname=$_POST['Tname'];
				$this->modulename=$_POST['modulename'];	
				$this->modulenum=$_POST['modulenum'];
				$this->dept=$_POST['dept'];	 
				$this->term=$_POST['term'];
				$this->year=$_POST['year'];			 
				$this->fileName=$_FILES['file']['name'];
				$this->tmpName=$_FILES['file']['tmp_name'];
				$this->fileSize=$_FILES['file']['size'];
				$this->fileType=$_FILES['file']['type'];
				$this->query="insert into module values('$this->tname','$this->modulename','$this->modulenum','$this->dept','$this->term','$this->year','$this->fileName','$this->tmpName','$this->fileSize','$this->fileType')";
				$this->res=mysql_query($this->query,$this->con);
    }
function display()
{
			if(mysql_affected_rows()==1)
			{
				$_SESSION['Tname']="Tname";
				$_SESSION['modulename']="modulename";
				$_SESSION['modulenum']="modulenum";
				$_SESSION['dept']="dept";
				$_SESSION['term']="term";
				$_SESSION['year']="year";
			echo"<br>"."<h2 style='color:green' align='center'>"."your file is uploaded";
			}
			else
			{
		echo"something wrong";	   	
			}
			}
}
$Mod=new Module();
$Mod->connects();
$Mod->query();
$Mod->display();
?>
</html>
</body> 
