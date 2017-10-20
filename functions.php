<?php add_theme_support( 'post-thumbnails');

add_image_size( 'index-thumb', 600, 300, true );

/*
 * Add a portfolio custom post type.
 */
add_action('init', 'create_redvine_portfolio');
function create_redvine_portfolio() 
{
  $labels = array(
    'name' => _x('Proyectos', 'portfolio'),
    'singular_name' => _x('Proyecto', 'portfolio'),
    'add_new' => _x('Añadir', 'portfolio'),
    'add_new_item' => __('Agregar proyecto'),
    'edit_item' => __('Editar proyecto'),
    'new_item' => __('Nuevo proyecto'),
    'view_item' => __('Ver proyecto'),
    'search_items' => __('Buscar proyectos'),
    'not_found' =>  __('No encontrado'),
    'not_found_in_trash' => __('No encontrado en papelera'), 
    'parent_item_colon' => ''
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_ui' => true, 
    'query_var' => true,
    'rewrite' => true,
    'capability_type' => 'post',
    'hierarchical' => false,
    'menu_position' => 20,
    'supports' => array('title','editor','thumbnail')
  ); 
  register_post_type('portfolio',$args);
}

register_taxonomy( "portfolio-categories", 
	array( 	"portfolio" ), 
	array( 	"hierarchical" => true,
			"labels" => array('name'=>"Categorías",'add_new_item'=>"Agregar proyecto"), 
			"singular_label" => __( "Proyecto" ), 
			"rewrite" => array( 'slug' => 'fields', // This controls the base slug that will display before each term 
			                    'with_front' => false)
		 ) 
);


/*
Add in a custom icon for the dashboard
*/
add_action( 'admin_head', 'portfolio_icons' );
function portfolio_icons() {
    ?>
    <style type="text/css" media="screen">
        #menu-posts-portfolio .wp-menu-image {
            background: url(<?php bloginfo('template_url') ?>/images/your_image.png) no-repeat 6px -17px !important;
        }
		#menu-posts-portfolio:hover .wp-menu-image, #menu-posts-portfolio.wp-has-current-submenu .wp-menu-image {
            background-position:6px 7px!important;
        }
    </style>
 
 
<?php } ?>
