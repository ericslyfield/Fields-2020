
	<div class="category">
		<?php the_first_subcategory() ;?>	
	</div>

	<h2 class="title">
		<?php the_title(); ?>
	</h2>
	<br>
	<div class="thumbnail">
		<?php the_post_thumbnail('large'); ?>
	</div>

	<br>
	<div class="content">
		<?php the_content(); ?>
	</div>

<hr class="dot-break">