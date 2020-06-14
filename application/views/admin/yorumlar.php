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
	
     Yorumlar
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
			
			<th>Mesaj</th>
			<th>Tarih</th>
			<th>Ip</th>
			<th>Durum</th>
            
            
          </tr>
        </thead>
        <tbody>
		
		<?php	
		foreach ($veriler as $rs)
		{
		?>
		
          <tr data-expanded="true">
		  
		  <th scope ="row"><?=$rs->Id?></th>
            <td><?=$rs->adsoy?></td>
            <td><?=$rs->email?></td>
           
            <td size="2px"><?=$rs->mesaj?></td>
			<td><?=$rs->tarih?></td>
			<td><?=$rs->IP?></td>
			<td><?=$rs->durum?></td>
			
			<td class="center">
			<td><a href="<?=base_url()?>admin/yorumlar/detay/<?=$rs->Id?>" data-toggle="modal" class="btn btn-success">
                                    Detay
                                </a></td>
			
						
			
			<td><a href="<?=base_url()?>admin/yorumlar/sil/<?=$rs->Id?>" data-toggle="modal" class="btn btn-danger" onclick="return confirm('Silinecek emin misiniz?!');"  >
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
