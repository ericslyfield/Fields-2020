<section>

	<div class="category">

		<?php the_first_subcategory() ;?></a>
	</div>
	<br>
	<h2 class="title">
	<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
	</h2>
	<br>
	<!-- A Container for the WaveSurfer Waveform (via AlexPlayer) -->
	<div class="audio-content">

		<?php
		$content = do_shortcode( apply_filters('the_content', $post->post_content));
		$embed = get_media_embedded_in_content($content, array('audio', 'iframe'));
		
		echo str_replace( '?visual=true', '?visual=false', $embed[0] );
		?>


		<!-- <?php the_content(); ?> -->
			
		</div>

</section>

<br>