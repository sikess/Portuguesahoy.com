<?php
/**
 * @package WordPress
 * @subpackage themename
 */

get_header(); ?>

<div class="contenedor"><!--CONTENEDOR DE CUERPO Y LISTA DE POST-->

	<div class="entre_seccion"></div><!--F entre_seccion-->

	<div id="conte_cuerpo">

	<div class="conte_todos_post">


	<div id="primary">
		<div id="content">

			<article id="post-0" class="post error404 not-found" role="article">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Página no encontrada', 'themename' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Puedes seguir con las siguientes noticias', 'themename' ); ?></p>

					<div class="cont_search">
							<?php get_search_form();?>
						</div>

					<?php mas_comentados('M&aacutes comentados');?>

					<?php //the_widget( 'WP_Widget_Tag_Cloud' ); ?>

				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->

</div>  

</div>  </div> 



<div class="entre_seccion"></div><!--F entre_seccion-->


<div class="contenedor"><!-- Footer -->
	<?php get_footer();  ?>
</div><!-- .Footer -->
