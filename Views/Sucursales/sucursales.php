<?php headerWeb($data); $m = $data['info']; ?>
<section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?= media()?>/images/footer_background.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			<?= $data['page_url'] ?>
		</h2>
	</section>	
    <!-- <div class="map p-t-30 p-b-30">
		<iframe class="size-303" style="width: 90%;display: grid;justify-self: center;" 
		src="https://www.google.com/maps/d/embed?mid=1kZ0Wm2yElVeISlfxb39DTX24r2shs4hY&amp;ehbc=2E312F"></iframe>
	</div> -->
    <?= html_entity_decode($m['contenido']) ?>
<?php footerWeb() ?>