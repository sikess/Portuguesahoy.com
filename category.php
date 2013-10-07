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

				<header class="page-header">
					<h1 class="page-title"><?php
						printf( __( '%s', 'themename' ), '<span>' . single_cat_title( '', false ) . '</span>' );
					?></h1>

					<?php $categorydesc = category_description(); if ( ! empty( $categorydesc ) ) echo apply_filters( 'archive_meta', '<div class="archive-meta">' . $categorydesc . '</div>' ); ?>
				</header>

				<?php get_template_part( 'loop', 'category' ); ?>

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
