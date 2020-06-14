
				
				
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Çok Satanlar</h2>
						
						<?php
						
						foreach($urunler as $rs)
						
						{
						?>
							<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
										<a href="<?=base_url()?>/home/urundetay/<?=$rs->ID?>"><img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="" /></a>
											<h2><?=$rs->Fiyat?> TR</h2>
											<p><?=$rs->UrunAd?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Sepete Ekle</a>
										</div>
										
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
							</div>
							
							
							
							<?php
					
						
						    }
						     ?>
							 
							
						
						
						
						
						
						
					</div><!--features_items-->
					
				
					
				</div>
			</div>
		</div>
	</section>

	<?php

 $this->load->view('_footer');
 
?>
	