<section id="wrapper">

		<br>
		<h2 class="time">
			<div class="standard-time">
			<?php the_time('D j, Y'); ?>
			</div>
			<br>
			<div class="stylized-time">
			<?php the_time('H:i:s'); ?>
			</div>
			
		</h2>
		<br>
		<div class="content">
			<?php the_content(); ?>
		</div>
		<div class="archive-break">
		<hr class="dot-break">
		<br>
		</div>

</section>