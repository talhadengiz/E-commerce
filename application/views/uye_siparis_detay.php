<?php
 
 $this->load->view('_header');
 $this->load->view('uye_sidebar');
?>




<section id="cart_items">
   <div class="main-content">
   <div class="table-responsive cart_info">
			
<?php
foreach ($siparis as $rs)
{
?>

			<table style="margin-left:150px;" width=300px; class="table-condensed">
		
		
        <thead>
		
          <tr class="cart_menu">
         
			<tr>
			<th>Adı Soyadı</th>
			<td><?=$rs->adsoy?></td>
			</tr>
			
			<tr><th>Adres</th><td><?=$rs->adres?></td></tr>
			<tr><th>Telefon</th><td><?=$rs->telefon?></td></tr>
			<tr><th>Şehir</th><td><?=$rs->sehir?></td></tr>
			<tr><th>Kargo Firma</th><td><?=$rs->kargofirma?></td></tr>
			<tr><th>Kargo No</th><td><?=$rs->kargono?></td></tr>
          </tr>
		
      </table>
			
           
	<?php
}
?>
		
			
            
           
            
        
     
		
	  
	  
	  
	  <h3>Siparişe Ait Ürünler</h3>
	  
	   <table style="margin-left:100px;" width=1000px; class="table-condensed" >
		
		
        <thead>
		
          <tr class="cart_menu">
         
			<th>Sipariş No</th>
            <th>Tarih</th>
            <th>Tutar</th>
			<th>Durum</th>
			<th>Detay</th>
			
			
       	<?php
                 if($sn>0)
				 {

                ?>	     
           
            
          </tr>
        </thead>
        <tbody>
		
		<?php
                    $sn=0;
					$toplam=0;		
		foreach ($urunler as $rs)
		{     $sn++;
		      $tutar=0;
		?>
		
          <tr >
		  
		  
		    <td><?=$sn?></td>
            <td><?=$rs->tarih?></td>
            <td><?=$rs->tutar?></td>
            <td></td>
		
			
			
			
			
			<td class="center">
			
			
						
			
			
            </td>
			
          </tr>
		  <?php	
		}
		?>
		  
         
        </tbody>
		
      </table>
	  
	  <?php
               
				 }

                ?>
			
		</div>
		</div>
	</section>	
	
	<?php
				
                $this->load->view('_footer');
                 
				 ?>