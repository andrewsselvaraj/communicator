<?php




?>


<form action="communicatorInsertUser.php" method="POST">

<table>
<tr><td>pk_user_id</td><tr><td>
<input type=text name="pk_user_id"></td></tr>
<tr><td>user_name</td><tr><td>
<input type=text name="user_name"></td></tr>
<tr><td>password</td><tr><td>
<input type=text name="password"></td></tr>
<tr><td>email_id</td><tr><td>
<input type=text name="email_id"></td></tr>
<tr><td>mobile_no</td><tr><td>
<input type=text name="mobile_no"></td></tr>
<tr><td>current_designation</td>
<td>
<select name="current_designation"><option value="MANAGER">MANAGER</option><option value="CEO">CEO</option></select></td></tr>
<tr><td>current_role</td><td>
<select name="current_role"><option value="ADMIN">ADMIN</option><option value="PUBLIC">PUBLIC</option></select></td></tr>

<tr><td>created_by</td><tr><td>
<input type=text name="created_by"></td></tr>
<tr><td>created_datettime</td><tr><td>
<input type=text name="created_datettime"></td></tr>
<tr><td>modified_by</td><tr><td>
<input type=text name="modified_by"></td></tr>
<tr><td>modified_datetime</td><tr><td>
<input type=text name="modified_datetime"></td></tr>
<tr><td><input type=submit></td><tr><td><input type=reset></td></tr>
</table>
</form>