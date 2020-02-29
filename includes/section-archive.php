<?php if (have_posts()) : while( have_posts() ): the_post(); ?>

			<div class="archive-category">
				<?php the_category('');?>
			</div>
			<br>
			<div class="archive-title">
			<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
			</div>
			<br>
			<div class="archive-time">
				<?php the_time('His'); ?>
			</div>
			<div class="archive-thumbnail">
				<?php the_post_thumbnail('large'); ?>
			</div>
			<div class="archive-content">
				<?php the_content();?>
			</div>
			<div class="archive-break">
			<hr class="dot-break">
			</div>

	<div class="page-navigation"><p><?php posts_nav_link(); ?></p></div>

<?php endwhile; else: endif; ?>