<?php
require("s1supp.php");
$sql="select * from $tb";
if (!$result=mysql_db_query($db,$sql)) die("Query : failed");
echo "Display all records : <br/>"  ;
while ($object = mysql_fetch_object($result)) {
  echo $object->SupplierID 
 . "  " . $object->CompanyName
 . "  " . $object->ContactName."<br/>";
}
echo "Total " . mysql_num_rows($result) ." records";

mysql_close($connect);
?>