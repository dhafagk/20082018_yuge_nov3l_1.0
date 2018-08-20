<?php
$sticky = get_option( 'sticky_posts' );
$args = array(
	'posts_per_page' => 1,
	'post__in'  => $sticky,
	'ignore_sticky_posts' => 1
);
$query = new WP_Query( $args );
if ( isset($sticky[0]) ) {
	
}
?>

<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
<?php global $post; $meta = get_post_meta( get_the_ID() ); ?>

<?php if(has_post_thumbnail() ){ ?>
<article class="single-entry article" id="<?php the_id(); ?>">
	<div class="wrap-adjust">
				<?php $url_ss = get_the_post_thumbnail_url(get_the_id(),'full') ?>
		<div class="segment img" <?php echo 'style="background:url(' . $url_ss . ') center top no-repeat;background-size:cover;"' ?>>
			<div></div>
		</div>
		<div class="segment post">
			<p class="post-date photo-post details">
				<span><?php the_time('F j, Y'); ?></span>
			</p>
			<h2><a href="<?php the_permalink(); ?>" style="color: inherit;"><?php the_title(); ?></a></h2>
			<div class="thepost">
				<p><?php the_excerpt(); ?></p>
			</div>
			<p class='read-more'>
				<a href="<?php the_permalink(); ?>" style="color:#3b3b3b;">read more</a>
			</p>
		</div>
	</div>

	<div class="segment info details">

<?php $penerjemah = get_the_term_list(get_the_id(),'penerjemah'); $editor = get_the_term_list(get_the_id(),'editor'); ?>
<?php if( !empty($penerjemah) && !empty($editor) ) { ?>

		<ul class="poster">
			<li class="title">
				penerjemah:
			</li>
			<li class="content">
				<?php echo strip_tags($penerjemah); ?>			</li>
		</ul>
		<ul class="tags">
			<li class="title">
				editor:
			</li>
			<li class="content">
				<?php echo strip_tags($editor); ?>			</li>
		</ul>
		<ul class="judul-novel">
			<li class="title">
				novel:
			</li>
			<li class="content">
				<?php foreach( get_the_category() as $catwoman){$info = new WP_Query("s=$catwoman->cat_name&post_type=novel"); if($info->have_posts()) : while($info->have_posts()) : $info->the_post(); echo '<a href="novel/'.$catwoman->slug.'">'.$catwoman->cat_name.'</a>'; endwhile; wp_reset_query(); endif; } ?>			</li>
		</ul>
		<?php }else{ ?>

		<ul class="poster">
			<li class="title">
				posted by:
			</li>
			<li class="content">
				<?php the_author(); ?>			</li>
		</ul>
		<ul class="tags">
			<li class="title">
				categories:
			</li>
			<li class="content">
				<?php the_category(','); ?>			</li>
		</ul>

		<?php } ?>
		<ul class="share">
			<li>
				share:
			</li>
			<li class="share-link">
				<a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="blank">f</a>
			</li>
			<li class="share-link">
				<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">t</a>
			</li>
		</ul>
	</div>
	</article>

	<?php }else{ ?>
	<article class="single-entry article" id="<?php the_id(); ?>">
	<div class="wrap-adjust no-image">				

		<div class="segment post no-image">
			<p class="post-date photo-post details no-image">
				<span><?php the_time('F j, Y'); ?></span>
			</p>
			<h2><a href="<?php the_permalink(); ?>" style="color:#3b3b3b;"><?php the_title(); ?></a></h2>
			<div class="thepost no-image">
				<p><?php the_excerpt(); ?></p>
			</div>
			<p class='read-more'>
				<a href="<?php the_permalink(); ?>" style="color:#3b3b3b;">read more</a>
			</p>
		</div>
	</div>
	<div class="segment info details no-image">
		<?php $penerjemah = get_the_term_list(get_the_id(),'penerjemah'); $editor = get_the_term_list(get_the_id(),'editor'); ?>
<?php if( !empty($penerjemah) && !empty($editor) ) { ?>

		<ul class="poster">
			<li class="title">
				penerjemah:
			</li>
			<li class="content">
				<?php echo strip_tags($penerjemah); ?>			</li>
		</ul>
		<ul class="tags">
			<li class="title">
				editor:
			</li>
			<li class="content">
				<?php echo strip_tags($editor); ?>			</li>
		</ul>
		<ul class="judul-novel">
			<li class="title">
				novel:
			</li>
			<li class="content-novel">
				<?php foreach( get_the_category() as $catwoman){$info = new WP_Query("s=$catwoman->cat_name&post_type=novel"); if($info->have_posts()) : while($info->have_posts()) : $info->the_post(); echo '<a href="novel/'.$catwoman->slug.'">'.$catwoman->cat_name.'</a>'; endwhile; wp_reset_query(); endif; } ?>			</li>
		</ul>
		<?php }else{ ?>

		<ul class="poster">
			<li class="title">
				posted by:
			</li>
			<li class="content">
				<?php the_author(); ?>			</li>
		</ul>
		<ul class="tags">
			<li class="title">
				categories:
			</li>
			<li class="content">
				<?php the_category(','); ?>			</li>
		</ul>

		<?php } ?>
		<ul class="share">
			<li>
				share:
			</li>
			<li class="share-link">
				<a href="http://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="blank">f</a>
			</li>
			<li class="share-link">
				<a href="http://twitter.com/share?url=<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank">t</a>
			</li>
		</ul>
	</div>
	</article>

		<?php } ?>
<?php endwhile; endif; wp_reset_postdata();  ?>	