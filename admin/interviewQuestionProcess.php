<?php include("../db/dbconnection.php")?>

<?php


$fk_questionid =  $_POST["fk_questionid"];
$fk_SchoolId =  $_POST["SchoolId"];
$fk_SubjectId =  $_POST["SubjectId"];
$QuestionName =  $_POST['QuestionName'];
$Description=  $_POST['Description'];
$pk_answerid  =  $_POST['pk_answerid'];
$answer = $_POST['answer'];
$pk_answerid_correct = $_POST['pk_answerid_correct'];
$question_type= $_POST['question_type'];
echo "<BR>fk_questionid".$fk_questionid;
echo "<BR>fk_SubjectId".$fk_SubjectId;
echo "<BR>fk_SubjectId".$fk_SubjectId;

echo "<BR>fk_SchoolId".$fk_SchoolId; 

$result = mysql_query("SELECT max(pk_questionid) as  max_question_id FROM question_info");

  while($row = mysql_fetch_array($result))
  {
 $max_question_id = $row['max_question_id']+1;
}


$sql="INSERT INTO  question_info( pk_questionid,QuestionName, fk_SchoolId, fk_SubjectId, question_type,description, createdby, lastupdatedby, lastupdateed, status) VALUES ( '$max_question_id','$QuestionName', '$fk_SchoolId', '$fk_SubjectId', '$question_type','Description', 'user_name', 'now()', 'user_name', '1')";

echo "<BR>". $sql."<BR>";

$results = mysql_query($sql) or die (" Error in adding product Could not execute query : ".$sql . mysql_error());

if($results)
{
echo "INseted";
}

// output or process all data
$i=0;
  
echo "COUNT OF ".count($pk_answerid);
foreach ($pk_answerid as $answer) {
//echo "<BR>INSERT LOOP OF ".$i;
//echo "ANS by ID".$answer;
//echo "CORRECT ANS ".$pk_answerid_correct[$i];
   $result = mysql_query("SELECT max(pk_answerid) as  max_pk_answerid FROM answer_info");

  while($row = mysql_fetch_array($result))
  {

 $max_pk_answerid= $row['max_pk_answerid'];
$max_pk_answerid = $max_pk_answerid +$i;
  echo "<BR>".$answer;
$sql="INSERT INTO answer_info ( fk_questionid, fk_SchoolId, fk_SubjectId, answer,correct_answer, createdby, lastupdatedby, lastupdateed, status) VALUES ( '$max_question_id', '$fk_SchoolId', '$fk_SubjectId', '$answer','$pk_answerid_correct[$i]', '787', CURRENT_TIMESTAMP, '78', '1');";

}
$results = mysql_query($sql) or die (" Error in adding product Could not execute query : ".$sql . mysql_error());
$i=$i+1;
if($results)
{
echo "INseted"




}
echo "<BR>";
echo $sql."<BR>";
}




?>

<?php


mysql_close($con);
?>
<button onclick="goBack()">Go Back</button>

<p>Notice that clicking on the Back button here will not result in any action, because there is no previous URL in the history list.</p>

<script>
function goBack() {
    window.history.back();
}
</script>