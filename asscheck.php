
<body bgcolor="powderblue"><a href="home.php">HOME</a>&nbsp;&nbsp;&nbsp;
<a href="dep.html">STUDENT PAGE</a>
<?php
$db_host="localhost";            // DB parameters
$db_user="root";
$db_pass="";
$database="cde";

$con=mysql_connect($db_host,$db_user,$db_pass) or die("Unable to connect to database");

if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("$database", $con);

$query = "select * from studentassignment";
echo "</br><b>";
echo "<p align=center>Assignment viewing</p>";
echo "</b><br></br>";
echo "<table border='8'bordercolor=\"990000\" align='center' width='200' height='150'>
<tr>
<th style=\"border-style:none;border-width:medium\"bgcolor=\"990000\"><font size=\"2\" face=\"verdana\" color=\"ffffff\">StudentID</font></th>
<th style=\"border-style:none;border-width:medium\"bgcolor=\"990000\"><font size=\"2\" face=\"verdana\" color=\"ffffff\">StName</font></th>
<th style=\"border-style:none;border-width:medium\"bgcolor=\"990000\"><font size=\"2\" face=\"verdana\" color=\"ffffff\">Department</font></th>
<th style=\"border-style:none;border-width:medium\"bgcolor=\"990000\"><font size=\"2\" face=\"verdana\" color=\"ffffff\">year</font></th>
<th style=\"border-style:none;border-width:medium\"bgcolor=\"990000\"><font size=\"2\" face=\"verdana\" color=\"ffffff\">Term</font></th>
<th style=\"border-style:none;border-width:medium\"bgcolor=\"990000\"><font size=\"2\" face=\"verdana\" color=\"ffffff\">course</font></th>

<th style=\"border-style:none;border-width:medium\"bgcolor=\"990000\"><font size=\"2\" face=\"verdana\" color=\"ffffff\">Filename</font></th>
<th style=\"border-style:none;border-width:medium\"bgcolor=\"990000\"><font size=\"2\" face=\"verdana\" color=\"ffffff\">tmp_name</font></th>
<th style=\"border-style:none;border-width:medium\"bgcolor=\"990000\"><font size=\"2\" face=\"verdana\" color=\"ffffff\">Filesizecourse</font></th>
<th style=\"border-style:none;border-width:medium\"bgcolor=\"990000\"><font size=\"2\" face=\"verdana\" color=\"ffffff\">Filetype</font></th>
</tr>";
$result=mysql_query($query);
while($rows = mysql_fetch_array($result))
  {
  echo "<tr>";
 echo "<td style=\"border-style:none;border-width:medium\"bgcolor=\"ffffcc\" align=\"left\"><font size=\"1\" face=\"verdana\" color=\"000000\">" . $rows['sid'].  "</font></td>";
  echo "<td style=\"border-style:none;border-width:medium\"bgcolor=\"ffffcc\" align=\"left\"><font size=\"1\" face=\"verdana\" color=\"000000\">" . $rows['stName'].  "</font></td>";
   echo "<td style=\"border-style:none;border-width:medium\"bgcolor=\"ffffcc\" align=\"left\"><font size=\"1\" face=\"verdana\" color=\"000000\">" . $rows['dept'].  "</font></td>";
  echo "<td style=\"border-style:none;border-width:medium\"bgcolor=\"ffffcc\" align=\"left\"><font size=\"1\" face=\"verdana\" color=\"000000\">" . $rows['year'] . "</font></td>";
  echo "<td style=\"border-style:none;border-width:medium\"bgcolor=\"ffffcc\" align=\"left\"><font size=\"1\" face=\"verdana\" color=\"000000\">" . $rows['term'] . "</font></td>";
  echo "<td style=\"border-style:none;border-width:medium\"bgcolor=\"ffffcc\" align=\"left\"><font size=\"1\" face=\"verdana\" color=\"000000\">" . $rows['coursename'] . "</font></td>";
  echo "<td style=\"border-style:none;border-width:medium\"bgcolor=\"ffffcc\" align=\"left\"><font size=\"1\" face=\"verdana\" color=\"000000\">" . $rows['Filename'].  "</font></td>";
    echo "<td style=\"border-style:none;border-width:medium\"bgcolor=\"ffffcc\" align=\"left\"><font size=\"1\" face=\"verdana\" color=\"000000\">" . $rows['tmp_name'].  "</font></td>";
	  echo "<td style=\"border-style:none;border-width:medium\"bgcolor=\"ffffcc\" align=\"left\"><font size=\"1\" face=\"verdana\" color=\"000000\">" . $rows['Filesize'].  "</font></td>";
	    echo "<td style=\"border-style:none;border-width:medium\"bgcolor=\"ffffcc\" align=\"left\"><font size=\"1\" face=\"verdana\" color=\"000000\">" . $rows['Filetype'].  "</font></td>";
  echo "</tr>";
  }
echo "</table>";mysql_close($con);
?>