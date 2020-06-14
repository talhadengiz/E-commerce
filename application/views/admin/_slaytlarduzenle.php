<!--main content start-->
<section id="main-content">

	<section class="wrapper">
		<!-- //market-->
		<form Id="urun_ekle" action="<?=base_url()?>/admin/slaytlar/guncellekaydet/<?=$veriler[0]->Id?>" method="post">
		<div class="form-group">
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
		
          <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Adı</label></th>
            <th><input type="text" value="<?=$veriler[0]->adi?>" class="form-control" id="adi" name="adi" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>

                <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Açıklama</label></th>
            <th><input type="text" value="<?=$veriler[0]->aciklama?>" class="form-control" id="adi" name="aciklama" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>
		  
		
		  
  	
		  
		
		  
		 
			


		  
            
		  
		  <tr>
		  <th></th><th></th><th></th><th>
		  
		  <button type="submit" data-toggle="modal" style="background-color:#ee30a7" class="btn btn-success pull-right">Güncelle</button>
		 </th></tr>
		   
        </thead>
		
		
                                    
                                    
                                </div>
								
	</form>			

	

          
								
		
			
</section>


								
