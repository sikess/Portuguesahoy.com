<?php
/**
 * @package WordPress
 * @subpackage themename
 */

get_header(); ?>

<div id="cont-recent">
	
    <div class="entre_seccion">
    </div><!--F entre_seccion-->
		<div id="conter-pop">
          <?php //los_recientes(); /*echo popularPosts(4);*/ ?>
        </div>
   </div><!--F conter-pop-->
</div><!--FIn recent-->


<div class="contenedor"><!--CONTENEDOR DE CUERPO Y LISTA DE POST-->

	<div class="entre_seccion"></div><!--F entre_seccion-->

	<div id="conte_cuerpo">

	<div class="conte_todos_post">


<!--<div id="primary" class="container">
	<div id="content">-->
		<?php get_template_part( 'loop', 'index' ); ?>
<!--	</div><!-- #content -->
<!--</div>--><!-- #primary -->



</div><!--Fin conte_todos_post-->
        
   <div class="el_sidebar">

		<!-- <div class="conte_sidebar"> -->
			<?php get_sidebar(); ?>
		<!-- </div> -->

	</div>  
    
</div><!--FIN CONTENEDOR DE CUERPO Y LISTA DE POST-->
    
 </div><!-- .conte_cuerpo -->	

	


<?php /*get_sidebar(); */?>
<?php /*get_footer();*/ ?>