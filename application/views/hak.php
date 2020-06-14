<?php
$this->load->view('_header');


?>


<div id="contact-page" class="container">
    	<div class="bg">
	    	

						 <br></br>
            

    		<div class="row">  	
	    		<div class="col-sm-6">
	    			<div class="contact-form">
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
						
	    				
						
						
					
						</div>
						<form Id="hakkimizda" action="<?=base_url()?>/admin/hakkimizda<?=$veriler[0]->Id?>" method="post">
						
						<p><?=$veriler[0]->hakkimizda?></p>

					    </form>
				    	
	    			</div>
	    		</div>
	    		<div class="col-right-4">
	    			<div class="contact-info">
	    			<!--	<h2 class="title text-center">İletişim Bilgileri</h2>
	    				<address>
	    					<?=$veriler[0]->iletisim?>
	    				</address> -->
	    				<div class="social-networks">
	    					<h2 class="title text-center">Sosyal Medya</h2>
							<ul>
								<li>
									<a href="https://www.facebook.com/tansel.sarman"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://www.instagram.com/tansel.sarman/"><i class="fa fa-instagram"></i></a>
								</li>
								
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
<?php
$this->load->view('_footer');


?>
