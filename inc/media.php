<?php
// This file contains php code related to images and video

// Responsive Video Embed Code

	add_filter( 'embed_oembed_html', 'devwp_wrap_embed_with_div', 10, 3 );

	function devwp_wrap_embed_with_div( $html ) {
		// Native Bootstrap responsive class is:
		// embed-responsive embed-responsive-16by9
		return '<div class="responsive-container">' . $html . '</div>';
		// return '<div class="embed-responsive embed-responsive-16by9">' . $html . '</div>';
	}
