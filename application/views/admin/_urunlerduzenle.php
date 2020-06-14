<!--main content start-->
<section id="main-content">

	<section class="wrapper">
		<!-- //market-->
		<form Id="urun_ekle" action="<?=base_url()?>/admin/urunler/guncellekaydet/<?=$veriler[0]->ID?>" method="post">
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
            <th><input type="text" value="<?=$veriler[0]->UrunAd?>" class="form-control" id="adi" name="UrunAd" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>
		   <tr>
            <th data-breakpoints="xs"><label for="exampleInputEmail1" style="color:#4f4f4f">Fiyatı</label></th>
            <th><input type="text" value="<?=$veriler[0]->Fiyat?>" class="form-control" id="fiyat" name="Fiyat" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>
	
		  
  <tr>
            <th data-breakpoints="xs"><label style="color:#4f4f4f" for="exampleInputEmail1">Mevcut Renkler</label></th>
            <th>

                            <select id="exampleInputEmail1" value="<?=$veriler[0]->MevcutRenkler?>" name="MevcutRenkler" class="form-control m-bot15">
							    <option style="display:none;"><?=$veriler[0]->MevcutRenkler?></option>
                                <option>Siyah</option>
                                <option>Beyaz</option>
                                <option>Kırmızı</option>
								<option>Kahverengi</option>
                            </select></th>
		  </tr>		
		  
		   <tr>
            <th data-breakpoints="xs"><label style="color:#4f4f4f" for="exampleInputEmail1">Durum</label></th>
            <th>

                            <select id="exampleInputEmail1" value="<?=$veriler[0]->UrunMevcut?>" name="UrunMevcut" class="form-control m-bot15">
                                <option style="display:none;"><?=$veriler[0]->UrunMevcut?></option>
								<option>Mevcut</option>
                                <option>Stokta Yok</option>
                                <option>Sınırlı Sayıda</option>
								
                            </select></th>
		  </tr>

           <tr>
          <th style="height:50px;  " data-breakpoints="xs"><label style="color:#4f4f4f" for="exampleInputEmail1">Kategoriler</label></th>
            <th>

                           <select style="width:300px;  " id='stateCombo' class="form-control m-bot15" onchange='stateComboChange();'> 
                            <option value='0' title='-select one-'>-Kategori Seçiniz..-</option> 

                              <?php foreach ($ust_kategoriler as $rs)  {     ?>

                            <option value='<?=$rs->Id?>' title='Vic'><?=$rs->Ad?></option> 

                              <?php }?>

                            </select> 

                            <select style="width:300px;  " id='cityCombo' name="kategori_id" class="form-control m-bot15" onchange='cityComboChange();'> 
                            <option value='-1' title='-select state first-'>-Önce Kategori Seçiniz-</option> 
                            </select> </th>



            </tr>
		  
	

		

             <tr>
		  	     <th data-breakpoints="xs"><label style="color:#4f4f4f" for="exampleInputEmail1">Açıklama</label></th>
                                              <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
                                                <th>
                                                   
                                                    <textarea id="aciklama" name="UrunAciklama" class="form-control" > <?=$veriler[0]->UrunAciklama?> </textarea>
                                                        <script>
                                                            // Replace the <textarea id="editor1"> with a CKEditor
                                                            // instance, using default configuration.
                                                            CKEDITOR.replace( 'aciklama' );
                                                        </script></th>
                                              
                                            	
            </tr>
		  
		  <tr>
		  <th></th><th></th><th></th><th>
		  
		  <button type="submit" data-toggle="modal" style="background-color:#ee30a7" class="btn btn-success pull-right">Güncelle</button>
		 </th></tr>
		   
        </thead>
		
		
                                    
                                    
                                </div>


                                <script> 
function byId(e) {return document.getElementById(e);} 

function stateComboChange() 
{ 
var combo1 = byId('stateCombo'); 
var combo2 = byId('cityCombo'); 
// alert(combo1.value); 

emptyCombo(combo2); 
switch(combo1.value) 
{ 
case '-1': addOption(combo2, -1, '- Şehir Seçiniz -'); 
break; 
case '1': addOption(combo2, 7, 'Akustik'); 
addOption(combo2, 8, 'Bas'); 
addOption(combo2, 9, 'Elektro'); 
addOption(combo2, 10, 'Klasik'); 
break; 
case '2': addOption(combo2, 11, 'Bağlama'); 
addOption(combo2, 12, 'Cura'); 
addOption(combo2, 13, 'Kemane'); 
break; 
case '3': addOption(combo2, 14, 'Keman'); 
addOption(combo2, 15, 'Çello'); 
addOption(combo2, 16, 'Kontrbas'); 
break; 
case '4': addOption(combo2, 17, 'Akustik Davullar'); 
addOption(combo2, 18, 'Ziller'); 
break; 
case '5': addOption(combo2, 19, 'Org'); 
addOption(combo2, 20, 'Piyanolar'); 
break; 
} 
cityComboChange(); 
} 

function cityComboChange() 
{ 
var combo2, tgt; 
combo2 = byId('cityCombo'); 
tgt = byId('tgt'); 

tgt.innerHTML = combo2.options[combo2.options.selectedIndex].title; 
} 

function emptyCombo(e) 
{ 
e.innerHTML = ''; 
} 

function addOption(combo, val, txt) 
{ 
var option = document.createElement('option'); 
option.value = val; 
option.title = txt; 
option.appendChild(document.createTextNode(txt)); 
combo.appendChild(option); 
} 

</script> 
								
	</form>			

	

          
								
		
			
</section>


								
	   </tr>
       <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
		  
		   
		    <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>

            			