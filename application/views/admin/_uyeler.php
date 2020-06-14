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
	
     Üyeler
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
            <th>Adı Soyadı</th>
            <th>E-Mail</th>
			<th>Şifre</th>
			<th>Telefon</th>
			<th>Cinsiyet</th>
			
            
           
            
          </tr>
        </thead>
        <tbody>
		
		<?php	
		foreach ($veriler as $rs)
		{
		?>
		
          <tr data-expanded="true">
		  
		  <th scope ="row"><?=$rs->Id?></th>
            <td><?=$rs->adsoyad?></td>
            <td><?=$rs->email?></td>
            <td><?=$rs->sifre?></td>
            <td><?=$rs->telefon?></td>
			<td><?=$rs->cinsiyet?></td>
			
		 <td class="center">
			
			
			<td><a href="<?=base_url()?>admin/uyeler/incele/<?=$rs->Id?>" data-toggle="modal" class="btn btn-warning">
                                    İncele
                                </a></td>				
			
			<td><a href="<?=base_url()?>admin/uyeler/sil/<?=$rs->Id?>" data-toggle="modal" class="btn btn-danger" onclick="return confirm('Silinecek emin misiniz?!');"  >
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
