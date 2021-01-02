<?php get_header();?>

<main id="wrapper">

	<article class="posts">
		<br>
		<?php get_template_part('includes/format', get_post_format());?>
	</article>

	<div class="pagination"> <?php posts_nav_link(); ?> </div>

</main>
</body>

<footer>
	<?php get_footer(); ?>
</footer>