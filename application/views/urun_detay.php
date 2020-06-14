<?php
 
 $this->load->view('_header');
 
?>




					<div style="margin-left:200px; height:500px;  " class="product-details"><!--product-details-->
						<div class="col-sm-3">
							<div class="view-product">
								<img src="<?=base_url()?>uploads/<?=$veri[0]->resim?>" alt="">
								
							</div>


							
								
								  <!-- Wrapper for slides -->
						

<div class="row" >
	<?php   $sn=0;  foreach($resimler as $rs) {    $sn++;  ?>
  <div style="margin-top:50px; " class="column" >
    <img src="<?=base_url()?>uploads/<?=$rs->resim?>" style="width:100%; height:80px; " onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <?php    }      ?>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">
<?php   $sn=0;  foreach($resimler as $rs) {    $sn++;     ?>
    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="<?=base_url()?>uploads/<?=$rs->resim?>" style="width:100%">
    </div>
<?php    }  ?>
 

   
    
    
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container" >
      <p id="caption"></p>
    </div>


  </div>
</div>



									</div>

								
							

						


						<div class="col-sm-7">
						<?php if ($this->session->flashdata("sonuc"))
					{      ?>
                         <div  class="alert alert-warning">
						 
						 
                          <button style="background-color:#ee30a7" type="button" aria-hidden="true" class="close">×</button>  
						  
						  
						  
						  
                          <span>
						  
						  
						  
                         <b> İşlem-</b> <?= $this->session->flashdata("sonuc")?></span>
						 
						 </div>
						 
                         
						 
						 
						<?php  
						}
						
						?> 

							<div style="margin-left:100px; " class="product-information"><!--/product-information-->
								
								<h2><?=$veri[0]->UrunAd?></h2>
								
								<img src="" alt="">
								<span>
									<span><?=$veri[0]->Fiyat?> TR</span>
									
									
									
					<form action="<?=base_url()?>Home/sepete_ekle/<?=$veri[0]->ID?>" method="post">
					
					         <label>Adet:</label>
							
							<input type="text" name="adet" value=1 >
							
							<button type="submit" class="btn btn-default">Sepete Ekle</button>
					</form>
									
									
								</span>
								<p><b>Stok:</b><?=$veri[0]->UrunMevcut?></p>
								<p><b>Kategori:</b><?=$tekurun[0]->katadi?></p>
								<p><b>Renk:</b><?=$tekurun[0]->MevcutRenkler?></p>
								
							</div><!--/product-information-->
						</div>
					</div><!--/product-details-->
					
					<div style="margin-left:150px; margin-right:100px;" class="category-tab shop-details-tab"><!--category-tab-->
						<div class="col-sm-12">
							<ul class="nav nav-tabs">
								<li><a href="#details" data-toggle="tab">Özellikler</a></li>
								      
								 
								<li class="active"><a href="#reviews" data-toggle="tab">Reviews </a></li>
							</ul>
						</div>

						<div class="tab-content">

							<div class="tab-pane fade" id="details">
								<div class="col-sm-3">
									<div style="width:2000px; " class="product-image-wrapper">
										<div style="width:1000px; " class="single-products">
											<div style="width:1000px; " class="productinfo text-center">
												
												<p><?=$veri[0]->UrunAciklama?></p>
												
												
											</div>
											
										</div>
										
										
									</div>
									
								</div>
								
								
								
							</div>
							
							
							
							<div class="tab-pane fade active in" id="reviews"><?php
									foreach($yorumlar as $rs)
					
						{
						?>
						
									
									<ul class="sinlge-post-meta">
										<li><i class="fa fa-user"></i><?=$rs->adsoy?></li>
									
										<li><i class="fa fa-calendar"></i><?=$rs->tarih?></li>
									</ul>
									<p><?=$rs->mesaj?></p>
									
								
									
                      <?php
					
						
						}
						?>
								<div class="col-sm-12">
								            
									<p><b>Yorum Yazın</b></p>
									
								<form action="<?=base_url()?>home/yorumkaydet/<?=$urun[0]->ID?>" id="main-contact-form" class="contact-form row" name="contact-form" method="post">
				            <div class="form-group col-md-6">
				                <input type="text" name="adsoy" class="form-control" required="required" placeholder="Ad Soyad">
				            </div>
				            <div class="form-group col-md-6">
				                <input type="email" name="email" class="form-control" required="required" placeholder="Email">
				            </div>
				           
				            <div class="form-group col-md-12">
				                <textarea name="mesaj" id="mesaj" required="required" class="form-control" rows="8" placeholder="Mesajınızı Buraya Yazınız"></textarea>
				            </div>                        
				            <div class="form-group col-md-12">
				                <input type="submit" name="submit" class="btn btn-primary pull-right" value="Gönder">
				            </div>
				        </form>
								</div>
							</div>
							
						</div>

<script>
function openModal() {
  document.getElementById('myModal').style.display = "block";
}

function closeModal() {
  document.getElementById('myModal').style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>


<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;

}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 20%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 80px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: black;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 70%;
  max-width: 1000px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;


}

.cursor {
  cursor: pointer
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 40%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: black;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
  transition: 0.3s
}

.hover-shadow:hover {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19)
}
</style>


					</div><!--/category-tab-->
					
					
				
				<?php
				
                $this->load->view('_footer');
                 
				 ?>

			
