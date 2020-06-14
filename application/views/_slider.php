<section style="width:1670px; " id="slider"><!--slider-->
		<div style="width:1400px; " class="container">
			<div style="width:3000px; " class="row">
				<div style="width:1400px; " class="">
					<div style="width:1400px; " id="slider-carousel" class="carousel slide" data-ride="carousel">
					


						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>
						
						<div style="width:100%;" class="carousel-inner">
							
								<?php	foreach($slider as $rs) {	?>


							<div class="item <?php if ($rs->Id=="1"): echo "active" ?>
								
							<?php endif ?> ">
								
								<div class="col-sm-16">
									<a href="<?=base_url()?>/home/kategori1/<?=$rs->Id?>"><img style="width:35000px; height:350px; margin-left:80px; " src="<?=base_url()?>/uploads/<?=$rs->resim?>" class="girl img-responsive" alt="" /></a>
								
								</div>
							</div>

								<?php		}	?>
				
							
						</div>
						
						<a style="margin-left:180px; " href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>
					
				</div>
			</div>
		</div>
	</section><!--/slider-->



				
