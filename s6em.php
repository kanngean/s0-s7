<body>
<form action="s6em.php">
<input name="updid" value="1003">
<input name="fname" value="chula">
<input name="lname" value="chula">
<input type="submit" value="s6em.php">
</form>
<?php
if (!isset($_GET['updid'])) { exit; }
require("s1em.php");
$sql="update $tb set ";
$sql.="employeeid=". $_GET['updid'] .", ";
$sql.="firstname='". $_GET['fname'] ."' ,";
$sql.="lastname='". $_GET['lname'] ."' ";
$sql.="where employeeid=". $_GET['updid'] ."";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  echo "<meta http-equiv='refresh' content='0; url=s0em.php'/>";
mysql_close($connect);
?>
</body>