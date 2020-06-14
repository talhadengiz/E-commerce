<?php
 
 $this->load->view('_header');

?>




<section id="cart_items">
   <div style="margin-left:150px; margin-right:150px;" class="main-content">
   <div class="table-responsive cart_info">
			 <table class="table table-condensed" >
		
		
        <thead>
		
          <tr class="cart_menu">
         
			<th>Sipariş No</th>
            <th>Tarih</th>
            <th>Tutar</th>
			<th>Durum</th>
			<th><th>Detay</th></th>
			
			
            
           
            
          </tr>
        </thead>
        <tbody>
		
		<?php
                    $sn=0;
					$toplam=0;		
		foreach ($sepetler as $rs)
		{     $sn++;
		      $tutar=0;
		?>
		
          <tr >
		  
		  
		    <td><?=$sn?></td>
            <td><?=$rs->tarih?></td>
            <td><?=$rs->tutar?></td>
            <td><?=$rs->durum?></td>
			
		
			
			
			
			
			<td class="center">
			
			
			<td><a href="<?=base_url()?>home/siparis_detay/<?=$rs->Id?>" style="background-color: #FFA500" data-toggle="modal" class="btn btn-warning">
                                    Sipariş Detay
                                </a></td>				
			
			
            </td>
			
          </tr>
		  <?php	
		}
		?>
		  
         
        </tbody>
		
      </table>
			
		</div>
		</div>
	</section>	
	
	<?php
				
                $this->load->view('_footer');
                 
				 ?>