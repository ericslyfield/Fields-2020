<section>
						
	<?php 

	if ( has_post_format( 'aside' )) {
	   // code to display the aside format post here
	   	get_template_part('includes/format','aside');
	}  else if (has_post_format('quote')) {
	   // stuff to display the quote format post here
		get_template_part('includes/format','quote');
	}  else if (has_post_format('link')) {
	   // stuff to display the link format post here
		get_template_part('includes/format','link');
	}  else if (has_post_format('image')) {
	   // stuff to display the image format post here
		get_template_part('includes/format','image');
	}  else if (has_post_format('video')) {
	   // stuff to display the video format post here
		get_template_part('includes/format','video');
	}  else if (has_post_format('gallery')) {
	   // stuff to display the gallery format post here
		get_template_part('includes/format','gallery');
	}  else if (has_post_format('audio')) {
	   // stuff to display the audio format post here
		get_template_part('includes/format','audio');
	}  else if (has_post_format('standard')) {
	   // code to display the normal format post here
		get_template_part('includes/format','standard');
	}	else {
		get_template_part('includes/format','standard');
};
?>

</section>