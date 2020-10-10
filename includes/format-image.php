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

	<div class="content">
			<?php if(the_gallery_images()):
				$attachments = the_gallery_image(15); 
				var_dump($attachments);
				?>
	</div>
	<br>
	<hr class="dot-break">
</section>