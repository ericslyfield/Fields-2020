<?php get_header();?>

<?php echo 'archive-artwork.php' ?>

	<div class="wrapper">

		<article class="posts">	
			<?php get_template_part('includes/format', get_post_format());?>
		</article>
		
	</div>

<?php get_footer();?>