<?php
/*
* Template Name: Proyectos
*/ 
include 'inc/common-index-head-page.php'; ?>
<?php wp_head(); ?>

</head>
	</head>
	<body class="common-page">
	<div id="spin"></div>


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
			<section id="two" class="wrapper style2" style="">
				<div class="inner">

					
					<div class="content">

					<ul id="filters" class="actions fit small button-group filter-button-group">

				    <?php
				        $terms = get_terms('portfolio-categories');
				        $count = count($terms);
				            echo '<li><button data-filter="*" class="button special fit small active">Todas</button></li>';
				        if ( $count > 0 ){
				 
				            foreach ( $terms as $term ) {
				 
				                $termname = strtolower($term->name);
				                $termname = str_replace(' ', '-', $termname);
				                echo '<li><button data-filter=".'.$termname.'" class="button special fit small">'.$term->name.'</a></li>';
				            }
				        }
				    ?>
				</ul>

				<div id="portfolio" class="grid">
 				<div class="grid-sizer"></div>
				  <?php
				  /* 
				  Query the post 
				  */
				  $args = array( 'post_type' => 'portfolio', 'posts_per_page' => -1, 'meta_key' => 'ano', 'orderby'	=> 'meta_value', 'order' => 'DESC' );
				  $loop = new WP_Query( $args );
				  while ( $loop->have_posts() ) : $loop->the_post(); 
				 
				     /* 
				     Pull category for each unique post using the ID 
				     */
				     $terms = get_the_terms( $post->ID, 'portfolio-categories' );	
				     if ( $terms && ! is_wp_error( $terms ) ) : 
				 
				         $links = array();
				 
				         foreach ( $terms as $term ) {
				             $links[] = $term->name;
				         }
				 
				         $tax_links = join( " ", str_replace(' ', '-', $links));          
				         $tax = strtolower($tax_links);
				     else :	
					 $tax = '';					
				     endif; 
				 
				     /* Insert category name into portfolio-item class */ 
				     echo '<div class="grid-item hvr-curl-top-right '. $tax .'">';
				     $themeDir = 'http://www.estudioBoix.com.uy/beta/wp-content/themes/estudioBoix';
				     if ( has_post_thumbnail() ) {
						    echo '<div class="thumbnail"><a href="'; 
						    echo the_field('shortcode_flip');
						    echo '">';
						    echo get_the_post_thumbnail( $post->ID, 'index-thumb', array( 'class' => 'img-responsive' ) ) .'</a></div>';
						}
						else {
						    echo '<div class="thumbnail"><a href="'.the_field('shortcode_flip').'"><img src="https://www.estudioboix.com.uy/beta/wp-content/uploads/2017/09/Sin-título-1-600x300.jpg" /></a></div>';
						}
				     echo '<div class="grid-item-description" style="cursor:pointer" onClick="document.location.href='; echo the_field('shortcode_flip'); echo '">';
				     echo the_title_attribute();
				     echo '<span class="spanYear">('; echo the_field('ano'); echo ')</span>';
				     echo '</div>';
				     echo '</div>'; 
				     
				  endwhile; ?>
				 
				</div>

					</div>

				</div>
			</section>


			<?php include 'footer.php'; ?>
			<script src="<?php bloginfo('template_directory' ); ?>/assets/js/isotope.pkgd.min.js"></script>
			<script>

				// init Isotope
				var $grid = $('.grid').isotope({
				    // set itemSelector so .grid-sizer is not used in layout
					  itemSelector: '.grid-item',
					  percentPosition: true,
					  masonry: {
					    // set to the element
					    columnWidth: '.grid-sizer'
					  }
				});
				// filter items on button click
				$('.filter-button-group').on( 'click', 'button', function() {
				  var filterValue = $(this).attr('data-filter');
				  $('.filter-button-group li button').removeClass('active');
				  $(this).addClass('active');
				  $grid.isotope({ filter: filterValue });
				});



				
			</script>

			


	</body>
</html>