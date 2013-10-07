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

		<section id="primary" role="region">
			<div id="content">

			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( __( 'Resultados para: %s', 'themename' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header>

				<?php get_template_part( 'loop', 'search' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found" role="article">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'themename' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'No se encontraron resultados, intente de nuevo', 'themename' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; ?>

			</div><!-- #content -->
		</section><!-- #primary -->

	</div></div></div>


   <div class="el_sidebar">

		<!-- <div class="conte_sidebar"> -->
			<?php get_sidebar(); ?>
		<!-- </div> -->

	</div>  
    
</div><!--FIN CONTENEDOR DE CUERPO Y LISTA DE POST-->
	   
	
	 </div><!-- .conte_cuerpo -->	

<div class="entre_seccion"></div><!--F entre_seccion-->


<div class="contenedor"><!-- Footer -->
	<?php get_footer();  ?>
</div><!-- .Footer -->
