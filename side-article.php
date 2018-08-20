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
		<ul class="tags">
			<li class="title">
				novel:
			</li>
			<li class="content">
				Youkoso Jitsuryoku Shijou Shugi no Kyoushitsu e			</li>
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
				<a href="http://www.facebook.com/sharer.php?u=http://mammothmedia.tv/five-years-of-mammoth-reel/&amp;t=Five%20Years%20of%20Mammoth%20Reel" target="blank">f</a>
			</li>
			<li class="share-link">
				<a href="http://twitter.com/share?text=Five%20Years%20of%20Mammoth%20Reel&amp;url=http://mammothmedia.tv/five-years-of-mammoth-reel/" target="_blank">t</a>
			</li>
		</ul>
	</div>