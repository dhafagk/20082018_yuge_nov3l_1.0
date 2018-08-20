<?php get_header(); ?>
<div id="wrap">
		<div id="work">
		

	<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
		<?php echo get_post_meta($post->ID, "novel", true); ?>
			<?php $url_gambar = get_the_post_thumbnail_url($post->ID, 'full') ?>
<div class="video" <?php if(has_post_thumbnail()){ ?> data-original="<?php echo $url_gambar ?>" style="background-position:center top;background-repeat:no-repeat;background-size:cover;" <?php }else{ ?> data-original="<?php echo get_template_directory_uri(); ?>/assets/img/noimage.png" style="background-size:100% 100%;background-repeat:no-repeat;" <?php } ?> >
	<div class="work-info">
		<h2><?php the_title(); ?></h2>
				<a href="<?php the_permalink(); ?>">view Novel</a>
	</div>
</div>

	<?php endwhile; endif; wp_reset_query(); ?>


<div class="bottom-room"></div>		</div>
	</div>
<?php get_footer(); ?>