<?php
$myForm = '<body>
<form action="s5shipp.php">
<input name="delid" value="1001">
<input type="submit" value="s5em.php">
</form>';
if (!isset($_GET['delid'])) { 
  echo $myForm;
  exit;
}
require("s1shipp.php");
$sql="delete from $tb ";
$sql.="where shipperid ='".$_GET['delid']."'";
if(!$result=mysql_db_query($db,$sql))
  echo "$sql : failed";
else
  header("location: s0em.php");
mysql_close($connect);
?>
</body>