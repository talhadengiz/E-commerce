<?php
$this->load->view('_header');


?>


<div id="contact-page" class="container">
    	<div class="bg">
	    	<div class="row">    		
	    		<div class="col-sm-12">    			   			
					<h2 class="title text-center">Adres</h2>    			    				    				
					<div id="googleMap" style="width:100%;height:528px;"></div>

                <script>
                function myMap() {
                var mapProp= {
                    center:new google.maps.LatLng(41.210648, 32.655511),
                    zoom:16,
                };
                var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                }
                </script>

        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA3Of8DSEtM_ZSHp24kAxD3UhCmbohYje8&callback=myMap"></script>
				</div>			 		
			</div> 

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
						<h2 class="title text-center">Bize Yazın</h2>
	    				
						
						
					
						</div>
						
						
						
				    	<form action="<?=base_url()?>home/mesajkaydet" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="adsoy" class="form-control" required="required" placeholder="Ad Soyad">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				            <div class="form-group col-md-12">
				                <input type="tel" name="tel" class="form-control" required="required" placeholder="Tel">
				            </div>
				            <div class="form-group col-md-12" >
				                <textarea style="height:200px;" name="mesaj" id="mesaj" required="required" class="form-control" rows="12" placeholder="Mesajınızı Buraya Yazınız"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gönder">
				            </div>
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
									<a href="https://www.linkedin.com/in/talhadengiz/"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="https://www.linkedin.com/in/talhadengiz/"><i class="fa fa-instagram"></i></a>
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
