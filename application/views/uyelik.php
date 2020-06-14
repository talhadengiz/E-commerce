<?php
 
 $this->load->view('_header');
 
?>
<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Giriş Yap</h2>
						<form action="<?=base_url()?>Home/uyegiris_yap" method="post">
							<input type="text" name="email" placeholder="E-mail">
							<input type="password" name="sifre" placeholder="Sifre">
							<span>
								<input type="checkbox" class="checkbox"> 
								Beni Hatırla
							</span>
							<button type="submit" class="btn btn-default">Login</button>
						</form>
					</div><!--/login form-->
				</div>
				
				
				<div class="col-sm-1">
					<h2 class="or">OR</h2>
				</div>
				
       
	   <div class="col-sm-4">
				
				
					<div class="signup-form"><!--sign up form-->
					
					
						<h2>Üye İşlemleri!</h2>
						<?php if ($this->session->flashdata("mesaj"))
					{      ?>
                         <div class="alert alert-warning">
						 
						 
                          <button style="background-color:#ee30a7" type="button" aria-hidden="true" class="close">×</button>  
						  
						  
						  
                          <span>
						  
						  
						  
                         <b> İşlem-</b> <?= $this->session->flashdata("mesaj")?></span>
						 
						 </div>
						 
                         
						 
						 
						<?php  
						}
						
						?> 
						
						<form action="<?=base_url()?>musteriler/eklekaydet" method="post" class="form-signin">
											 
						   <tr>
							<th data-breakpoints="xs"><label for="exampleInputEmail1"></label></th>
							<th><input type="text" class="form-control" id="adsoyad" name="adsoyad" placeholder="Ad Soyad"></th>
							<th></th>
							<th></th>
							
						   
							
						  </tr>
						  
						   <tr>
							<th data-breakpoints="xs"><label for="exampleInputEmail1"></label></th>
							<th><input type="text" class="form-control" id="email" name="email" placeholder="E-mail"></th>
							<th></th>
							<th></th>
							
						   
							
						  </tr>
						  
						   <tr>
							<th data-breakpoints="xs"><label for="exampleInputEmail1"></label></th>
							<th><input type="password" class="form-control" id="sifre" name="sifre" placeholder="Şifre"></th>
							<th></th>
							<th></th>
							
						   
							
						  </tr>

						     <tr>
							<th data-breakpoints="xs"><label for="exampleInputEmail1"></label></th>
							<th><input type="text" class="form-control" id="telefon" name="telefon" placeholder="Telefon"></th>
							<th></th>
							<th></th>
							
						   
							
						  </tr>

						     <tr>
							<th data-breakpoints="xs"><label for="exampleInputEmail1"></label></th>
							<th><input type="text" class="form-control" id="cinsiyet" name="cinsiyet" placeholder="Cinsiyet"></th>
							<th></th>
							<th></th>
							
						   
							
						  </tr>
							<button type="submit" class="btn btn-default">Kaydol</button>
						</form>
					</div><!--/sign up form-->
				</div>
		    </div>
		</div>
	</section>
			
			
				<?php
				
                $this->load->view('_footer');
                 
				 ?>