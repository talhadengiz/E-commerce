<?php
 
 $this->load->view('_header');

?>

<?php if ($this->session->flashdata("sonuc")) 
		{	  ?>
		<div class="alert alert-danger" role="alert">
					<strong>İşlem!</strong> <?=$this->session->flashdata("sonuc")?>
				</div>
		<?php } ?>


<section id="cart_items">
   <div style="margin-left:150px; margin-right:150px;" class="main-container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
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

				
							
						
					</tbody>
					
				</table>
				<td><td><td><td><td><td class="cart_total">
								<p class="cart_total_price">Toplam Tutar=<?=$toplam?> TL</p>
							</td></td></td></td></td></td>
							<?php 
							if($veriler):
							
							?>
							
						<td><td><td><td><a style="margin-left:970px; background-color: #FFA500;" href="<?=base_url()?>home/odeme/<?=$veriler[0]->Id?>" data-toggle="modal" class="btn btn-danger"  >
                                    Ödeme
                                </a></td></td></td></td>
								
								<?php 
                              endif
							
								?>
			</div>
		</div>
	</section>	
		<?php
				
                $this->load->view('_footer');
                 
				 ?>
