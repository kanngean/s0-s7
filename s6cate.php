<body>
<form action="s6cate.php">
<input name="updid" value="1003">
<input name="fname" value="chula">
<input name="lname" value="chula">
<input type="submit" value="s6em.php">
</form>
<?php
if (!isset($_GET['updid'])) { exit; }
require("s1cate.php");
$sql="update $tb set ";
$sql.="categoryid=". $_GET['updid'] .", ";
$sql.="categoryname='". $_GET['fname'] ."' ,";
$sql.="description='". $_GET['lname'] ."' ";
$sql.="where categoryid=". $_GET['updid'] ."";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  echo "<meta http-equiv='refresh' content='3; url=s0em.php'/>";
mysql_close($connect);
?>
</body>