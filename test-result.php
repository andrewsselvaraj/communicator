<?php include('includes/header.php'); ?>
<?php include("db/dbconnection.php")?>
    
        <!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">RESULTS</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="onlinetest.php">Online Test<i class="fa fa-angle-right"></i></a></li>
                            <li class="current">Test-Detail</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                    <div class="row page-row">

<!--
                        <aside class="page-sidebar col-md-2 col-sm-4 affix-top">                    
                            <section class="widget">
                                <ul class="nav">
                                    <li><a href="typography.html">Typography</a></li>
                                    <li class="active"><a href="#">Tables</a></li>
                                    <li><a href="buttons.html">Buttons</a></li>
                                    <li><a href="components.html">Components</a></li>
                                     <li><a href="icons.html">Icons</a></li>
                                </ul>                    
                            </section>
                        </aside>
-->


<!--//page-sidebar-->
<!-- col-md-10 col-sm-8-->
                        <div class="content-wrapper col-md-12 col-sm-10">  
                            <div class="page-row">  
                              

                                <div class="table-responsive">                      
                                    <table class="table table-boxed">
                                        <thead>
                                            <tr>


<th>QUESTION</th>
                                                <th>YOUR ANSWER</th>
                                                <th>CORRECT ANSWER</th>
                                                <th>RESULT</th>
                                            </tr>
                                        </thead>
<tbody>


<?php
$no  =  $_POST['no']; 
//echo "out questionid".$questionid;
  
$ans = "ans_From hardcode value".$answer  ;
$mark=0;
$total=0;
$c=0;

foreach ($no as $id) {
//echo "<BR> ID ".$id;
$ANSWERID_PARAM =  "answer_id"."$id";
//echo "req parama ".$ANSWERID_PARAM ;
$ANSWERID= $_POST[$ANSWERID_PARAM];
$QuestionValue =  "QuestionName"."$id";
$Question= $_POST[$QuestionValue];

$ANSWERID_VALUE =  "answer_value"."$id";
$ANSWER= $_POST[$ANSWERID_VALUE];
//echo "<BR>Question is ".$Question;

$SelectedAnswer_PARAM=  "SelectedAnswer"."$id";
$SelectedAnswer_PARAM_DESC= $_POST[$SelectedAnswer_PARAM];

//echo "SelectedAnswer_PARAM_DESC".$SelectedAnswer_PARAM_DESC;
                                
$sql = "SELECT * FROM answer_info where fk_questionid='".$id."' and correct_answer='Y'";
//echo "INER   ".$sql;
//echo "OUTER".$j++;
$subresult=mysql_query($sql);
while($subrow=mysql_fetch_array($subresult))
{
$total=$total+1;
$answer_id=$subrow['pk_answerid'];
$answer=$subrow['answer'];
$correct_answer=$subrow['correct_answer'];
$result = "";
if($answer_id==$ANSWERID)
{
$result = "CORRECT";
$mark=$mark+1;
}
else
{
$result = "NOT CORRECT";
}

echo "<tr><td>".($total).")".$Question."</td><td>".$SelectedAnswer_PARAM_DESC."</td><TD>".$answer."</TD><td><span class=".$result_lable.">  ".$result."</span></td></tr>";
}


}


echo "<BR>YOUR SCORE IS".$mark."/".$total;
?>



                                            <!--<tr>
                                                <td>2</td>
                                                <td>Jacob</td>
                                                <td>Thornton</td><td>TEST</td>
                                                <td><span class="label label-warning">label label-danger label label-success</span></td>
                                            </tr>
-->

                                        </tbody>

                                    </table><!--//table-->
                                </div><!--//table-responsive-->                            
                            </div><!--//page-row-->  

                                                                  
                        </div><!--//content-wrapper-->                    
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content-->
    </div><!--//wrapper-->

    <!-- ******FOOTER****** --> 
<?php include('includes/footer.php'); ?>
