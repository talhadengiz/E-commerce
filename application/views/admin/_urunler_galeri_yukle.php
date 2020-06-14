<!--main content start-->

<section id="main-content">

	<section class="wrapper">
		<!-- //market-->
		
		<div class="col-md-12" >
		<table class="table" ui-jq="footable" ui-options='{
        "paging": {
          "enabled": true
        },
        "filtering": {
          "enabled": true
        },
        "sorting": {
          "enabled": true
        }}'>
        <thead>
		<form role="form" id="urun_resim_ekle" enctype="multipart/form-data" action="<?=base_url()?>/admin/urunler/galeri_kaydet/<?=$id?>" method="post" >
          <h4 class="title">Resim Yükleme</h4>   
                                 
								  <label class="custom-file">  
			<input type="file" id="resim" name="resim" required id="file" class="custom-file-input" onChange="this.form.submit();">  
		 
		</label> 
					
						
						
						<br><br><br>	

						
						
						
						
				<?php if ($this->session->flashdata("mesaj"))
					{      ?>
                         <div class="alert alert-warning">
						 
						 
                          <button style="background-color:#ee30a7" type="button" aria-hidden="true" class="close">×</button>  
						  
						  
						  
                          <span>
						  
						  
						  
                         <b> Hata - </b> <?= $this->session->flashdata("mesaj")?></span>
						 
						 </div>
						 
                         
						 
						 
						<?php  
						}
						
						?> 
						 
						 
		  
                   
			
                  
                                   
	   
 
	    		 
	   
	    <?php	
		 foreach ($veriler as $rs)
		{
		?>
	   
	              <div class="col-sm-4 gallery-grids-left">
						<div class="gallery-grid">
							<a class="example-image-link" href="images/g1.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
								<img src="<?=base_url()?>uploads/<?=$rs->resim?>" alt="">
								<div class="captn">
								
									<h4><a href="<?=base_url()?>admin/urunler/resimsil/<?=$id?>/<?=$rs->Id?>" data-toggle="modal" class="btn btn-danger">
                                    Sil
                                </a></h4>
									<p></p>

								</div>
							</a>
						</div>
					</div>
           
       
		
		
		<?php  
		} 
		?>
			
			
                   
															 
			
															

                                           
											 
					</div>						
                                      
										
		              	  
          
		   
        </thead>
		

                                    
                                    
                                
								
	</form>			

	

        
								
		
			
</section>

 
								
