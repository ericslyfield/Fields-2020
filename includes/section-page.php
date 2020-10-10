<?php echo 'single-page.php' ?>

<?php if (have_posts()) : while( have_posts() ): the_post(); ?>


			<div class="page-category">
				<?php the_first_subcategory();?>
			</div>
			<br>
			<div class="page-title">
			<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
			</div>
			<br>
			<div class="page-thumbnail">
				<?php the_post_thumbnail('large'); ?>
			</div>
			<div class="page-content">
				<?php 

		$args = array(
			'post_type' => 'post',
			'posts_per_page' => -1,
			'cat' => 5,
		);

		$query = new WP_Query($args);

		if ($query->have_posts()) : 
		while($query->have_posts()): the_post();

		 ?>
			<?php endwhile; endif; ?>
			<?php wp_reset_postdata(); ?>
				<?php the_content();?>
			</div>
			<div class="page-break">
			<hr class="dot-break">
			</div>

	<div class="page-navigation"><p><?php posts_nav_link(); ?></p></div>

<?php endwhile; else: endif; ?>