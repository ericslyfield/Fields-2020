<?php get_header();?>

<br>
<main id="wrapper">

	<?php echo "category.php"; ?>

	<p> This is an audio category page. This is a paragraph.</p>
	<br>

		<article class="posts">
			<?php 
			// the query
			$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
			 
			<?php if ( $wpb_all_query->have_posts() ) : ?>


				<?php single_cat_title(); ?>
			 	
			<ul>
			 	<br>
			    <!-- the loop -->
			    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
			        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			    <?php endwhile; ?>
			    <!-- end of the loop -->
			 
			</ul>
			 
			    <?php wp_reset_postdata(); ?>
			 
			<?php else : ?>
			    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

		</article>

		<div class="pagination"> <span> <?php posts_nav_link(); ?> </span></div>
</main>

<footer>
<?php get_footer();?>
</footer>