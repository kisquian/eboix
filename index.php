<?php include 'inc/common-index-head-page.php'; ?>
<link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/assets/css/hover-min.css">
<?php wp_head(); ?>
<!-- bxSlider CSS file -->
			<link href="<?php bloginfo('template_directory') ?>/assets/css/jquery.bxslider.min.css" rel="stylesheet" />
<style>
	.wrapper.style2 strong, .wrapper.style2 b {
    color: #000;
    font-size: 28px;
}
</style>
</head>
	<body>

		<?php include 'header.php'; ?>

		<!-- Banner -->
			<section class="banner full">

				<?php 
						// the query
						$args = array( 'post_type' => 'portfolio', 'posts_per_page' => '4', 'post__in'  => get_option( 'sticky_posts' ) );
						$the_query = new WP_Query( $args ); ?>

						<?php if ( $the_query->have_posts() ) : ?>

							<!-- pagination here -->

							<!-- the loop -->
							<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<article>
									<img src="<?php the_post_thumbnail_url(); ?>" alt="" />
									<div class="inner">
										<header>
											<?php the_excerpt(); ?>
											<h2><?php the_title(); ?></h2>
										</header>
									</div>
								</article>
							<?php endwhile; ?>
							<!-- end of the loop -->

							<?php wp_reset_postdata(); ?>

						<?php endif; ?>

				

				
			</section>

			<section id="zero" class="wrapper style2">
				<div class="inner">
					
			
				</div>	
			</section>

		<!-- One -->
			<section id="one" class="wrapper style2">
				<div class="inner">
					
					<div class="grid-style">

						<div>
						<h2>Estudio Boix Ingenieros Agrimensores</h2>
				<p><br> Somos una empresa familiar con más de 74 años y tres generaciones presentando servicios de agrimensura en todo el país y en el exterior.</p>
				<p>El equipamiento de última generación y un equipo humano altamente especializado acostumbrado a hacer frente a proyectos ambiciosos acompañan nuestro compromiso con cada trabajo y con cada cliente. <br><br> </p>
				<footer class="">
					<a id="demo01a" href="#animatedModal" class="button special icon fa-search">Nuestro estudio</a>
				</footer>
				</div>
					
						
						

						<div>
							<h3>Trabajos</h3>
							<ul class="bxslider">

							  <li>
							  	<div class="shows" onclick="location.href='<?php echo get_site_url(); ?>/complejos-edilicios/';">VER MAS</div>
							  	<img src="https://www.estudioboix.com.uy/beta/wp-content/uploads/2017/08/grande-verificar-600x300.jpg" title="Complejos Edilicios" />
							  </li>
							  <li>
							  	<div class="shows" onclick="location.href='<?php echo get_site_url(); ?>/obras-civiles/';">VER MAS</div>
							  	<img src="https://www.estudioboix.com.uy/beta/wp-content/uploads/2017/08/96_1-600x300.jpg" title="Obras Civiles" />
							  </li>
							  <li>
							  	<div class="shows" onclick="location.href='<?php echo get_site_url(); ?>/sector-rural/';">VER MAS</div>
							  	<img src="https://www.estudioboix.com.uy/beta/wp-content/themes/estudioBoix/images/zona-rural.jpg" title="Sector Rural" />
							  </li>
							  <li>
							  	<div class="shows" onclick="location.href='<?php echo get_site_url(); ?>/shopping-centers/';">VER MAS</div>
							  	<img src="https://www.estudioboix.com.uy/beta/wp-content/uploads/2017/08/6f4401f06b50d5f2e1e35020e870046d0mg_paysandu_20161122_0329-1-600x300.jpg" title="Shopping Centers" />
							  </li>
							  <li>
							  	<div class="shows" onclick="location.href='<?php echo get_site_url(); ?>/urbanizaciones/';">VER MAS</div>
							  	<img src="https://www.estudioboix.com.uy/beta/wp-content/uploads/2017/08/7f7f3ca263dc361e17c08c95dc4fb913labaguala_aerea_cam01_ajustes-600x300.jpg" title="Urbanizaciones"  />
							  </li>
														</ul>
														<footer class="">
													<a href="<?php echo get_site_url(); ?>/proyectos/" class="button special icon fa-briefcase">Ver proyectos</a>
												</footer>
						
						</div>
				
				


					</div>
				</div>
			</section>

			<?php include 'footer.php'; ?>
			<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.bxslider.min.js"></script>
			
			<script>
			$(document).ready(function(){
			  $('.bxslider').bxSlider({
			  	  mode: 'fade',
			  	  pager: false,
			  	  controls: true,
			  	  autoStart: true,
			  	  auto: true,
			  	  captions: true
			  });

			  $('.shows').hide();

			  $(function() {
				$('.bxslider li').hover(function() { 
				    $('.bxslider li .shows').fadeIn('fast'); 
				}, function() { 
				    $('.bxslider li .shows').fadeOut('fast'); 
				});
				});
			});

			</script>
	</body>
</html>