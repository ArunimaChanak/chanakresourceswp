<?php


add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 130, 130, true );

	if ( function_exists( 'add_theme_support' ) ) {
		add_theme_support( 'html5', array(
			'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
		add_theme_support( 'title-tag' );
		add_theme_support( 'automatic-feed-links' );
		
		add_theme_support('post-formats', array(
			'aside',
			'image',
			'video',
			'quote',
			'link',
			'gallery',
			'audio',
		));
		add_theme_support( 'gutenberg', array(
			
			// Theme supports wide images, galleries and videos.
			'wide-images' => true,
			
			// Make specific theme colors available in the editor.
			'colors' => array(
				'#ffffff',
				'#000000',
				'#cccccc',
			),
		
		) );
		/*
		 * Enable support for Post Formats.
		 *
		 * See: //codex.wordpress.org/Post_Formats
		 */
//add_theme_support( 'automatic-feed-links' );
//add_theme_support( 'title-tag' );
//add_theme_support( 'post-thumbnails' );
		
		
		if ( ! isset( $content_width ) ) {
			$content_width = 1200;
		}
		
		$defaults = array(
			'default-image'          => '',
			'default-preset'         => 'default', // 'default', 'fill', 'fit', 'repeat', 'custom'
			'default-position-x'     => 'left',    // 'left', 'center', 'right'
			'default-position-y'     => 'top',     // 'top', 'center', 'bottom'
			'default-size'           => 'auto',    // 'auto', 'contain', 'cover'
			'default-repeat'         => 'repeat',  // 'repeat-x', 'repeat-y', 'repeat', 'no-repeat'
			'default-attachment'     => 'scroll',  // 'scroll', 'fixed'
			'wp-head-callback'       => '_custom_background_cb',
			'admin-head-callback'    => '',
			'admin-preview-callback' => '',
		);
		add_theme_support( 'custom-background', $defaults );
//add_theme_support(
//	'gutenberg',
//	array( 'wide-images' => true )
//);
	}
	add_theme_support( 'post-thumbnails');
	
	if (true === get_theme_mod( 'crop_image', true)){

add_image_size( 'flat-box',698,500, false );
add_image_size( 'flat-box-full',2000, 550, true );
		add_image_size( 'grid-box',362 , 250, false );
		add_image_size( 'grid-box2',337 , 250, false );
		add_image_size( 'grid-box3',337 , 224, false );
		add_image_size( 'list-box',365 , 250, false );
		add_image_size( 'list-box-full',320 , 300, false );
		add_image_size( 'feature-thumb', 350, 300, false );
//For post
		add_image_size( 'slider-big-box',950 , 630, false );
add_image_size( 'post-default2',1140 , 450, false );
add_image_size( 'post-bg',1400 , 450, false );

//For page and Acrhives page

//add_image_size('post-default',1400, 300, false);
		add_image_size('monsury-small',390, '', false);
		add_image_size('monsury-bg','', 350, false);
		add_image_size('small-size','60', 60, false);
	}
	
	add_theme_support( 'custom-logo' );
	
	add_theme_support( 'custom-logo', array(
    'height'      => 100,
    'width'       => 400,
    'flex-height' => true,
    'flex-width'  => true,
    'header-text' => array( 'site-title', 'site-description' ),
) );
	