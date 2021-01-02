<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title('') ?></title>
	<?php get_header(); ?>
</head>
<body>

<div id="wrapper">

		<article class="posts">
			<br>

			<?php get_template_part('includes/section', 'content');?>
				
		</article>

</div>
<body>

<footer>
	<?php get_footer();?>
</footer>