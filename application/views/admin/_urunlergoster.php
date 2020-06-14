<!--main content start-->
<section id="main-content">

	<section class="wrapper">
		<!-- //market-->
		<form Id="kullanici_ekle" action="<?=base_url()?>/admin/urunler/goster/<?=$veriler[0]->ID?>" method="post">
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
            <th><input type="text" value="<?=$veriler[0]->UrunAd?>" class="form-control" id="ad" name="ad" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>
		   <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Fiyatı</label></th>
            <th><input type="text" value="<?=$veriler[0]->Fiyat?>" class="form-control" id="fiyat" name="fiyat" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>
		   <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Açıklama</label></th>
            <th><input type="text" value="<?=$veriler[0]->UrunAciklama?>" class="form-control" id="aciklama" name="aciklama" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>
		  
  <tr>
            <th data-breakpoints="xs"><label style="color:#4f4f4f" for="exampleInputEmail1">Mevcut Renkler</label></th>
            <th>

                            <select id="exampleInputEmail1" name="renk" class="form-control m-bot15">
                                <option>Siyah</option>
                                <option>Beyaz</option>
                                <option>Kırmızı</option>
								<option>Kahverengi</option>
                            </select></th>
		  </tr>		
		  
		   <tr>
            <th data-breakpoints="xs"><label style="color:#4f4f4f" for="exampleInputEmail1">Durum</label></th>
            <th>

                            <select id="exampleInputEmail1" name="durum" class="form-control m-bot15">
                                <option>Mevcut</option>
                                <option>Stokta Yok</option>
                                <option>Sınırlı Sayıda</option>
								
                            </select></th>
		  </tr>
		  
		 


		  
            
		  
		  <tr>
		  <th></th><th></th><th></th><th>
		  
		  <button type="submit" data-toggle="modal" style="background-color:#ee30a7" class="btn btn-success pull-right">Güncelle</button>
		 </th></tr>
		   
        </thead>
		
		
                                    
                                    
                                </div>
								
	</form>			

	

          
								
		
			
</section>


								
