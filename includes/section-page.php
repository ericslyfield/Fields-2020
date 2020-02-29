<?php if (have_posts()) : while( have_posts() ): the_post(); ?>

			<div class="page-category">
				<?php the_category('');?>
			</div>
			<br>
			<div class="page-title">
			<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
			</div>
			<br>
			<div class="page-thumbnail">
				<?php the_post_thumbnail('large'); ?>
			</div>
			<div class="page-content">
				<?php the_content();?>
			</div>
			<div class="page-break">
			<hr class="dot-break">
			</div>

	<div class="page-navigation"><p><?php posts_nav_link(); ?></p></div>

<?php endwhile; else: endif; ?>