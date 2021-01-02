<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title('') ?></title>
	<?php get_header(); ?>
</head>
<body>
<main id="wrapper">

		<article class="posts">
			<?php get_template_part('includes/section','content'); ?>
		<article>

</main>
<footer>
	<?php get_footer();?>
</footer>