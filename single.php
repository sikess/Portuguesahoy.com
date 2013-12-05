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

			<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article">
					<header class="entry-header-sp">
						
							<div class="entry-title-sp"><?php the_title(); ?></div>
							
					
						<div class="entry-meta-sp">
							<?php
								printf( __( '<span class="meta-prep meta-prep-author">Publicado el </span><a href="%1$s" rel="bookmark"><time class="entry-date" datetime="%2$s" pubdate>%3$s</time></a> <span class="meta-sep">', 'themename' ),
									get_permalink(),
									get_the_date( 'c' ),
									get_the_date(),
									get_author_posts_url( get_the_author_meta( 'ID' ) ),
									sprintf( esc_attr__( 'Ver noticias por %s', 'themename' ), get_the_author() ),
									get_the_author()
								);
							?>
						</div><!-- .entry-meta -->
					</header><!-- .entry-header -->

					<div class="entry-content-sp">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'themename' ), 'after' => '</div>' ) ); ?>
					</div><!-- .entry-content -->

					<footer class="entry-meta-sp">
						<?php
							$tag_list = get_the_tag_list( '', ', ' );
							if ( '' != $tag_list ) {
								$utility_text = __( 'Pubicado en %1$s y tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'themename' );
							} else {
								$utility_text = __( 'Pubicado en %1$s. Etiquetas <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'themename' );
							}
							printf(
								$utility_text,
								get_the_category_list( ', ' ),
								$tag_list,
								get_permalink(),
								the_title_attribute( 'echo=0' )
							);
						?>

						<?php edit_post_link( __( 'Edit', 'themename' ), '<span class="edit-link">', '</span>' ); ?>
					</footer><!-- .entry-meta -->
				</article><!-- #post-<?php the_ID(); ?> -->

			
				<?php comments_template( '', true ); ?>

			<?php endwhile; // end of the loop. ?>

	
			</div><!-- #content --><?php relacionados('Noticias relacionadas'); ?>
		</div><!-- #primary -->

		
		
		

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
