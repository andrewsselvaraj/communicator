
	

				
	<?php include("../db/dbconnection.php")?>	
	
 		
		<form action="communicatorSMSFull.php" method="post">
		<table class="table">
		<thead>	<tr><th>#</th><th>ID 	</th><th>MObile No</th><th>Message</th></tr>
				</thead>
<?php
$result = mysql_query("SELECT * FROM userinfo");
 $i=0;
  while($row = mysql_fetch_array($result))
  {
	$pk_user_id = $row['pk_user_id'];
	$user_name = $row['user_name'];
	$mobile_no = $row['mobile_no'];
	$message_type = "";
	$message = "";	
	
	echo "<tbody><tr class='active'><td>
							<input type=checkbox name=\"pk_user_id[]\" value=".$pk_user_id.">
						</td>
						<td>"
							.$pk_user_id.
							
						" </td>
						<td>
							".$mobile_no." <input type=text name=\"mobile_no[]\" value=".$mobile_no.">
						</td>
						<td>
							".$message." <input type=text name=\"message[]\" value=".$message.">
						</td>
					</tr>";
}
?>
<tr><td><input type=submit value="send sms"></td><td> <input type=reset value="cancel"> </td></tr></tbody>
</table>
</form>




				


				



    	
    	
            