
<head>

</head>

<section>

<div class="archive-title">
<a href="<?php the_permalink();?>"><?php the_title(); ?></a>
</div>

<!-- A Container for the WaveSurfer Waveform (via AlexPlayer) -->
<div id="waveform"><?php the_content(); ?> </div>

</section>

<script src="https://unpkg.com/wavesurfer.js"></script>

<br>