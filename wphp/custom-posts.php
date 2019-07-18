
<?php
// Setting up custom post type in functions.php
// Custom post types function for testimonials
function create_custom_post_types(){
// Create testimonials post type
 register_post_type('testimonials',
   array(
   'labels' => array(
     'name' => __('Testimonials'),
     'singular_name' => __('Testimonial'),
     ),
   'public' => true,
   'has_archive' => true,
   'show_in_nav_menus' => true,
   'rewrite' => array (
     'slug' => 'testimonials'
     ),
   )
 );
}

// Hook this custom post type function into the theme
add_action('init', 'create_custom_post_types');


?>