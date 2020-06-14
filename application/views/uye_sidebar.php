	<?php
	  if(!$this->session->userdata("uye_session"))
		  {
			  
			  $this->session->set_flashdata("login_hata","Önce Giriş Yapınız");
			  redirect(base_url().'home/uyelik');  
		  }	
	
	
	?>
	
	  <div style=1"height=100px;" class="col-sm-2">
					<div class="left-sidebar">
						
						<!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Kategoriler</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li><a href="<?=base_url()?>/home/uyepanel">Profil Bilgileri</a></li>
									<li><a href="<?=base_url()?>home/siparislerim">Siparişler</a></li>
									<li><a href="<?=base_url()?>home/sepetim">Sepet</a></li>
									<li><a href="#">Yorumlar</a></li>
									
									<li><a href="<?=base_url()?>home/cikis_yap">Çıkış</a></li>
									
								</ul>
							</div>
						</div><!--/brands_products-->
						
						
						
						
						
					
					</div>
				</div>