<?php
require("s1or.php");
$sql="select * from $tb";
if (!$result=mysql_db_query($db,$sql)) die("Query : failed");
echo "Display all records : <br/>"  ;
while ($object = mysql_fetch_object($result)) {
  echo $object->OrderID 
 . "  " . $object->CustomerID
 . "  " . $object->EmployeeID."<br/>";
}
echo "Total " . mysql_num_rows($result) ." records";

mysql_close($connect);
?>