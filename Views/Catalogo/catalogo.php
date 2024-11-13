<?php headerWeb($data) ?>
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?= media()?>/images/footer_background.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			Catálogo
		</h2>
	</section>	
<div class="container">
	<div class="row isotope-grid p-t-30">
		<?php foreach ($data['cat'] as $n) { ?>
			<div class="col-sm-6 col-md-4 col-lg-4 p-b-35 isotope-item women">
			<!-- Block2 -->
			<div class="block2">
				<div class="block2-pic hov-img0">
					<img src="Assets/images/tajada.webp" alt="IMG-PRODUCT">

					<a href="<?= base_url()."/".$n['ruta'] ?>" class="block2-btn flex-c-m stext-103 cl2 size-102 bg11 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
						<?= $n['descripcion'] ?>
					</a>
				</div>
			</div>
		</div>
		<?php } ?>
		
	</div>
</div>
<?php footerWeb() ?>