<?php ob_start(); ?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

	<meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	
	<?php wp_head(); ?>
	
</head>
 
			
<body <?php body_class(); ?>>
	

<nav id="web-nav">
	<!-- <a href="<?php echo esc_url(get_home_url('/')); ?>"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo1.png"/></a> -->

	<?php 

			$custom_logo_id = get_theme_mod( 'custom_logo' );
		$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		if ( has_custom_logo() ) {
		        echo '<a href="'. esc_url(get_home_url('/')) .'"><img class="logo" src="'. esc_url( $logo[0] ) .'"></a>';
		} else {
		        echo '<a href="'. esc_url(get_home_url('/')) .'"><img class="logo" src="'. get_template_directory_uri() .'/assets/img/logo1.png"></a>';
		}

	?>
		<?php
    $defaults = array(
        'theme_location'  => 'main',
        'walker'          => new My_Sub_Menu(),
        'container'       =>  false
    );
    wp_nav_menu( $defaults );
?>
	<ul id="address">
		<li><?php echo get_bloginfo( $show, 'display' ); ?></li>
		<li></li>		
		<li><?php echo get_bloginfo( 'description', 'display'); ?></li>

	</ul>
</nav>
	<nav id="mobile-nav">

		<?php 

		$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		if ( has_custom_logo() ) {
		        echo '<a href="'. esc_url(get_home_url('/')) .'"><img class="logo" src="'. esc_url( $logo[0] ) .'"></a>';
		} else {
		        echo '<a href="'. esc_url(get_home_url('/')) .'"><img class="logo" src="'. get_template_directory_uri() .'/assets/img/logo1.png"></a>';
		}

	?>

		<img class="drop-nav" src="<?php echo get_template_directory_uri(); ?>/assets/img/expand-menu.png"/>
	</nav>
	<nav id="mobile-expand">

	<?php 

		$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		if ( has_custom_logo() ) {
		        echo '<a href="'. esc_url(get_home_url('/')) .'"><img class="logo" src="'. esc_url( $logo[0] ) .'"></a>';
		} else {
		        echo '<a href="'. esc_url(get_home_url('/')) .'"><img class="logo" src="'. get_template_directory_uri() .'/assets/img/logo1.png"></a>';
		}

	?>
		<img class="close" src="<?php echo get_template_directory_uri(); ?>/assets/img/close.png"/>
		<div id="hidden-nav">
			
		</div>
		
		<?php wp_nav_menu( array('theme_location' => 'main','container' => '', 'fallback_cb' => '')) ?>		
	</nav>