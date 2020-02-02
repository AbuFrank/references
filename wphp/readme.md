## Enque child stylesheet but load it after chosen parent styles

```php
add_action( 'wp_enqueue_scripts', 'creative_styles' );
function creative_styles() {

    $parent_style = 'parent-style';
    $parent_style2 = 'parent-main';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style,  $parent_style2),
        wp_get_theme()->get('Version')
    );
}
```

## Custom Admin Scripts/Styles with Page Filter
[wp codex](https://developer.wordpress.org/reference/hooks/admin_enqueue_scripts)
```php
/**
 * only loads the custom stylesheet when the admin screen id is "page"
 */
 function cb_custom_admin_styles() {
	//retrieve screen object
    $screen = get_current_screen(); 
	
    //check if desired admin page
	if ( $screen -> id != 'page' ) {
		return;
	}
	wp_enqueue_style(
		'cb-custom-admin-styles',
		plugin_dir_url(__FILE__) . 'cb-custom-admin-styles.css',
		'1.0'
	);
}

add_action( 'admin_enqueue_scripts', 'cb_custom_admin_styles' );
```
### Note: to find the hook for a given admin page use:
```php
/**
 * prints screen object inside body tag
 */
function wpdocs_this_screen() {
    $screen = get_current_screen();
    print_r($screen);
}

add_action( 'current_screen', 'wpdocs_this_screen' );

```
