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
