<?php
/**
 * @package WordPress
 * @subpackage themename
 */
?>


	<!-- </div> #main   -->
	<div class="contenedor_footer">
	
		<div class="elemnetos_footer">

	<footer id="colophon" role="contentinfo">
	
		<div class="columna_footer">

			<div class="contenido_columna">
				<div class="head_colum_footer"><span>Categorías</span></div>
				<div class="lista_ctegorias_footer">
					<ul>
						<?php wp_list_categories('orderby=name&show_count=1&hide_empty=0&exclude=10&title_li'); ?> 
					</ul>
				</div>	

			</div>
		</div>

		<div class="columna_footer">

			<div class="contenido_columna">
			
				<div class="cont_search">
							<?php get_search_form();?>
						</div>
						<div class="seccion_horz_columna"></div>
						<div class="seccion_horz_columna">

							<span>
								<ul>
									<li>Portuguesahoy.com 2013 © Todos los derechos reservados</li>
									<li>Contacto |  Publicidad | Empleo</li>
									<li>RIF: J000000000</li>
								</ul>

							</span>
						</div>
			
			</div>
		
		</div>


		<div class="columna_footer">
			<div class="contenido_columna">
				<div class="head_colum_footer"><span>S&iacute;guenos en</span></div>
				<div id="sin_scroll" class="lista_ctegorias_footer">
					
		    		<ul class="social_foot">
			    		<li><a target=_blank href=https://facebook.com><i class="foundicon-facebook"></i></a></li>
			    		<li><a target=_blank href=https://twitter.com><i class="foundicon-twitter"></i></a></li>
			 			<li><a target=_blank href=https://plus.google.com><i class="foundicon-google-plus"></i></a></li>
			    	</ul>   	
	    		</div><!--.social_list-->
			
			</div>
		</div>

	</footer><!-- #colophon -->
<!-- </div> -->
<!--</div>  #page  -->
</div><!-- .elementos_footer -->

	</div><!-- .contenedor_footer -->
<?php //wp_footer(); ?>

</body>
</html>