<?php
	// check if the post has a Post Thumbnail assigned to it.
	if ( has_post_thumbnail() && !is_home()) { ?>
		<div data-type="parallax_fade" class="header_image">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php } elseif ( is_404()) { ?>
	<!-- <video autoplay="1" loop="1" src="<?php echo get_template_directory_uri() ?>/img//scene_13_17.mp4" ></video> -->
	<div data-type="parallax_fade" class="header_image">
			<img src="<?php echo get_template_directory_uri() ?>/img/ops.gif" alt="Kludge Web design immagine di copertina">
		</div>
	<?php } else { ?>
	<!-- <video autoplay="1" loop="1" src="<?php echo get_template_directory_uri() ?>/img//scene_13_17.mp4" ></video> -->
	<div data-type="parallax_fade" class="header_image">
			<!-- <img src="<?php echo get_template_directory_uri() ?>/img/cover.jpg" alt="Kludge Web design immagine di copertina"> -->
			<video id="video_background" preload="auto" autoplay="true" loop="loop" muted="muted" volume="0" style="background-color: #333;">
				<source src="<?php echo get_template_directory_uri() ?>/videos/coding.webm" type="video/webm">
				<source src="<?php echo get_template_directory_uri() ?>/videos/coding.mp4" type="video/mp4">
				<source src="<?php echo get_template_directory_uri() ?>/videos/coding.ogv" type="video/ogg ogv"> 
				<!-- <img src="videos/coding.png" alt="Landoebadon" style="width: 600px; margin: 0 auto;"> -->
			</video>
		</div>
	<?php } ?>