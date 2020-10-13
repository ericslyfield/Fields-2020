<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title('') ?></title>
	<?php get_header();?>
</head>
<body>

	<div id="wrapper">

	<?php echo "archive-artwork"; ?>
	<br>

		 			<?php 
			// the query
			$wpb_all_query = new WP_Query(array(
				'post_type'=>'post', 
				'post_status'=>'publish', 
				'posts_per_page'=> -1,
				'category' => 0,
				 	array(
						'taxonomy' => 'mediums',
						'field' => 'slug',
						'terms' => array('mediums', 'year'),

				),
			));
			 ?>
			 
			<?php if ( $wpb_all_query->have_posts() ) : ?>

			<ul>
			 <br>
			    <!-- the loop -->
			    <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
			        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
			       			    <!-- end of the loop -->
			 
			</ul>
			
			 <?php wp_reset_postdata(); ?>
			 
			<?php else: ?>
			    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>

	</div>

</body>

<footer>
	<?php get_footer();?>
</footer>
</html>