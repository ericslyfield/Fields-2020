			<div class="category">
				<?php the_first_subcategory();?>
			</div>
			<br>
			<div class="title">
			<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
			</div>
			<br>
			<div class="thumbnail">
				<?php the_post_thumbnail('large'); ?>
			</div>
			<div class="content">
				<?php the_content();?>
			</div>
			<div class="page-break">
			<hr class="dot-break">
			</div>

	<div class="page-navigation"><p><?php posts_nav_link(); ?></p></div>

<?php endwhile; else: endif; ?>