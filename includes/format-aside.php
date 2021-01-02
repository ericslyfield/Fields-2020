<section id="wrapper">

		<br>
			<h2 class="standard-time time">
				<?php the_time('D j, Y'); ?>
			</h2>	
			<h3 class="stylized-time time">
				<br>
				<?php the_time('H:i:s'); ?>
			</h3>
		
		<br>
		<div class="content">
			<?php the_content(); ?>
		</div>
		<br>
			<hr class="dot-break">
		<br>
		</div>

</section>