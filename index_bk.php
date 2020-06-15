<?php include('includes/header.php'); ?>
<?php include("db/dbconnection.php")?>
        <!-- ******CONTENT****** --> 
        <div class="content container">
            <div id="promo-slider" class="slider flexslider">
                <ul class="slides">
                    <li>
                        <img src="assets/images/slides/slide1.jpg"  alt="" />
                        <p class="flex-caption">
                            <span class="main" >Join EFreeLearn Online</span>
                            <br />
                            <span class="secondary clearfix" >Choose from over 100 online and offline courses</span>
                        </p>
                    </li>
                    <li>
                        <img src="assets/images/slides/slide2.jpg"  alt="" />
                        <p class="flex-caption">
                            <span class="main" >Come and Take Online Tests and Improve your Skill</span>
                            <br />
                            <span class="secondary clearfix" >Choose from over 100 online and offline courses</span>
                        </p>
                    </li>
                </ul><!--//slides-->
            </div><!--//flexslider-->
            <section class="promo box box-dark">        
                <div class="col-md-9">
                <h1 class="section-heading">Why EFreeLearn</h1>
                    <p>Efreelearn is a web site which provides help for php/mysql developers.Speciality of efreelearn.com is to provide more code examples than theory.  </p>   
                </div>  
                <div class="col-md-3">
                    <a class="btn btn-cta" href="#"><i class="fa fa-play-circle"></i>Take Test Now</a>  
                </div>
            </section><!--//promo-->
          		<div class="row page-row">

                        

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

                        

                        

                        
                        <div class="col-md-4 col-sm-4 col-xs-12 text-center">
                            <div class="album-cover" align="center">
                                <a href="#"><img class="img-responsive" src="assets/images/subject/<?php echo $SubjectName;?>.jpg" alt="<?php echo $SubjectName;?>" /></a>

                                <div class="desc">
                                    <h4><small><a href="test-detail.php?fk_SchoolId=<?php echo $fk_SchoolId; ?>&pk_SubjectId=<?php echo $pk_SubjectId; ?>"><strong> <?php echo $SubjectName; ?> </strong></a></small></h4>
                                    <p><?php echo $description; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php
}
?>
                        
                    </div>
        </div><!--//content-->
    </div><!--//wrapper-->
    
   
<?php include('includes/footer.php'); ?>