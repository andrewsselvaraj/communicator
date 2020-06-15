<?php include('includes/header.php'); ?>

    <?php include("db/dbconnection.php")?>	
        <!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Online Test</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Online Test</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                    <div class="row page-row">
                        <div class="events-wrapper col-md-12 column">                         

<?php
$result=mysql_query("SELECT si.* FROM subject_info si where status = '1' order by SubjectName");
$i=1;
while($row=mysql_fetch_array($result))
{
$SubjectName=$row["SubjectName"];
$description=$row["description"];
$pk_SubjectId=$row["pk_SubjectId"];
$fk_SchoolId=$row["fk_SchoolId"];


?>
                            <article class="events-item page-row has-divider clearfix">
                                <div class="date-label-wrapper col-md-1 col-sm-2">
                                     <p class="date-label">
                                        <span class="month">ID</span>
                                        <span class="date-number"><?php echo $i++; ?> </span>
                                    </p>
                                </div><!--//date-label-wrapper-->
                                <div class="details col-md-11 col-sm-10">
                                   <h3 class="title"><a href="test-detail.php?fk_SchoolId=<?php echo $fk_SchoolId; ?>&pk_SubjectId=<?php echo $pk_SubjectId; ?>"><strong> <?php echo $SubjectName; ?> </strong></a></h3>
                                    <p class="desc"> <?php echo $description; ?> </p>   
                                    
                                </div><!--//details-->
                            </article><!--//events-item-->
<?php
}
?>



                            
                            <ul class="pagination">
                                <li class="disabled"><a href="#">&laquo;</a></li>
                                <li class="active"><a href="#">1<span class="sr-only">(current)</span></a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a href="#">&raquo;</a></li>
                            </ul>
                            
                        </div><!--//events-wrapper-->

                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content-->
    </div><!--//wrapper-->

    <!-- ******FOOTER****** --> 
<?php include('includes/footer.php'); ?>