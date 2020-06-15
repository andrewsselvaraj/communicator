<?php
include 'configuration.php';
include 'functions/functions.php';
$action = $_REQUEST['action'];

switch($action) {

	case "load":
		$query 	= mysql_query("SELECT * FROM `userinfo` ORDER BY pk_user_id ASC");
		$count  = mysql_num_rows($query);
		if($count > 0) {
			while($fetch = mysql_fetch_array($query)) {
				$record[] = $fetch;
			}
		}
		$role = array('USER', 'ADMIN', );
		?>
        <table class="as_gridder_table">
            <tr class="grid_header">
                <td><div class="grid_heading">Sno</div></td>
                <td><div class="grid_heading">First Name</div></td>
                <td><div class="grid_heading">EMAIL  ID</div></td>
                <td><div class="grid_heading">MOBILE NO</div></td>
                <td><div class="grid_heading">ROLE </div></td>
                <td><div class="grid_heading">Created By</div></td>
				<td><div class="grid_heading">Date Updated</div></td>
                <td><div class="grid_heading">Actions</div></td>
            </tr>
            <tr id="addnew">
            	<td>&nbsp;</td>
            	<td colspan="6">
                <form id="gridder_addform" method="post">
                <input type="hidden" name="action" value="addnew" />
				

				
				
                <table width="100%">
                <tr>
                    <td><input type="text" name="user_name" id="user_name" class="gridder_add" /></td>
                    <td><input type="text" name="email_id" id="email_id" class="gridder_add" /></td>
                    <td><input type="text" name="mobile_no" id="mobile_no" class="gridder_add" /></td>
					<td><input type="text" name="current_designation" id="current_designation" class="gridder_add" /></td>
                    <td><select name="current_role" id="current_role" class="gridder_add select">
				
                        <option value="">SELECT</option>
                        <?php foreach($role as $roles) { ?>
                        <option value="<?php echo $roles; ?>"><?php echo $roles; ?></option>
                        <?php } ?>
                        
						
						</select>
						</td>
						<td><input type="text" name="created_by" id="created_by" class="gridder_add" /></td>
                    <td><input type="text" name="created_datettime" id="created_datettime" class="gridder_add datepiker" /></td>
                    <td>&nbsp;
                    <input type="submit" id="gridder_addrecord" value="" class="gridder_addrecord_button" title="Add" />
                    <a href="cancel" id="gridder_cancel" class="gridder_cancel"><img src="image/delete.png" alt="Cancel" title="Cancel" /></a></td>
				</tr>
                </table>                    
                </form>
            </tr>
            <?php
            if($count <= 0) {
            ?>
            <tr id="norecords">
                <td colspan="7" align="center">No records found <a href="addnew" id="gridder_insert" class="gridder_insert"><img src="image/insert.png" alt="Add New" title="Add New" /></a></td>
            </tr>

            <?php } else {
            $i = 0;
            foreach($record as $records) {
            $i = $i + 1;
            ?>
            <tr class="<?php if($i%2 == 0) { echo 'even'; } else { echo 'odd'; } ?>">
                <td><div class="grid_content sno"><span><?php echo $i; ?></span></div></td>
				
                <td><div class="grid_content editable"><span><?php echo $records['user_name']; ?></span><input type="text" class="gridder_input" name="<?php echo encrypt("user_name|".$records['pk_user_id']); ?>" value="<?php echo $records['user_name']; ?>" /></div></td>
				
                <td><div class="grid_content editable"><span><?php echo $records['email_id']; ?></span><input type="text" class="gridder_input" name="<?php echo encrypt("email_id|".$records['pk_user_id']); ?>" value="<?php echo $records['email_id']; ?>" /></div></td>
				
                <td><div class="grid_content editable"><span><?php echo $records['mobile_no']; ?></span><input type="text" class="gridder_input" name="<?php echo encrypt("mobile_no|".$records['pk_user_id']); ?>" value="<?php echo $records['mobile_no']; ?>" /></div></td>
                <td><div class="grid_content editable"><span><?php echo $records['current_role']; ?></span>
                <select class="gridder_input select" name="<?php echo encrypt("current_role|".$records['pk_user_id']); ?>">
                    <?php foreach($role as $roles) { ?>
                    <option value="<?php echo $roles; ?>" <?php if($roles == $records['current_role']) { echo 'selected="selected"'; } ?>><?php echo $roles; ?></option>
                    <?php } ?>
                </select>
                </div></td>
		
 <td><div class="grid_content editable"><span><?php echo $records['created_by']; ?></span><input type="text" class="gridder_input" name="<?php echo encrypt("created_by|".$records['pk_user_id']); ?>" value="<?php echo $records['created_by']; ?>" /></div></td>	
                <td><div class="grid_content editable"><span><?php echo date("Y/m/d", strtotime($records['modified_datetime'])); ?></span><input type="text" class="gridder_input datepicker" name="<?php echo encrypt("modified_datetime|".$records['pk_user_id']); ?>" value="<?php echo date("Y/m/d", strtotime($records['modified_datetime'])); ?>" /></div></td>
                <td>
                <a href="gridder_addnew" id="gridder_addnew" class="gridder_addnew"><img src="images/insert.png" alt="Add New" title="Add New" /></a>
                <a href="<?php echo encrypt($records['pk_user_id']); ?>" class="gridder_delete"><img src="images/delete.png" alt="Delete" title="Delete" /></a></td>
			
            </tr>
            <?php
                }
            }
            ?>
            </table>
        <?php
	break;
	
	case "addnew":
		$user_name 		= isset($_POST['user_name']) ? mysql_real_escape_string($_POST['user_name']) : '';
		$email_id 		= isset($_POST['email_id']) ? mysql_real_escape_string($_POST['email_id']) : '';
		$mobile_no 		= isset($_POST['mobile_no']) ? mysql_real_escape_string($_POST['mobile_no']) : '';
		$current_role = isset($_POST['current_role']) ? mysql_real_escape_string($_POST['current_role']) : '';
		$modified_datetime 		= isset($_POST['modified_datetime']) ? mysql_real_escape_string($_POST['modified_datetime']) : '';
		$pk_user_id = "1000";
				$sql = "INSERT INTO userinfo (pk_user_id, user_name, email_id, mobile_no, current_designation, current_role, created_by, created_datettime, modified_by, modified_datetime)";
$sql = $sql. "VALUES ('$mobile_no', '$user_name',  '$email_id', '$mobile_no', '$current_role', '$current_role', 'created_by', '$modified_datetime', 'modified_by', '$modified_datetime')";
		?>
	
		<?php

		try {
 mysql_query($sql);
  //If the exception is thrown, this text will not be shown
  echo 'If you see this, the number is 1 or below';
}

//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
		
	break;
	?>
		
		<?php
	
	case "update":
		$value 	= $_POST['value'];
		$crypto = decrypt($_POST['crypto']);
		$explode = explode('|', $crypto);
		$columnName = $explode[0];
		$rowId = $explode[1];
		if($columnName == 'lastupdatedby') { // Check the column is 'date', if yes convert it to date format
			$datevalue = $value;
			$value 	   = date('Y-m-d', strtotime($datevalue));
		}
		echo $query;
		$query = mysql_query("UPDATE `userinfo` SET `$columnName` = '$value' WHERE pk_user_id = '$rowId' ");
		
	break;
	
	case "delete":
		$value 	= decrypt($_POST['value']);
		echo "VALUE".$value;
		?>
		<script language="javascript">alert("<? echo $value ?>");</script>
		<?php
		
		$query = mysql_query("DELETE FROM `userinfo` WHERE pk_user_id = '$value' ");
		echo $query;
	break;
}
?>