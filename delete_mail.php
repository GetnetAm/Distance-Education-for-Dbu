<?php
session_start();
include 'connection.php';
$user = $_SESSION['email'];
$log = $_SESSION['password'];
if ($log != "log"){
	header ("Location:viewcomment.php");
}

$ctrl = $_REQUEST['key'];


$SQL = "DELETE FROM feedback WHERE email = '$ctrl'";
mysql_query($SQL);
mysql_close($db_handle);

print "<script>location.href = 'viewcomment.php'</script>";
?>