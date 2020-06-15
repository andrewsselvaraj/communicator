
	

				
	<?php include("../db/dbconnection.php")?>	
	
 		
		<form action="communicatorSMSFull.php" method="post">
		<table class="table">
		<thead>	<tr><th>NAME 	</th><th>Designation</th><th>MObile No</th><th>Message</th></tr>
				</thead>
<?php
$result = mysql_query("SELECT * FROM userinfo");
 $i=0;
  while($row = mysql_fetch_array($result))
  {
	$pk_user_id = $row['pk_user_id'];
	$user_name = $row['user_name'];
	$mobile_no = $row['mobile_no'];
	$current_role = $row['current_role'];
	$current_designation = $row['current_designation'];
	$message_type = "";
	$message = "";	
	
	echo "<tbody><tr class='active'>
						<td>"
							.$user_name.
							
						" </td>
						
												<td>"
							.$current_designation.
							
						" </td>
						<td>
							".$current_role." 
						</td>
						<td>
							".$mobile_no." 
						</td>
					</tr>";
}
?>


</tbody>
</table>
</form>




				


				



    	
    	
            