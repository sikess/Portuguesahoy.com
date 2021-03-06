<?php
/**
 * @package WordPress
 * @subpackage themename
 */
?><!DOCTYPE html>
<!--[if lt IE 7 ]> <html <?php language_attributes(); ?> class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html <?php language_attributes(); ?> class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html <?php language_attributes(); ?> class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html <?php language_attributes(); ?> class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

<head>
	
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta http-equiv="X-UA-Compatible" content="chrome=1">

<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'themename' ), max( $paged, $page ) );

	?></title>
	<meta name="description" content="">
	<meta name="author" content="">
	<!--  Mobile Viewport Fix -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<!-- Place favicon.ico and apple-touch-icons in the images folder -->
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon.png"><!--60X60-->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/social_foundicons.css" type="text/css" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-ipad.png"><!--72X72-->
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-iphone4.png"><!--114X114-->
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri(); ?>/images/apple-touch-icon-ipad3.png">	<!--144X144-->	
	
	<link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>" type="text/css" media="screen, projection" />

	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/general.css" type="text/css" />
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/single_page.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/jquery.jscrollpane.css" type="text/css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory');?>/css/banners.css" type="text/css" />
	



	<?php wp_head(); ?>

	</head>
	
	<body <?php body_class(); ?>>

		<script type="text/javascript">

		$(function()
{
	$('.scroll-pane').jScrollPane();
});

		</script>


<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-45101034-1', 'portuguesahoy.com');
  ga('send', 'pageview');

</script>

<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=Top&random=1&limit=1' ); ?>

	<div class="mi_main">
		<div class="contendor">
	

				<div class="contiene_top"><!-- Contiene_top -->
					<div id="con_menu_top"><!--EL MENU DEL TOP-->
									    
						<div class="cont_search">
							<?php get_search_form();?>
						</div>

						<?php wp_nav_menu( array('menu_id'=>'','menu_class'=>'list_men_top','menu'=>'top')); ?>

					</div><!--EL MENU DEL TOP-->      


				</div><!-- .Contiene_top -->

<div id="cont_cabecera">

		<div class="_cabecera">
    
		    <div id="seccion_cabecera">
		       <!-- Header -->
			<header>
			    <div class="container">
			        <span ><a href="<?php bloginfo('url');?>" id="logoon"></a></span>
			    </div>
			</header>
			<!-- End Header  -->
	      
	      </div><!--FINLOGO-->
    
		    <div id="seccion_cabecera">
		    	
			</div>
	    
    </div><!-- .cont_log_form -->


     <div id="cont_menu_prin">

     		<div id="inicio_link">
            	<ul id="" class="">
 					<li><a href="<?php bloginfo('url');?>"> </a></li>
                </ul>   
            </div><!-- .inicio_link -->

     		<div class="_menu_prin">
     
     		 			
 			<div id="access" role="navigation" class="contiene_mp">
        		  <?php wp_nav_menu( array( 'container_class' => 'menu-header','theme_location' => 'primary' ) );?>
    		</div>
		
		</div><!-- ._menu_prin -->

	
			</div><!--.cont_menu_prin-->
 
		</div>
	</div><!--FIN Head con logo--><!--FIN MAIN-->
 
</div>


	
<div id="main">

