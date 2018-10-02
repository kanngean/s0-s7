<?php
/* Section 1 : include */
if(file_exists("s1pro.php")) 
  require("s1pro.php"); 
else
  die("File not found");
 
/* Section 2 : main activity */
//dbWork("create database $db");
//qWork("create table $tb (eid char(4),ename char(40))");
qWork("insert into $tb (ProductID,ProductName,SupplierID) values(123,'ffffff','44454')");
mysql_close($connect);
echo '<a href="s0pro.php">back</a>';
echo "<meta http-equiv='refresh' content='3; url=s0em.php'/>";
/* Section 3 : function */
function dbWork($sql) {
  global $connect;
  if (!$result=mysql_query($sql,$connect))
    echo "$sql : failed<br/>"; 
  else
    echo "$sql : succeeded<br/>";  
}   
function qWork($sql) {
  global $db;
  if (!$result=mysql_db_query($db,$sql))
    echo "$sql : failed<br/>"; 
  else
    echo "$sql : succeeded<br/>";  
}   