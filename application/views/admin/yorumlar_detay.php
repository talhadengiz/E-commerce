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
	
     Mesaj Detayları
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
		
		
        
		
          <tr>
            <th data-breakpoints="xs">ID</th>
			<tr><th>Adı Soyadı</th><td><?=$veriler[0]->adsoy?></td> </tr>
            <tr><th>E-Mail</th> <td><?=$veriler[0]->email?></td></tr>
            
			<tr><th>Mesaj</th><td size="2px"><?=$veriler[0]->mesaj?></td></tr>
			<tr><th>Tarih</th><td><?=$veriler[0]->tarih?></td></tr>
			<tr><th>Ip</th><td><?=$veriler[0]->IP?></td></tr>
			<tr><th>Durum</th><td><?=$veriler[0]->durum?></td></tr>
			<tr><th>Notunuz</th>
			<td>
			<form Id="kullanici_ekle" action="<?=base_url()?>/admin/yorumlar/guncelle/<?=$veriler[0]->Id?>" method="post">
			
			
			 <textarea id="aciklama" name="aciklama" value="<?=$veriler[0]->adminnotu?>"  class="form-control" ></textarea>
		  
                        
			
			<button type="submit" data-toggle="modal" style="background-color:#ee30a7" class="btn btn-success pull-right">Güncelle</button>
			</form>
			
			</td>
			</tr>
            <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
            
          </tr>
       
        
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

<script>
                                                            // Replace the <textarea id="editor1"> with a CKEditor
                                                            // instance, using default configuration.
                                                            CKEDITOR.replace( 'aciklama' );
                                                        </script>
