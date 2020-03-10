<?php if (have_posts()) : while( have_posts() ): the_post(); ?>
	
	<?php the_post_thumbnail('large'); ?>
	<br>
	<?php the_content();?>


	<div class="post-break"></div>

<?php endwhile; else: endif; ?>