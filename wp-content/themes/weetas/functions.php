<?php 

// require('class-wp-bootstrap-navwalker.php');

// Enqueue styles
function my_theme_enqueue_styles() {
    // Bootstrap CSS
    wp_enqueue_style("bootstrap-css", get_template_directory_uri() . '/css/bootstrap.min.css');
    
    // Google Fonts
    wp_enqueue_style("google-fonts", 'https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', false);
    
    // Main custom styles
    wp_enqueue_style("main", get_template_directory_uri() . '/css/main.css');
}

// Enqueue scripts
function my_theme_enqueue_scripts() {
    // Deregister default jQuery and enqueue the custom one
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', includes_url('/js/jquery/jquery.js'), false, '', true);
    
    // Bootstrap JS (ensure Popper.js is loaded first for dropdowns, tooltips, etc.)
    wp_enqueue_script("bootstrap-js", get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
    
    // Custom main JS
    wp_enqueue_script("main-js", get_template_directory_uri() . '/js/main.js', array(), false, true);
    
    // HTML5 Shiv for IE support (conditional loading)
    wp_enqueue_script("html5shiv", get_template_directory_uri() . '/js/html5shiv.js');
    wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');
    
    // Respond.js for IE support (conditional loading)
    wp_enqueue_script("respond", get_template_directory_uri() . '/js/respond.min.js');
    wp_script_add_data('respond', 'conditional', 'lt IE 9');
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');

// Register navigation menus
function my_theme_register_nav_menu() {
    register_nav_menus(array(
        'bootstrap_menu' => 'Navigation Bar',
        'footer_menu' => 'Footer Menu',
    ));
}

add_action('init', 'my_theme_register_nav_menu');

// Display Bootstrap navigation menu
// function my_theme_bootstrap_menu() {
//     wp_nav_menu(array(
//         'theme_location' => 'bootstrap_menu',
//         'menu_class' => 'navbar navbar-right',
//         'container' => false,
//         'walker' => new WP_Bootstrap_Navwalker(),
//         'depth' => 2,
//     ));
// }

// add_action('init', 'my_theme_bootstrap_menu');

// Set excerpt length
function my_theme_excerpt_length($length) {
    return 15; // You can change this value as needed
}

add_filter('excerpt_length', 'my_theme_excerpt_length');

// Customize excerpt more text
function my_theme_excerpt_more($more) {
    return '......'; // Customize "read more" text
}

add_filter('excerpt_more', 'my_theme_excerpt_more');


function main_sidebar () {
    register_sidebar(array(
        'name' => 'Main Sidebar',
        'id' => 'main-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'main_sidebar');



function wpbeginner_numeric_posts_nav() {
  
    if( is_singular() )
        return;
  
    global $wp_query;
  
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
  
    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
  
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
  
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
  
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
  
    echo '<div class="navigation"><ul>' . "\n";
  
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
  
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
  
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
  
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
  
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
  
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
  
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
  
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
  
    echo '</ul></div>' . "\n";
  
}