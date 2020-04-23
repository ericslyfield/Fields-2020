
<head>

</head>

<section>

<div class="audio-category">
	<?php first_category_link() ;?>
</div>
<br>
<div class="audio-title">
<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
</div>
<br>
<!-- A Container for the WaveSurfer Waveform (via AlexPlayer) -->
<div class="audio-content">
	<?php
	$content = do_shortcode( apply_filters('the_content', $post->post_content));
	$embed = get_media_embedded_in_content($content, array('audio', 'iframe'));
	
	echo $embed[0];
	?>


	<!-- <?php the_content(); ?> -->
		
	</div>

</section>

<script src="https://unpkg.com/wavesurfer.js"></script>

<br>