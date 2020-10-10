<section id="wrapper">

	<div class="category">
		<a href="<?php the_permalink();?>"><?php the_first_subcategory(); ?></a>
	</div>
	<br>
	<h2 class="title">
		<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
	</h2>
	<br>


		<div class="thumbnail">
			<?php the_post_thumbnail('large'); ?>
		</div>
		<br>
		<div id="gallery-wrapper">
			<?php the_content(); ?>
		</div>
	</div>
	<br>
	<hr class="dot-break">
</section>
