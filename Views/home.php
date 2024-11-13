<?php headerWeb($data) ?>

	<!-- Slider -->
	<section class="section-slide p-b-50">
		<div class="wrap-slick1 rs1-slick1">
			<div class="slick1">
				<div class="item-slick1" style="background-image: url(<?= media() ?>/images/port.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30">
							<!-- <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-202 cl0 respon2">
									TORTAZA
								</span>
							</div> -->
								
							<div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
								<h2 class="ltext-104 cl0 p-t-19 p-b-43 respon1">
									La felicidad en tu casa
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600" hidden>
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg11 bor1 hov-btn1 p-lr-15 trans-04">
									Compra ya!
								</a>
							</div>
						</div>
					</div>
				</div>

				<!-- <div class="item-slick1" style="background-image: url(<?= media()?>/images/slide-02.jpg);">
					<div class="container h-full">
						<div class="flex-col-l-m h-full p-t-100 p-b-30">
							<div class="layer-slick1 animated visible-false" data-appear="rollIn" data-delay="0">
								<span class="ltext-202 cl2 respon2">
									Men New-Season
								</span>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="lightSpeedIn" data-delay="800">
								<h2 class="ltext-104 cl2 p-t-19 p-b-43 respon1">
									Jackets & Coats
								</h2>
							</div>
								
							<div class="layer-slick1 animated visible-false" data-appear="slideInUp" data-delay="1600">
								<a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
									Shop Now
								</a>
							</div>
						</div>
					</div>
				</div> -->
			</div>
		</div>
	</section>


	<!-- Banner -->
	<div class="sec-banner bg0 p-b-50">
		<div class="flex-w flex-c-m">
			
		<!-- Block1 -->
			<?php foreach ($data['cat'] as $n) { ?>
			<div class="col-sm-6 col-md-4 col-lg-4 p-b-35 isotope-item women">
				<div class="block1 wrap-pic-w-80">
					<img src="<?= media()?>/images/special-menu.png" alt="IMG-BANNER">

					<a href="<?= base_url().'/'.$n['ruta'] ?> " class="block1-txt ab-t-l s-full flex-col-l-sb p-lr-38 p-tb-34 trans-03 respon3">
						<div class="block1-txt-child1 flex-col-l">
							<span class="block1-name ltext-102 trans-04 p-b-8">
								<?= $n['descripcion']?>
							</span>
							<!-- <span class="block1-info stext-102 trans-04">
							:D
							</span> -->
						</div>
					</a>
				</div>
			</div>
			
			<?php } ?>
			
		</div>
	</div>


<?php footerWeb() ?>