<head><link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"></head>

<section id="wrapper">

		<div class="category">
			<?php the_first_subcategory() ;?>
		</div>
		<br>
		<blockquote>
			<div class="quote-wrap">
				<div class="quote-content">
					<?php echo the_content(); ?>
				</div>
				
			</div>
		</blockquote>
		<div class="quote-break">
		<hr class="dot-break">
		<br>
		</div>

</section>