<?php include 'inc/common-index-head-page.php'; ?>
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
							
							<h2><?php the_title(); ?></h2>
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
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					
				</div>
			</section>

			<?php include 'footer.php'; ?>


	</body>
</html>