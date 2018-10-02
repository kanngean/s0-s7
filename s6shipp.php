<body>
<form action="s6shipp.php">
<input name="updid" value="1003">
<input name="fname" value="chula">
<input name="lname" value="chula">
<input type="submit" value="s6em.php">
</form>
<?php
if (!isset($_GET['updid'])) { exit; }
require("s1shipp.php");
$sql="update $tb set ";
$sql.="shipperid=". $_GET['updid'] .", ";
$sql.="companyname='". $_GET['fname'] ."' ,";
$sql.="phone='". $_GET['lname'] ."' ";
$sql.="where shipperid=". $_GET['updid'] ."";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  echo "<meta http-equiv='refresh' content='3; url=s0em.php'/>";
mysql_close($connect);
?>
</body>