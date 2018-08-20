<?php get_header(); ?>
<div id="wrap" class="about about-page">
		<div id="about" class="page-about">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
			<div class="profiles outer page" style="width: 100%;">
				<div id="about-head">
	<ul id="about-headers">
		
				
		<li class="current"><h2><?php the_title(); ?></h2></li>
		
		
			</ul>
</div>
<div id="about-images">
	<?php if(has_post_thumbnail()){ the_post_thumbnail('page-novel');} ?>
</div>
<div id="about-copy">
	<ul id="content-container">
				
		<li class="current" id="current-page" style="margin: 0px"><?php the_content(); ?>
</li>
		

		
			</ul>
</div>			</div>		
			
		</div>
	<?php endwhile; endif; wp_reset_postdata(); ?>
	
		<div class='footerspace'></div>
	</div>
<?php get_footer(); ?>