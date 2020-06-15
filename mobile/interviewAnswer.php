<?php include('includes/header.php'); ?>
  <script>
function setAnswerValue(answer,questionid) {
var selanswer = answer;
    alert("HI asdas"+answer);
      alert("HI"+questionid);
      //document.forms[0].answer_value+questionid.value=answer;
      document.questionEntry.answer_sel_value.value=answer;
      // document.forms[0].answer_sel_value.value=answer;
      document.forms[0].answer_sel_value.value=selanswer ;
      alert("DONE");
}
</script>  
<?php include("db/dbconnection.php")?>

        <!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Test Title</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="onlinetest.php">Interview Question & Answers<i class="fa fa-angle-right"></i></a></li>
                            <li class="current">Test-Detail</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                    <div class="row page-row">
                        <div class="jobs-wrapper col-md-12 column">           

                            <!--//panel--> 
<form name="questionEntry" class="form-horizontal" action="test-result.php" method="post"> 
                            <div class="panel panel-default page-row">
                                <?php
$fk_SchoolId=$_GET['fk_SchoolId']; 
$pk_SubjectId=$_GET['pk_SubjectId'] ;
$i=0;
$j=0;


$sql = "SELECT distinct q.QuestionName,q.pk_questionid FROM question_info q , answer_info a where q.fk_SchoolId= a.fk_SchoolId and q.fk_SubjectId=a.fk_SubjectId  and q.fk_SchoolId='$fk_SchoolId'   and q.fk_SubjectId='$pk_SubjectId' and q.question_type='1'";
//echo "OUTER".$sql;
//echo "OUTER".$i++;
$result=mysql_query($sql);
$qno=1;
while($row=mysql_fetch_array($result))
{
$QuestionName=$row['QuestionName'];
$pk_questionid=$row['pk_questionid'];
?>
                                <div class="panel-heading">
                                    <h3 class="panel-title"><a href="#">  <?php echo $qno; ?> )   <?php echo $QuestionName; $qno=$qno+1; ?>  
<input type="hidden" name="no[]" value="<?php echo $pk_questionid; ?>">
<input type="hidden" name="QuestionName<?php echo $pk_questionid;?>" value="<?php echo $QuestionName; ?>">

</a> </h3>
                                    
                                </div>
                                
                                
                                <ul class="list-group">
                                <?php
$sql = "SELECT * FROM answer_info where fk_SchoolId='$fk_SchoolId'  and fk_SubjectId='$pk_SubjectId' and fk_questionid='".$pk_questionid."'";
//echo "INER   ".$sql;
//echo "OUTER".$j++;
$subresult=mysql_query($sql);
while($subrow=mysql_fetch_array($subresult))
{
$answer_id=$subrow['pk_answerid'];
$answer=$subrow['answer'];
$correct_answer=$subrow['correct_answer'];

?>
                                    <li class="list-group-item"><label class="radio">

<input type="hidden" name="answer<?php echo $pk_questionid;?>"  id="answerID<?php echo $pk_questionid;?>" value="<?php echo $answer;?>" >
<input type="radio" name="answer_id<?php echo $pk_questionid;?>"  id="SelectedAnswerIDNEW<?php echo $pk_questionid;?>" value="<?php echo $answer_id;?>" onclick="myFunctionNew<?php echo $pk_questionid;?>('<?php echo $answer;?>')" > <?php echo $answer; ?> 









                                    </label> </li>
<?php
}
?>
<input type="hidden" name="SelectedAnswer<?php echo $pk_questionid;?>" id="SelectedAnswerID<?php echo $pk_questionid;?>" value="NOT ATTEMPTED">
 
<script>

function myFunctionNew<?php echo $pk_questionid;?>(answer) {

var newvar=answer;
var SelectedAnswerID= document.getElementById('SelectedAnswerID<?php echo $pk_questionid;?>');

SelectedAnswerID.value=newvar;

 

SelectedAnswerID= document.getElementById('SelectedAnswerID<?php echo $pk_questionid;?>');
 

 





}
</script>
                                  
                                </ul>


                                <?php
}

?>
                                
                            </div>


                                  </form>

    
                                                                 
                        </div><!--//jobs-wrapper jobs-wrapper col-md-12 column-->

                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content-->
    </div><!--//wrapper-->

    <!-- ******FOOTER****** --> 
<?php include('includes/footer.php'); ?>