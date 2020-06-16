<?php get_header();?>



<div id="wrapper">

<?php echo "page.php"; ?>
		<article class="posts">
				<br>
				<?php get_template_part('includes/format', get_post_format());?>
				
		</article>

</div>

<footer>
	<?php get_footer();?>
</footer>
