<?php
$conn=mysql_connect("localhost","root","") or die(mysql_error());
	$sdb=mysql_select_db("cde",$conn) or die(mysql_error()); 
if(isset($_GET['status']))
{
	$status=$_GET['status'];
	
	$select_status=mysql_query("select * from account where username='$status'");
	while($row=mysql_fetch_object($select_status))
	{
		$st=$row->status;
	
	
	 if($st=='2'){
	
	$status2=4;
	}
	else if($st=='3'){
	
	$status2=5;
	}
else if($st=='5'){
	
	$status2=3;
	}
	else if($st=='4'){
	
	$status2=2;
	}
	
	
	$update=mysql_query("update account set status='$status2' where username='$status' ");
	if($update)
	{
		header("Location:account.php");
	}
	else
	{
		echo mysql_error();
	}
	}
	?>
     
    <?php
}
?>