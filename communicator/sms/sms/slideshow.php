<div class="row clearfix">
				<div class="col-md-12 column">
					<div class="carousel slide" id="carousel-485855">
						<ol class="carousel-indicators">
							<li class="active" data-slide-to="0" data-target="#carousel-485855">
							</li>
							<li data-slide-to="1" data-target="#carousel-485855">
							</li>
							<li data-slide-to="2" data-target="#carousel-485855">
							</li>
						</ol>
						<div class="carousel-inner">
							<?php
							$values= array('heading'=>array('a','b','c'),'content'=>array(''));
							$print = '';
							for ($i=0; $i<count($values['heading']); $i++)
							{
							$a= $i +1;
							$class = ($i ==0)? 'item active' : 'item' ;
							$print .=  '<div class="'.$class.'">
								
								<img alt="" src="images/MAAYAAH'.$a.'.jpg">
								<div class="carousel-caption">
									<h4>
										'.$values['heading'][$i].'
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div>
							</div>';
							}
							echo $print;
							?>
							
						</div> <a class="left carousel-control" href="#carousel-485855" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a> <a class="right carousel-control" href="#carousel-485855" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
					</div>
				</div>
			</div>