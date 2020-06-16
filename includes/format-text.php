	<h2 class="title">
	<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
	</h2>

			<h2 class="time">
			<?php the_time('D j, Y'); ?>
			<br>
			<?php the_time('H:i:s'); ?>
		</h2>
		<br>
		<div class="content">
			<?php the_content(); ?>
		</div>
		<div class="archive-break">
		<hr class="dot-break">
		<br>
		</div>