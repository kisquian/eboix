<?php

/*
*
* Template Name: Contact template
*
*/

include 'inc/common-index-head-page.php'; ?>
<?php wp_head(); ?>
</head>
	</head>
	<body class="contact-page">

		<?php include 'header.php'; ?>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<h2><?php the_title() ?></h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">

					
					<div class="grid-style">

					
							
								<div class="box"><?php echo do_shortcode('[contact-form-7 id="81" title="Formulario de contacto 1"]') ?></div>
								<div class="box">
									<span class="icn icn-location"></span>
									<div class="boxContent">
									<strong>MONTEVIDEO</strong><br>
									Ramón Masini 3208 Ap. 1005 <br>
									Montevideo, Uruguay <br>
									CP: 11300 <br><br>
									</div>
									<div class="clearfix"></div>

									<span class="icn icn-phone"></span>
									<div class="boxContent">
									<strong> Tel: (598) 2709 0202</strong><br><br>
									</div>
									<div class="clearfix"></div>

									<hr>
									<span class="icn icn-location"></span>
									<div class="boxContent">
									<strong> PUNTA DEL ESTE</strong><br>
									Avenida Acuña de Figueroa<br>
									Edificio La Foret Ap 301<br>
									Maldonado-Uruguay<br><br>
									</div>
									<div class="clearfix"></div>

									<span class="icn icn-email"></span>
									<div class="boxContent"><a href="mailto:estudio@estudioboix.com.uy">estudio@estudioboix.com.uy</a></div>
									<div class="clearfix"></div>
							</div>

								<div class="clearfix"></div>

						

					</div>




				</div>
			</section>

			<?php include 'footer.php'; ?>

	</body>
</html>