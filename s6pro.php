<body>
<form action="s6pro.php">
<input name="updid" value="1003">
<input name="fname" value="chula">
<input name="lname" value="chula">
<input type="submit" value="s6em.php">
</form>
<?php
if (!isset($_GET['updid'])) { exit; }
require("s1pro.php");
$sql="update $tb set ";
$sql.="productid=". $_GET['updid'] .", ";
$sql.="productname='". $_GET['fname'] ."' ,";
$sql.="supplierid='". $_GET['lname'] ."' ";
$sql.="where productid=". $_GET['updid'] ."";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  echo "<meta http-equiv='refresh' content='3; url=s0em.php'/>";
mysql_close($connect);
?>
</body>