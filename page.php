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
			<div id="content-sp">

				<?php the_post(); ?>

				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
					<header class="entry-header">
						<h1 class="entry-title"><?php the_title(); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
						<?php edit_post_link( __( 'Edit', 'themename' ), '<span class="edit-link">', '</span>' ); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-<?php the_ID(); ?> -->

				<?php //comments_template( '', true ); ?>

			</div><!-- #content -->
		</div><!-- #primary -->
<?php //if (function_exists('wp_corenavi')) wp_corenavi(); ?>


	<?php relacionados('Noticias relacionadas'); ?>

</div>

<div class="el_sidebar">

		<!-- <div class="conte_sidebar"> -->
			<?php get_sidebar(); ?>
		<!-- </div> -->

</div>  

</div>  

</div>  </div> 

<div class="entre_seccion"></div><!--F entre_seccion-->


<div class="contenedor"><!-- Footer -->

	<?php get_footer();  ?>
</div><!-- .Footer -->
