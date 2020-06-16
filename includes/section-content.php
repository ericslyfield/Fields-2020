
<?php get_header();  ?>
<body>

	<?php echo 'section-content.php' ?>

<?php if (have_posts()) : while( have_posts() ): the_post(); echo 'The Format: ' .get_post_format(); ?>

	<div class="category">
	<?php the_first_subcategory() ;?>	
	</div>
	<h2 class="title">
	<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
	</h2>
	<div class="section-thumbnail">
	<?php the_post_thumbnail('large'); ?>
	</div>
		<br>
		<div >
		<?php the_content(); ?>
</body>
		<hr class="dot-break">
<?php endwhile; else: endif; ?>