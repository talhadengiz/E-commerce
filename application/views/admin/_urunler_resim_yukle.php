<!--main content start-->
<section id="main-content">

	<section class="wrapper">
		<!-- //market-->
		
		<div class="col-md-12">
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
		
          <h4 class="title">Resim Yükleme</h4>   
                                 
						*Yüklenecek resim türleri (gif|jpg|png) 
						maximum çözünürlük 1024*1024<br> boyut :1000kb geçmemelidir.
						
						
						
						<br><br><br>	

						
						
					
						
				<?php if ($this->session->flashdata("mesaj"))
					{      ?>
                         <div class="alert alert-warning">
						 
						 
                          <button style="background-color:#ee30a7" type="button" aria-hidden="true" class="close">×</button>  
						  
						  
						  
                          <span>
						  
						  
						  
                         <b> Hata - </b> <?= $this->session->flashdata("mesaj")?></span>
						 
						 </div>
						 
                         
						 
						 
						<?php  }?> 
						 
						 
		  
                   
				  
                                   
	   <form role="form" id="urun_resim_ekle" enctype="multipart/form-data" action="<?=base_url()?>/admin/urunler/resim_kaydet/<?=$id?>" method="post" >
 
	    		 <button  type="submit" style="background-color:#ee30a7"  class="btn btn-primary btn-round pull-left">Resim Yükle</button>
	            
                                           
							
                                            
															 
			<label class="custom-file">  
			<input type="file" id="resim" name="resim" required id="file" class="custom-file-input">  
		 
		</label> 
															

                                           
											 
					</div>						
                                      
										
		              	  
          

		   
        </thead>
		
		
                                    
                                    
                                
								
	</form>			

	

          
								
		
			
</section>


								
