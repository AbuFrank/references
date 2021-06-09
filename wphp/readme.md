## preprint for debugging
```php
$arr = array(1,2,3,4,5);
echo '<pre>';
print_r($arr);
echo '</pre>';

print_r($arr); 
```

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
 * only loads the custom stylesheet when in the admin "post" page
 */
function cb_custom_admin_styles( $hook ) {
  // skip this function if not editing a post
  if ( 'post.php' != $hook ) {
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

## background overlay for BS collapse menu (JS)

```js
jQuery(document).ready(function($) {
    // backdrop behind shown menu
    const menuBackdrop = $( '#nav-drawer-background' );
    // collapsing element
    const navbarCollapse = $( '#headerNavbarCollapse' );
    // collapsing content inner wrapper
    const innerCollapseContainer = $( '#headerNavbarCollapse .inner-collapse-container' );
    // collapse toggle button
    const collapseToggle = $( '#menu-toggle-button' );
    const domBody = $('body');

    // shows the backdrop
    const handleToggleShow = () => {
        navbarCollapse.show(0, () => {
            domBody.addClass( 'show-menu' );   
            innerCollapseContainer.removeClass('slide-out').addClass('slide-in');
            menuBackdrop.fadeIn(350);
        });
    }
    // hides the backdrop
    const handleToggleHide = () => {
        // remove the show-menu class after the fade-out animation
        menuBackdrop.fadeOut(350, () =>  {
            domBody.removeClass( 'show-menu' );
            navbarCollapse.hide();
        } );
        innerCollapseContainer.removeClass('slide-in').addClass('slide-out');
    }
    // emulate nav toggle button click when background is clicked
    menuBackdrop.on( 'click', () => collapseToggle.trigger( 'click' ) );
    // hook into BS event triggers
    navbarCollapse.on( 'show.bs.collapse', handleToggleShow );
    navbarCollapse.on( 'hide.bs.collapse', handleToggleHide );
})
```
