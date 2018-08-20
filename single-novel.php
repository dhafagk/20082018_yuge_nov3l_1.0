<?php get_header(); ?>
<div id="wrap" class="about">
		<div id="about">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="profiles outer">
				<div id="about-head">
	<ul id="about-headers">
		
				
		<li class="current"><h2><?php the_title(); ?></h2></li>
		
		
			</ul>
</div>
<div id="about-images">
	<?php if(has_post_thumbnail()){ the_post_thumbnail('page-novel'); }else{ ?> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.png" title="No Image for <?php the_title(); ?>" /> <?php } ?>
</div>
<div id="about-copy">
	<ul id="content-container">
				
		<li class="current"><?php the_content(); ?>
</li>
		

		
			</ul>
</div>			</div>
			<div id="toc-<?php the_id(); ?>" class="services outer">
	<h1>table of content</h1>		
				
		<?php $content = get_post_meta($post->ID, WYSIWYG_META_KEY, true);
        echo $content; ?>

</div>			
			
		</div>
	<?php endwhile; endif; wp_reset_postdata(); ?>
		<div class='footerspace'></div>
	</div>

	<?php get_footer(); ?>