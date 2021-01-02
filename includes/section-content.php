<body>

<?php if (have_posts()) : 
	while( have_posts()): the_post(); ?>

	<div class="category">
	<?php the_first_subcategory() ;?>	
	</div>
	<h2>
	<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
	</h2>
	<div class="section-thumbnail">
	<?php the_post_thumbnail('large'); ?>
	</div>
		<br>
		<div class="content">
			<?php the_content(); ?>
		</div>
</body>
		<hr class="dot-break">
<?php endwhile; else: endif; ?>