<?php include 'inc/common-index-head-page.php'; ?>
<?php wp_head(); ?>
</head>
	</head>
	<body class="common-page">

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

					
					<div class="content">

					
							
								<?php if (have_posts()) :
								   while (have_posts()) :
								      the_post();
								         the_content();
								   endwhile;
								endif; ?>
								<div class="clearfix"></div>

						

					</div>




				</div>
			</section>

			<?php include 'footer.php'; ?>

	</body>
</html>