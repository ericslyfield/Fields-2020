<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<head></head>

<body>

<?php if (have_posts()) : while( have_posts() ): the_post(); ?>

	<div class="section-category">
	<?php the_category('');?>	
	</div>
	<div class="section-category">
	<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
	</div>
	<div class="section-category">
	<?php the_post_thumbnail('large'); ?>
	</div>
		<br>
		<div ></div>
			<?php the_content();?>
			<hr class="dot-break">
<?php endwhile; else: endif; ?>