<?php
/**
 * @package WordPress
 * @subpackage themename
 */
?>
<?php por_categoria("Regionales",9,10); ?>

<div class="siber_banner_peq">
<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=Sidebar 290x290&random=1&limit=1' ); ?>
</div>

<?php por_categoria("Videos",7,10); ?>

<div class="siber_banner_peq">
<?php if(function_exists( 'wp_bannerize' ))
	wp_bannerize( 'group=Sidebar_2_290x290&random=1&limit=1' ); ?>
</div>
