<?php include ('ClassImage.php'); 
$objSetAllValues =new SetAllValues();
$headerDetail= $objSetAllValues->getHeaderDetail();
?>
			<div class="row clearfix">
				<div class="col-md-12 column">
					<img alt="1600x300" src="images/<?php echo $headerDetail->get()?>">								
		</div>
			</div>