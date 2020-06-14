<!--main content start-->
<section id="main-content">

	<section class="wrapper">
		<!-- //market-->
		<form Id="slaytlar_ekle" action="<?=base_url()?>/admin/slaytlar/eklekaydet" method="post">
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
            <th data-breakpoints="xs"><label style="color:#4f4f4f" for="exampleInputEmail1">Adı</label></th>
            <th><input type="text" class="form-control" id="adi" name="adi" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>
		 		   <tr>
            <th data-breakpoints="xs"><label style="color:#4f4f4f" for="exampleInputEmail1">Açıklama</label></th>
            <th><input type="text" class="form-control" id="aciklama" name="aciklama" placeholder="Enter email"></th>
            <th></th>
			<th></th>
			
           
            
          </tr>
		  
		 
		  
		 

		

			
							<tr>
							<th></th><th>
							<textarea name="editor1" id="editor1" rows="4" cols="50">
            
		  
		  
                             </textarea>
							 </th>
							 </tr>
		  
		  
		   <!--<tr>
            <th data-breakpoints="xs"><label style="color:#4f4f4f" for="exampleInputEmail1">Resim</label></th>
            <th>

            <label class="custom-file">  
			<input type="file" id="resim" name="resim" required id="file" class="custom-file-input"> 
							 
		   </tr>-->
       <script src="<?=base_url()?>ckeditor/ckeditor.js"></script>
		  
		   
		    <script>
                // Replace the <textarea id="editor1"> with a CKEditor
                // instance, using default configuration.
                CKEDITOR.replace( 'editor1' );
            </script>
            
		  
		  <tr>
		  <th></th><th></th><th></th><th>
		  
		  <button type="submit" data-toggle="modal" style="background-color:#ee30a7" class="btn btn-success pull-right">Kaydet</button>
		 </th></tr>
		   
        </thead>
		
		
                                    
                                    
                                </div>
								
	</form>	

 
								
		
			
</section>


								
