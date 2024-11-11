<?php headerWeb($data); $m = $data['info']; ?>
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('<?= media();	 ?>/images/footer_background.jpg');">
		<h2 class="ltext-105 cl0 txt-center">
			<?= $data['page_url']?>
		</h2>
	</section>	

    <!-- <section class="bg0 p-t-75 p-b-120">
		<div class="container">
			<div class="row p-b-80">
				<div class="col-md-7 col-lg-8">
					<div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
						<h3 class="mtext-111 cl2 p-b-16">
							MISIÓN
						</h3>

						<p class="stext-113 cl6 p-b-26">
							Sorprender a nuestros clientes con productos de alt&iacute;sima calidad por su elaboraci&oacute;n y dise&ntilde;o, generando en ellos fidelizaci&oacute;n con nuestra marca.
						</p>
                        <h3 class="mtext-111 cl2 p-b-16">
							VISIÓN
						</h3>
                        <p class="stext-113 c16 p-b-26">
                            Al 2030, Tortaza ser&aacute; una marca reconocida por brindar productos de alt&iacute;sima calidad, trato muy amable y agradable ambiente de trabajo.
                        </p>
						
					</div>
				</div>

				<div class="col-11 col-md-5 col-lg-4 m-lr-auto">
					<div class="how-bor1 ">
						<div class="hov-img0">
							<img src="<?= media() ?>/images/about-main.jpg" alt="IMG">
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="order-md-12 col-md-7 col-lg-12">
					<div class="txt-center">
						<h3 class="ltext-105">
							NUESTRO EQUIPO
						</h3>
						<p class="stext-113 cl6 p-t-20 p-b-30">
							Tenemos todos los protocolos de Salud.
						</p>
					</div>
				</div>
            </div>
            <div class="order-md-1 m-lr-auto">
                <div class="how-bor2">
                    <div class="hov-img0">
                        <img src="<?= media(); ?>/images/porta_person.jpg" alt="IMG">
                    </div>
                </div>
            </div>
			
		</div>
	</section>	 -->
	<?= html_entity_decode($m['contenido']) ?>

<?php footerWeb() ?>