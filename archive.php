<?php get_header();  ?>
<br>
<div class="container">

		<article class="post">
				
				<?php if (have_posts()) : while( have_posts() ): the_post();  echo 'The Format: ' .get_post_format(); ?>

				<?php get_template_part('includes/format', get_post_format()); ?>

			<?php endwhile; endif; ?>
				
		</article>
</div>

<?php get_footer();?>