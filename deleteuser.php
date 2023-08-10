<?php
session_start();
include 'connection.php';
if($log != "log"){
	header ("Location: manageuser.php");
}
$ctrl = $_REQUEST['key'];
$SQL = "DELETE FROM account WHERE User_Id = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'manageuser.php'</script>";
?>