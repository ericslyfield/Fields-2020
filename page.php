<?php get_header();?>





<div id="wrapper">

<?php echo "page.php"; ?>
		<article class="posts">
				<br>
				<?php get_template_part('includes/format', get_post_format());?>



		 			<?php 
			// the query
			$wpb_all_query = new WP_Query( array(
				'post_type'=>'Artwork', 
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

			 <?php

				echo '</h3>';
						echo $glossary_letter;
						echo '</h3>';

							echo '<p>';
							echo '<a href="the_permalink()">';
							echo the_post();
							echo $glossary_title[0];	
							echo '</a>'; 
							echo $glossary_description[0];
							echo '</p>';

						wp_reset_postdata();

					?>
			 
			<?php if ( $wpb_all_query->have_posts() ) : ?>

			<ul>
				<h3>
				<!-- header loop -->
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

</div>

<footer>
	<?php get_footer();?>
</footer>
