<?php
$con = mysql_connect("localhost","learns84_root","Admin@123#");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("learns84_alphachoice", $con);

?>