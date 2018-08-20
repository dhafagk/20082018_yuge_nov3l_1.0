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
	

<div id="wrap" class='work-single'>
		<div id="media">
			<div class="close-video-web"><a href="<?php if(isset($_SERVER['HTTP_REFERER'])) {
  echo $_SERVER['HTTP_REFERER'];
}else{echo esc_url(get_home_url('/'));} ?>"><img class="close-button" src="<?php echo get_template_directory_uri(); ?>/assets/img/close-single.png"/></a></div>
			<div class="the-content">
				<div class="close-video-mobile"><a href="<?php if(isset($_SERVER['HTTP_REFERER'])) {
  echo $_SERVER['HTTP_REFERER'];
}else{echo esc_url(get_home_url('/'));} ?>"><img class="close-button" src="<?php echo get_template_directory_uri(); ?>/assets/img/close-single.png"/></a></div>
				
				<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
								<div class="gallery-info info"> 
						<p class="date"><span><?php the_time('F j, Y'); ?></span></p>
						<h2 class="title"><?php the_title(); ?></h2>
						<?php if(has_post_thumbnail()){ ?>
							<a href="<?php echo get_attachment_link( get_post_thumbnail_id() ); ?>">
							    <?php the_post_thumbnail('single-novel'); ?>
							</a>
						<?php } ?>
						<p><!-- DISINI NOTE TRANSLATOR --></p>
						<ul class="share">
							<li>share:</li>
							<li class="share-link"><a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="blank">f</a></li>
							<li class="share-link"><a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">t</a></li>
						</ul>
						<div class="diff-font"><?php the_content(); ?>
						<?php $get_tags = get_the_tags(); if(!empty($get_tags)) : ?>
							<div class="the-tags"><?php foreach($get_tags as $the_tags){ $names[] = $the_tags->name;} echo implode(', ', $names); ?></div>
						<?php else : echo '<div class="the-tags"></div>'; endif; ?>
						</div>
				</div>


			<?php endwhile; endif; wp_reset_postdata(); ?>

				
				<div class="commentarea">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<?php echo get_post_meta($post->ID, "embed", true); ?>
<?php comments_template(); ?>
<?php endwhile; endif; ?>
</div>	
								
			</div>

		</div>

	</div>

<?php wp_footer(); ?>
</body>
</html>