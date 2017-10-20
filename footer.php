
<?php include 'inc/modals/nuestro-estudio.php'; ?>
<?php include 'inc/modals/servicios.php'; ?>
<?php include 'inc/modals/contacto.php'; ?>



<!-- Two -->
			<section id="foot" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<img src="https://www.estudioboix.com.uy/beta/wp-content/themes/estudioBoix/images/logo-white.png" alt="Ingenieros Agrimensores Estudio Boix" style="text-align: center">
						<p>&copy; 2017 - Todos los derechos reservados.</p>
					</header>
				</div>
			</section>
			

			<?php wp_footer(); ?>
			<!-- Scripts -->
			<script src="<?php bloginfo('template_directory') ?>/assets/js/jquery.min.js"></script>
			<script src="<?php bloginfo('template_directory') ?>/assets/js/jquery.scrollex.min.js"></script>
			<script src="<?php bloginfo('template_directory') ?>/assets/js/skel.min.js"></script>
			<script src="<?php bloginfo('template_directory') ?>/assets/js/util.js"></script>
			<script src="<?php bloginfo('template_directory') ?>/assets/js/main.js"></script>
			<script src="<?php bloginfo('template_directory') ?>/assets/js/animatedModal.min.js"></script>

			<script>
			    $("#demo01").animatedModal({
			    	modalTarget: 'animatedModal',
			        animatedIn:'fadeIn',
			        animatedOut:'fadeOut',
			        animationDuration:'.5s'
			    });
			    $("#demo01a").animatedModal({
			    	modalTarget: 'animatedModal',
			        animatedIn:'fadeIn',
			        animatedOut:'fadeOut',
			        animationDuration:'.5s'
			    });
			    $("#demo01b").animatedModal({
			    	modalTarget: 'animatedModalServicios',
			        animatedIn:'fadeIn',
			        animatedOut:'fadeOut',
			        animationDuration:'.5s'
			    });
			    $("#demo01c").animatedModal({
			    	modalTarget: 'animatedModalServicios',
			        animatedIn:'fadeIn',
			        animatedOut:'fadeOut',
			        animationDuration:'.5s'
			    });
			    $("#demo01d").animatedModal({
			    	modalTarget: 'animatedModalServicios',
			        animatedIn:'fadeIn',
			        animatedOut:'fadeOut',
			        animationDuration:'.5s'
			    });
			    $("#contacto").animatedModal({
			    	modalTarget: 'animatedModalContacto',
			        animatedIn:'fadeIn',
			        animatedOut:'fadeOutUp',
			        animationDuration:'.5s'
			    });
			</script>
