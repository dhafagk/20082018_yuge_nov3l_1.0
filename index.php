<?php get_header(); ?>
<div id="wrap">
		<div class="container" id="blog">
<?php include (TEMPLATEPATH . '/article.php'); ?>
<!-- pagination has path -->
<p class="pagination">
  <a class="pagination__next" href="page/2">Next page</a>
</p>
		</div>
</div>
<?php get_footer(); ?>