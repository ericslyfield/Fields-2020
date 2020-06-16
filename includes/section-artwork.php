<?php get_header();?>

<?php echo "section-artwork.php"; ?>

<?php get_template_part('includes/format', get_post_format());?>
	
	
	<?php the_post_thumbnail('large'); ?>
	<br>
	<?php the_content();?>


	<div class="post-break"></div>

<?php endwhile; else: endif; ?>