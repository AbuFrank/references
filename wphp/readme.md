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
```php
/**
 * @param int $hook Hook suffix for the current admin page.
 */
function selective_enqueue_scripts( $hook ) {
    if ( 'edit.php' != $hook ) {
        return;
    }
    wp_enqueue_script( 'my_custom_script', plugin_dir_url( __FILE__ ) . 'myscript.js', array(), '1.0' );
}
add_action( 'admin_enqueue_scripts', 'wpdocs_selectively_enqueue_admin_script' );
```
### Note: to find the hook for a given admin page use:
```php
$screen = get_current_screen(); 
print_r($screen);
```
