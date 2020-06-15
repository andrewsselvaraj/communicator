<?php
$UserID=  $_POST['UserID'];
$Password=$_POST['Password'];
if($UserID==null || $Password==null)
{
echo "Invalid Login Please try Again or Session is expired";
}
include("../db/dbconnection.php");
$sql="select pk_user_id,user_name as user_name,fk_role_id from user_role ur , userinfo ui where ui.pk_user_id= ur.fk_user_id and ui.pk_user_id='".$UserID."'  and ui.password='".$Password."'" ;

echo $sql;
$result = mysql_query($sql);


while($member = mysql_fetch_array($result))

{ 

$c_user_name = $member['user_name'];
 
if($c_user_name!=null)
		{
			 //echo "coming isndie";
			$_SESSION["UserID"]=$member["pk_user_id"];
			$_SESSION['user_name']=$member["user_name"];
			//$_SESSION['company_id']=$member["ext_company_id"];
			//$_SESSION['company_name']=$member["ext_company_name"];			
			$role_name = $member["fk_role_id"];
			
			$_SESSION['role_name']=$role_name;
			$SessionUserID = $_SESSION["UserID"];
			echo " Welcome ".$SessionUserID ." <BR> You have Successfully Logged to sent SMS.All activities of sending SMS being monitored  <a href=\"communicatorFull.php\"> Click here to proceed</a>";
			break;
		}
		


 }
 
 $UserID =$_SESSION['UserID'];		
if($UserID == null)
  {
	echo "Please check User id and Password or Session is invalid.Please login";
  }

 


?> 