<?php 

/* Template Name: Fullwidth
*
*/

 ?><?php include 'inc/common-index-head-page.php'; ?>
<?php wp_head(); ?>
</head>
	</head>
	<body class="subpage fullsrceen">

		<?php include 'header.php'; ?>

		<!-- One -->
			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<p>Nuevos emprendimiento en el este del país</p>
						<h2><?php the_title() ?></h2>
					</header>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
							
							
							<div class="main-content">
								<?php if (have_posts()) :
								   while (have_posts()) :
								      the_post();
								         the_content();
								   endwhile;
								endif; ?>
							</div>

						</div>
					</div>
				</div>
			</section>

			<?php include 'footer.php'; ?>

	</body>
</html>