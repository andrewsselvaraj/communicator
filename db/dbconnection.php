<?php
$con = mysql_connect("localhost","learns84_eadmin","Admin@123#");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("learns84_onlinetest", $con);

?>