<?php

// Define the version as a constant so we can easily replace it throughout the theme
define( 'LESS_VERSION', 1.1 );

/*-----------------------------------------------------------------------------------*/
/* Add Rss to Head
/*-----------------------------------------------------------------------------------*/
add_theme_support( 'automatic-feed-links' );


/*-----------------------------------------------------------------------------------*/
/* register main menu
/*-----------------------------------------------------------------------------------*/
register_nav_menus( 
	array(
		'primary'	=>	'Primary Menu',
        'linguaggi'   =>  'Menu Linguaggi',
	)
);

/*-----------------------------------------------------------------------------------*/
/* Enque Styles and Scripts
/*-----------------------------------------------------------------------------------*/

function less_scripts()  { 

	// theme styles
	wp_enqueue_style( 'less-style', get_template_directory_uri() . '/style.css', '10000', 'all' );
			
	// add fitvid
	wp_enqueue_script( 'less-fitvid', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), LESS_VERSION, true );

	// includo jquery 
if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
   wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js", false, null);
   wp_enqueue_script('jquery');
}
	
	// add theme scripts
	wp_enqueue_script( 'less', get_template_directory_uri() . '/js/theme.min.js', array(), LESS_VERSION, true );
  
}
add_action( 'wp_enqueue_scripts', 'less_scripts' );

// Abilito la featured image
add_theme_support( 'post-thumbnails' ); 

// Aggiungo il post type per il manuale

// verifichiamo che wordpress sia stato inizializzato
add_action('init', function() {
    // creiamo, ad esempio, un post type per gli snippet
    register_post_type('manuale', array(
        'public' => true, // post type pubblico
        'label' => 'Manuale', // nome dell'etichetta
        'labels' => array( // configuriamo qualche etichetta
            'add_new_item' => 'Aggiungi Comando',
            'edit_item' => 'Modifica Comando',
            'new_item' => ' Aggiungi Comando'
            ),
        'supports' => array( 'title', 'editor'),
        'taxonomies' => array( // tag, categorie
            )
    ));

     register_taxonomy('linguaggio', 'manuale', array( // ($nome_taxonomy, $post_type, $options)
        'label' => 'Linguaggio', // nome dell'etichetta
        'hierarchical' => true // tassonomia gerarchica - come le categorie
    ));
});

function age($year, $month, $day) {
    $dob_time_stamp = mktime(0, 0, 0, $month, $day, $year);
    $seconds_alive = time() - $dob_time_stamp;
    $age = floor($seconds_alive / 31556926);
    return $age;
}
