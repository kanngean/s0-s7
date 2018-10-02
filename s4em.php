<body>
<form action="s4em.php">
<input name="nid" value="1004">
<input name="fname" value="kmit">
<input name="lname" value="kmit">
<input type="submit" value="s4em.php">
</form>
<?php
if (!isset($_GET['nid']) || !isset($_GET['fname'])) exit;
require("s1em.php");
$sql="insert into $tb 
(employeeid,firstname,lastname)
values(".$_GET['nid']."
,'".$_GET['fname']."'
,'".$_GET['lname']."')";
if(!$result=mysql_db_query($db,$sql)) 
  echo "$sql : failed";
else
  echo "$sql : succeeded";
mysql_close($connect);
echo "<meta http-equiv='refresh' content='3; url=s0em.php'/>";
?>
</body>