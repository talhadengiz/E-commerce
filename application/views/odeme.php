<?php
 
 $this->load->view('_header');

?>


<form action="<?=base_url()?>Home/siparis_tamamla?>" method="post">
<section id="cart_items">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Check out</li>
				</ol>
			</div><!--/breadcrums-->

			
		

		

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Kullanıcı Bilgileri</p>
							
								<input class="form-control" name="adsoyad" value="<?=$musteri[0]->adsoyad?>" type="text" placeholder="Ad Soyad">
								<input class="form-control" name="email" value="<?=$musteri[0]->email?>"  type="text" placeholder="Email*">
							
							
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Adres</p>
							<div class="form-one">
								
									<input class="form-control" type="text" name="adres" value="<?=$musteri[0]->adres?>" placeholder="Adres *">
									<input class="form-control" type="text" name="telefon" value="<?=$musteri[0]->telefon?>" placeholder="Tel *">
								
							</div>
							<div class="form-two">
								
									<input class="form-control" type="text" placeholder="Zip / Postal Code *">
									
									<select class="form-control">
									
										<option>-- Ülke --</option>
										<option>Türkiye</option>
										<option>Azerbaycan</option>
										<option>İngiltere</option>
									</select>
									
									<select class="form-control">
									
										<option>-- Şehir --</option>
									</select>
									
								
							</div>
						</div>
					</div>
			

					
                     <div class="col-sm-5">
						<div class="shopper-info">
							<p>Kredi Kartı Bilgileri</p>
							
								<input class="form-control" type="text" placeholder="Kart NO">
								<input class="form-control" type="text" placeholder="İsim">
								<input class="form-control" type="password" placeholder="SKT Ay">
								<input class="form-control" type="password" placeholder="SKT Yıl">
								<input class="form-control" type="password" placeholder="Güvenlik Kodu">
							
							
						</div>
							
					</div>
					
					
					
					<!--<div class="col-sm-3" >
						<div class="order-message">
							<p>Kullanıcı Mesajı</p>
							<textarea class="form-control" name="message" placeholder="Notes about your order, Special Notes for Delivery" rows="16"></textarea>
							
						</div>	
					</div>-->
					
				</div>
				
				
			</div>
			
		</form>		
			
			
			<div class="review-payment">
				<h2>Review &amp; Payment</h2>
			</div>

			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Ürün</td>
							<td class="description"></td>
							<td class="price">Fiyat</td>
							<td class="quantity">Adet</td>
							<td class="total">Toplam</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					
								<?php	
					$sn=0;
					$toplam=0;
		foreach ($veri as $rs)
		{ $sn++;
		$tutar=$rs->urunfiyat * $rs->adet;
		$toplam+=$tutar;
		?>
					
						<tr>
							<td class="cart_product">
								<a href=""><?=$sn?></a>
							</td>
							<td class="cart_product">
							<a href=""><img src="<?=base_url()?>uploads/<?=$rs->urunresim?>" width=150><br><br></a>
							</td>
							
							<td class="cart_description">
								<h4><a href=""><?=$rs->urunadi?></a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p><?=$rs->urunfiyat?> TL</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price"><?=$tutar?></p>
							</td>
							<td><a href="<?=base_url()?>home/sil/<?=$rs->Id?>" data-toggle="modal" style="background-color: #FFA500" class="btn btn-danger" onclick="return confirm('Silinecek emin misiniz?!');"  >
                                    Sil
                                </a></td>
						</tr>
						
						<?php } ?>	

						
						
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tbody>
									<tr>
										<td>KDV</td>
										<td>%2.5</td>
									</tr>
									<tr class="shipping-cost">
										<td>Kargo</td>
										<td>Ücretsiz</td>										
									</tr>
									<tr>
										<td>Toplam Tutar</td>
										<td><span><input width="10" class="form-control" readonly name="tutar" value="<?=$toplam?>" ></span></td>
										
									</tr>
									
								</tbody></table>
								<button type="submit" class="btn btn-primary" href="<?=base_url()?>home/siparis_tamamla">Siparişi Tamamla</button>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
			
			
				
		</div>
	</section> <!--/#cart_items-->
	
	
	
		<?php
				
                $this->load->view('_footer');
                 
				 ?>