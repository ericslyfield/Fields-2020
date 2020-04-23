<?php get_header();  ?>
<br>
<div class="container">

		<article class="post">
				
				<?php if (have_posts()) : while( have_posts() ): the_post();  echo 'The post format: ' .get_post_format(); ?>

				<?php if(get_template_part('includes/format', get_post_format()));?>
				<br>
				<?php endwhile; endif; ?>
				<hr class="dot-break">
			
				
		</article>
</div>

<?php get_footer();?>