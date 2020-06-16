<?php get_header();?>

<br>
<main id="wrapper">

	<?php echo "archive.php"; ?>

		<article class="posts">
				<br>
				<?php if (have_posts()) : while( have_posts() ): the_post();  echo 'Post Format: ' .get_post_format(); ?>

				<?php get_template_part('includes/format', get_post_format());?>
				<br>
				<?php endwhile; endif; ?>
				<br>

		</article>

		<div class="pagination"> <span> <?php posts_nav_link(); ?> </span></div>
</main>

<footer>
<?php get_footer();?>
</footer>