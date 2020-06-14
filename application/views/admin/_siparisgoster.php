<!--main content start-->
<section id="main-content">

	<section class="wrapper">
		<!-- //market-->
		<form Id="kullanici_ekle" action="<?=base_url()?>/admin/siparis/goster/<?=$veri[0]->Id?>" method="post">
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

       <div style="margin-left:150px; margin-right:150px;" class="main-container">   <thead>
<?php 
    foreach ($veri as $rs)
    {
    ?>


                <tr>
               <th>  <h2>Sipariş No:<?=$rs->siparis_id?></h2></th>
                </tr>
     
		
								
		
          <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Sipariş ID</label></th>
            <th><input type="text" value="<?=$rs->siparis_id?>" class="form-control" id="siparis_id" name="siparis_id" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>
		   <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Ürün ID</label></th>
            <th><input type="text" value="<?=$rs->urun_id?>" class="form-control" id="urun_id" name="urun_id" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>
		   <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Ürün Adı</label></th>
            <th><input type="text" value="<?=$rs->adi?>" class="form-control" id="adi" name="adi" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>
		  
		
		  
		 
		  
		  
		 

           <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Fiyat</label></th>
            <th><input type="text"  value="<?=$rs->fiyat?>" class="form-control" id="fiyat" name="fiyat" placeholder="Enter email"></th>
            <th></th>
            <th></th>
           </tr>

           <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Tarih</label></th>
            <th><input type="text"  value="<?=$rs->tarih?>" class="form-control" id="tarih" name="tarih" placeholder="Enter email"></th>
            <th></th>
            <th></th>
           </tr>

           <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Adet</label></th>
            <th><input type="text"  value="<?=$rs->adet?>" class="form-control" id="adet" name="adet" placeholder="Enter email"></th>
            <th></th>
            <th></th>
           </tr>

        
		  
            
		  
		  
		   
        
 

   


		
		  <?php 
    }
    ?></thead>

 </div>
                                    
                                    
                                </div>


								
	</form>		



	

          
								
		
			
</section>


								
