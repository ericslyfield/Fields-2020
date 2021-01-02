<?php get_header();?>

<main id="wrapper">

		<article class="posts">


<?php if (have_posts()) : 
	while( have_posts()): the_post(); ?>

			<?php get_template_part('includes/format', get_post_format());?>
			
		</article>
		<br>
		
		<br>
</main>
<?php endwhile; else: endif; ?>

<footer>
	<div class="pagination"> <?php posts_nav_link(); ?> </div>
	<?php get_footer(); ?>
</footer>