<!--main content start-->
<section id="main-content">



	<section class="wrapper">
		<!-- //market-->
		<?php if ($this->session->flashdata("sonuc")) 
		{	  ?>
		<div class="alert alert-danger" role="alert">
					<strong>İşlem!</strong> <?=$this->session->flashdata("sonuc")?>
				</div>
		<?php } ?>
		
		
		<div class="table-agile-info">
 <div class="panel panel-default">
    <div class="panel-heading">
	
     Slaytlar
    </div>
    <div>
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
            <th data-breakpoints="xs">ID</th>
			
            <th>Adı</th>
            <th>Açıklama</th>
            <th>Resim</th>
            
			
            
           
            
          </tr>
        </thead>
        <tbody>
		
		<?php	
		foreach ($veriler as $rs)
		{
		?>
		
          <tr data-expanded="true">
		  
		  <th scope ="row"><?=$rs->Id?></th>
		    
            <td><?=$rs->adi?></td>

            <td><?=$rs->aciklama?></td>
           
			
			<td><?php if($rs->resim){  ?>
			 <a href="<?=base_url()?>admin/slaytlar/resim_yukle/<?=$rs->Id?>" > <img src="<?=base_url()?>uploads/<?=$rs->resim?>" height=50> </a>
															
															
			 <?php } else { ?>
															
			 <a type="submit" class="btn btn" href="<?=base_url()?>admin/slaytlar/resim_yukle/<?=$rs->Id?>" >Resim Yükle</button>
															
				<?php } ?>
            
			</td>
		
			
			
			<td class="center">
			<td><a href="<?=base_url()?>admin/slaytlar/duzenle/<?=$rs->Id?>" data-toggle="modal" class="btn btn-success">
                                    Düzenle
                                </a></td>
			
					
			
			<td><a href="<?=base_url()?>admin/slaytlar/sil/<?=$rs->Id?>" data-toggle="modal" class="btn btn-danger" onclick="return confirm('Silinecek emin misiniz?!');"  >
                                    Sil
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
</div>
             <a href="<?=base_url()?>admin/slaytlar/ekle" data-toggle="modal" style="background-color:#ee30a7" class="btn btn-success pull-right" >
                                    Ürün Ekle
                                </a>
								
								
		<!-- //market-->
	
		<div class="agil-info-calendar">
		<!-- calendar -->
		
		<!-- //calendar -->
		
			<div class="clearfix"> </div>
		</div>
			<!-- tasks -->
			
		<!-- //tasks -->
		
</section>
