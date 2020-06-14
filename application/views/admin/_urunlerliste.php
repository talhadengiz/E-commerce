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
    	 <a href="<?=base_url()?>admin/urunler/ekle" data-toggle="modal" style="background-color:#ee30a7" class="btn btn-success pull-right" >
                                    Ürün Ekle
                                </a>
	
     Ürünler
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
            <th>Fiyat</th>
			<th>Renkler</th>
			<th>Resim</th>
			<th>Kategori</th>
			<th>Galeri</th>
			
            
           
            
          </tr>
        </thead>
        <tbody>
		
		<?php	
		foreach ($veriler as $rs)
		{
		?>
		
          <tr data-expanded="true">
		  
		  <th scope ="row"><?=$rs->ID?></th>
		    
            <td><?=$rs->UrunAd?></td>
            <td><?=$rs->Fiyat?></td>
            <td><?=$rs->MevcutRenkler?></td>
			
			<td><?php if($rs->resim){  ?>
			 <a href="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->ID?>" > <img src="<?=base_url()?>uploads/<?=$rs->resim?>" height=50> </a>
															
															
			 <?php } else { ?>
															
			 <a type="submit" class="btn btn" href="<?=base_url()?>admin/urunler/resim_yukle/<?=$rs->ID?>" >Resim Yükle</button>
															
				<?php } ?>
            
			</td>
			<td><?=$rs->katadi?></td>
			<td><a href="<?=base_url()?>admin/urunler/galeri_yukle/<?=$rs->ID?> " class="btn btn" >Galeri Ekle  </a></td>
			
			
			<td class="center">
			<td><a href="<?=base_url()?>admin/urunler/duzenle/<?=$rs->ID?>" data-toggle="modal" class="btn btn-success">
                                    Düzenle
                                </a></td>
			
			<td><a href="<?=base_url()?>admin/urunler/incele/<?=$rs->ID?>" data-toggle="modal" class="btn btn-warning">
                                    İncele
                                </a></td>				
			
			<td><a href="<?=base_url()?>admin/urunler/sil/<?=$rs->ID?>" data-toggle="modal" class="btn btn-danger" onclick="return confirm('Silinecek emin misiniz?!');"  >
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
            
								
								
		<!-- //market-->
	
		<div class="agil-info-calendar">
		<!-- calendar -->
		
		<!-- //calendar -->
		
			<div class="clearfix"> </div>
		</div>
			<!-- tasks -->
			
		<!-- //tasks -->
		
</section>
