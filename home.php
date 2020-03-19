
<div class="home-category">
				<?php first_category_link() ;?>
			</div>
			<br>
			<div class="home-title">
			<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
			</div>
			<br>
			<div class="home-time">
				<?php the_time('His'); ?>
			</div>
			<div class="home-thumbnail">
				<?php the_post_thumbnail('large'); ?>
			</div>
			<div class="home-content">

				<?php get_template_part('includes/section','content'); ?>
			</div>
			<div class="home-break">
			<hr class="dot-break">
			</div>

<?php endwhile; else: endif; ?>