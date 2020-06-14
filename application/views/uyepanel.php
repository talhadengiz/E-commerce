<?php
 
 $this->load->view('_header');
 $this->load->view('uye_sidebar')
?>


<section style="margin-top:-30px; " id="form"><!--form-->




	
			<div class="top: -50px;">
			
			
			<form Id="guncellekaydet" action="<?=base_url()?>home/uyeguncelle/<?=$veriler2[0]->Id?>" method="post" >
											 
						    <tr>
            <td><label for="exampleInputEmail1" style="color:#4f4f4f">Ad Soyad</label></td>
            <td><input type="text" value="<?=$veriler2[0]->adsoyad?>" class="form-control" id="adsoy" name="adsoyad" placeholder="Enter email"></td>
          
           
            
          </tr>
						  
						 <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">E-mail</label></th>
            <th><input type="text" value="<?=$veriler2[0]->email?>" class="form-control" id="adsoy" name="email" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>
						 <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Telefon</label></th>
            <th><input type="text" value="<?=$veriler2[0]->telefon?>" class="form-control" id="adsoy" name="telefon" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>
		  
		   <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Adres</label></th>
            <th><input type="text" value="<?=$veriler2[0]->adres?>" class="form-control" id="adsoy" name="adres" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>
		  
		   <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Şehir</label></th>
            <th><input type="text" value="<?=$veriler2[0]->sehir?>" class="form-control" id="adsoy" name="sehir" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>
							<button type="submit" class="btn btn-default">Güncelle</button>
						</form>
			
			
			
			
			
			
			
			
			
			
			
			
			    </div>
		
	</section>
	
	<?php
				
                $this->load->view('_footer');
                 
				 ?>