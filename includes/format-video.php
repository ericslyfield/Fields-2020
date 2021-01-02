<section id="wrapper">

<div class="category">
	<ul>
		<li>
		<?php the_first_subcategory() ;?>
		</li>
	</ul>
</div>
<br>
<h2 class="title">
<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
</h2>
<br>
<div class="content">
	<div class="frame">

		<!--- This function cannot be styled properly. Use the custom function instead. -->
		<!-- <?php the_content(); ?> -->

		<?php
					$content = do_shortcode( apply_filters('the_content', $post->post_content));
					$embed = get_media_embedded_in_content($content, array('video', 'iframe'));
					
					echo $embed[0]; ?>
				
	</div>
</div>
</section>
		<br>
			<hr class="dot-break">
		<br>