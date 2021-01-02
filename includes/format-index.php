<!DOCTYPE html>
<html>
<head>
	<title><?php wp_title('') ?></title>
	<?php get_header();?>
</head>
<body>

<div id="wrapper">

<?php 

$this_char = '';
$last_char = '';
$numeric = '#';


$args=array(
  'orderby' => 'title',
  'order' => 'ASC',
  'posts_per_page'=>-1,
  'post_type' => 'artwork'
);

$my_query = new WP_Query($args);



if ($my_query->have_posts()) :

		      echo '<br>';
			  echo '<h3>';
		      echo '' . $numeric .'';
		      echo '</h3>';
		      echo '<br>';

	while ($my_query->have_posts()) : $my_query->the_post();

	    $this_char = mb_strtoupper(mb_substr($post->post_title,0,1));

	    // Numerics Loop

	     if (is_numeric($this_char)) {

	    } elseif (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $this_char)) {

	    } elseif ($this_char != $last_char) {

		      $last_char = $this_char;

		      echo '<br>';
		      echo '<h3>';
		      echo '' . $last_char .'';
		      echo '</h3>';
		      echo '<br>';

	    } else ($last_char = $this_char);

	    // Item Called Into List

	    echo '<div class="glossary-title"><a href="';
	    echo 	the_permalink();
	    echo '">';
	    echo ''. get_the_title() .'';
	    echo '</a>';
	    echo '<br>';


	endwhile;
endif;

wp_reset_query(); ?>

			<!-- End Query -->


	</div>
<br>
</body>

<footer>
	<?php get_footer();?>
</footer>
</html>