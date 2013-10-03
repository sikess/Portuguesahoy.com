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

<!-- PAGINADOR -->
<div class="contenedor"><!-- Paginador -->
	<div class="cont_nav">
		<div class="navigation">
			<?php if(function_exists('pagenavi')) { pagenavi(); } ?>
		</div>
	</div><!-- .cont_nav -->
</div><!-- .Paginador -->
<!-- .AGINADOR -->

<!-- MAS COMENTADOS -->

<div class="contenedor">

	<?php mas_comentados('Mas');?>

	<div class="elements_mas_coment">

		<div class="contne_mas_coment">

			<div class="cuerp_mas_comet">
				s
			</div>

		</div>

		<div class="contne_mas_coment">

			<div class="cuerp_mas_comet">
				s
			</div>
			
		</div>

		<div class="contne_mas_coment">

			<div class="cuerp_mas_comet">
				s
			</div>
			
		</div>


	</div>

</div>


<!-- .MAS COMENTADOS -->


</div><!--Fin conte_todos_post-->
        
   <div class="el_sidebar">

		<!-- <div class="conte_sidebar"> -->
			<?php get_sidebar(); ?>
		<!-- </div> -->

	</div>  
    
		</div><!--FIN CONTENEDOR DE CUERPO Y LISTA DE POST-->
	   
	
	 </div><!-- .conte_cuerpo -->	




<div class="contenedor"><!-- Footer -->
	<?php get_footer();  ?>
</div><!-- .Footer -->
