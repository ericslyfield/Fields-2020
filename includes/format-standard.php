<section id="wrapper">

	<div class="category">
		<a href="<?php the_permalink();?>"><?php the_first_subcategory(); ?></a>
	</div>

	<h2 class="title">
		<br>
		<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
		<br>
	</h2>

	<br>
	<div class="thumbnail">
		<?php the_post_thumbnail('large'); ?>
	</div>
	<br>
	<div class="content">
		<?php the_content(); ?>
	</div>
	<br>
	<hr class="dot-break">
</section>