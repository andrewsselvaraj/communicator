<?php include('includes/header.php'); ?>
    
        <!-- ******CONTENT****** --> 
        <div class="content container">
            <div class="page-wrapper">
                <header class="page-heading clearfix">
                    <h1 class="heading-title pull-left">Login</h1>
                    <div class="breadcrumbs pull-right">
                        <ul class="breadcrumbs-list">
                            <li class="breadcrumbs-label">You are here:</li>
                            <li><a href="index.php">Home</a><i class="fa fa-angle-right"></i></li>
                            <li class="current">Login</li>
                        </ul>
                    </div><!--//breadcrumbs-->
                </header> 
                <div class="page-content">
                    <div class="row page-row">
                        <div class="faq-wrapper col-md-8 col-sm-7">    
                         <form class="form-horizontal" action="loginProcess.php" method="post">                     
                            <div class="form-group">
                                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
                                    <div class="col-sm-7">
                                      <input type="text" class="form-control" id="txtEmail" name="txtEmail" >
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="inputPassword" class="col-sm-2 control-label">Password</label>
                                    <div class="col-sm-7">
                                      <input type="password" class="form-control" id="txtPassword" name="txtPassword" placeholder="Password">
                                    </div>
                                  </div>     
                                   <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-7">
                                      <button type="submit" class="btn btn-theme">Login</button>
                                    </div>
                                  </div>
                           </form>                                      
                        </div><!--//faq-wrapper-->
                        <aside class="page-sidebar  col-md-3 col-md-offset-1 col-sm-4 col-sm-offset-1">                    
                            
                        </aside>
                    </div><!--//page-row-->
                </div><!--//page-content-->
            </div><!--//page--> 
        </div><!--//content-->
    </div><!--//wrapper-->

    <!-- ******FOOTER****** --> 
<?php include('includes/footer.php'); ?>