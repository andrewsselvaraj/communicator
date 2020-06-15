<!DOCTYPE html>
<html lang="en">
<head>

<?php include ('metagtag.php');?>
	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append ‘#!watch’ to the browser URL, then refresh the page. -->
	<?php include ('css.php');?>
  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav and touch icons -->
 <?php
 include ('link_rel.php');
 include ('js.php');
 ?>
  
	
</head>

<body>
<div class="container">
	<div class="row clearfix">
		<div class="col-md-12 column">
			<?php include ('menu.php'); 
				include ('header_image.php');
				include ('slideshow.php');
				include ('body_content.php');?>
			
			<div class="row">
				<div class="col-md-4">
					<?php include ('thumbnail1.php');?>
				</div>
				<div class="col-md-4">
					<?php include ('thumbnail2.php');?>
				</div>
				<div class="col-md-4">
					<?php include ('thumbnail3.php'); ?>
				</div>
			</div>
			<div class="row clearfix">
				<?php include ('body_bottom_images.php'); ?>
			</div>
			<div class="row clearfix">
				<?php include ('footer.php'); ?>
			</div>
		</div>
	</div>
</div>
</body>
</html>
