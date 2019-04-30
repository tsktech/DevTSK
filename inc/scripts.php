<?php
/**
 * Enqueue scripts and styles.
 */
function devtsk_scripts() {
	// wp_enqueue_style('devtsk-bs-css', get_template_directory_uri() . '/dist/css/bootstrap.min.css');
	// wp_enqueue_style( 'devtsk-fontawesome', get_template_directory_uri () .  '/fonts/font-awesome/css/all.min.css');
	// wp_enqueue_style( 'devtsk-style', get_stylesheet_uri() );
	wp_enqueue_style( 'devtsk-style-min', get_template_directory_uri () . '/sass/style.min.css' );
	wp_register_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.15.0/umd/popper.min.js', false, '', true);
	wp_enqueue_script('popper');

	/*wp_enqueue_script( 'devtsk-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );*/

	// wp_enqueue_script('devtsk-tether', get_template_directory_uri () . '/src/js/tether.min.js' , array(), '20190409', true);
	// wp_enqueue_script('devtsk-bootstrap', get_template_directory_uri () . '/src/js/bootstrap.min.js' , array('jquery'), '20190409', true);
	// wp_enqueue_script('devtsk-bootstrap-hover', get_template_directory_uri () . '/src/js/bootstrap-hover.js' , array('jquery'), '20190409', true);
	// wp_enqueue_script('devtsk-nav-scroll', get_template_directory_uri () . '/src/js/nav-scroll.js' , array('jquery'), '20190409', true);
	// wp_enqueue_script( 'devtsk-skip-link-focus-fix', get_template_directory_uri() . '/src/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_script( 'devtsk-js', get_template_directory_uri() . '/dist/js/devtsk.js', array('jquery'), '20190429' , true);



	/*wp_enqueue_style( 'devtsk-style', get_stylesheet_uri() );

	wp_enqueue_script( 'devtsk-navigation', get_template_directory_uri() . '/src/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'devtsk-skip-link-focus-fix', get_template_directory_uri() . '/src/js/skip-link-focus-fix.js', array(), '20151215', true );*/

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'devtsk_scripts' );

