<?php /* 
Template Name: Portfolio 
*/
include 'inc/common-index-head-page.php'; ?>
<?php wp_head(); ?>

</head>
	</head>
	<body class="subpage">

		<?php include 'header.php'; ?>

		<!-- One -->
			<section id="One" class="wrapper style3 "style="background-image: url('<?php the_post_thumbnail_url('full');?>')">
				<div class="inner">
					<div class="box">
						<div class="content">
							
							<h2 class="portfolioTitle"><?php the_title(); ?></h2>
							<div class="main-content">
								<?php if (have_posts()) :
								   while (have_posts()) :
								      the_post();
								         the_content();
								   endwhile;
								endif; ?>
								<div class="clearfix"></div>
							</div>

							

						</div>
					</div>
				</div>
				<div class="clearfix"></div>
				<div class="masTrabajos">
						    <h3 style="text-transform: none;">Mas trabajos</h3>
						    <a href="<?php echo get_site_url(); ?>/urbanizaciones/">Urbanizaciones</a> - <a href="<?php echo get_site_url(); ?>/complejos-edilicios/">Complejos Edilicios</a> - <a href="<?php echo get_site_url(); ?>/shopping-centers/">Shopping Centers</a> - <a href="<?php echo get_site_url(); ?>/obras-civiles/">Obras Civiles</a> - <a href="<?php echo get_site_url(); ?>/sector-rural/">Sector Rural</a>
						    
						    </div>
						    <div class="clearfix"></div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					
				</div>
			</section>

			<?php include 'footer.php'; ?>


	</body>
</html>