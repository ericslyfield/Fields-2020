<?php get_header();?>

<main id="wrapper">

	<?php echo "front-page.php"; ?>
	<br>
	<?php if (have_posts()) : while( have_posts() ): the_post();  echo ' Post Format: ' . get_post_format(); ?>
	<article class="posts">
		<br>
		<?php get_template_part('includes/format', get_post_format());?>
	</article>

	<?php endwhile; else: endif; ?>

	<div class="pagination"> <?php posts_nav_link(); ?> </div>

</main>
</body>

<footer>
	<?php get_footer(); ?>
</footer>