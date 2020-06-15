<?php

include("../db/dbconnection.php");


$pk_user_id =$_POST["pk_user_id"]; 
$user_name =$_POST["user_name"];
$password =$_POST["password"];
$email_id =$_POST["email_id"];
$mobile_no=$_POST["mobile_no"];
$current_designation =$_POST["current_designation"];
$current_role =$_POST["current_role"];
$created_by =$_POST["created_by"]; 
$created_datettime =$_POST["created_datettime"];
$modified_by =$_POST["modified_by"]; 
$modified_datetime =$_POST["modified_datetime"];

$sql = "INSERT INTO userinfo (pk_user_id, user_name, password, email_id, mobile_no, current_designation, current_role, created_by, created_datettime, modified_by, modified_datetime)";
$sql = $sql. "VALUES ('$pk_user_id', '$user_name', '$password', '$email_id', '$mobile_no', '$current_designation', '$current_role', '$created_by', '$created_datettime', '$modified_by', '$modified_datetime')";
echo $sql;
$results = mysql_query($sql) or die ("Could not execute query : ".$sql . mysql_error());

echo "Inserted Successfully.<BR> Click here to View All Users <a href=communicatorViewUser.php>View All Users</a>";


?> 