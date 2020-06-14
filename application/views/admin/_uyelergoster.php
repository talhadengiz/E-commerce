<!--main content start-->
<section id="main-content">

	<section class="wrapper">
		<!-- //market-->
		<form Id="kullanici_ekle" action="<?=base_url()?>/admin/uyeler/goster/<?=$veriler[0]->Id?>" method="post">
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
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Ad Soyad</label></th>
            <th><input type="text" value="<?=$veriler[0]->adsoyad?>" class="form-control" id="adsoyad" name="adsoyad" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>
		   <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">E-Mail</label></th>
            <th><input type="text" value="<?=$veriler[0]->email?>" class="form-control" id="email" name="email" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>
		   <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Şifre</label></th>
            <th><input type="text" value="<?=$veriler[0]->sifre?>" class="form-control" id="sifre" name="sifre" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>
		  
		
		  
		 
		  
		  </tr>
		 

           <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Cinsiyet</label></th>
            <th><input type="text"  value="<?=$veriler[0]->cinsiyet?>" class="form-control" id="cinsiyet" name="cinsiyet" placeholder="Enter email"></th>
            <th></th>
            <th></th>
           </tr>

           <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Telefon</label></th>
            <th><input type="text"  value="<?=$veriler[0]->telefon?>" class="form-control" id="telefon" name="telefon" placeholder="Enter email"></th>
            <th></th>
            <th></th>
           </tr>

           <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Adres</label></th>
            <th><input type="text"  value="<?=$veriler[0]->adres?>" class="form-control" id="adres" name="adres" placeholder="Enter email"></th>
            <th></th>
            <th></th>
           </tr>

           <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Şehir</label></th>
            <th><input type="text"  value="<?=$veriler[0]->sehir?>" class="form-control" id="sehir" name="sehir" placeholder="Enter email"></th>
            <th></th>
            <th></th>
           </tr>
		  
            
		  
		  
		   
        </thead>
		
		
                                    
                                    
                                </div>
								
	</form>			

	

          
								
		
			
</section>


								
