			<div class="archive-category">
				<?php first_category_link() ;?>
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
				<?php the_content(); ?>
			</div>
			<div class="archive-break">
			<hr class="dot-break">
			</div>