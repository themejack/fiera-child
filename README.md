# Fiera Child

# Customization
---------------
### Load languages from child theme
Add to `functions.php`:

```php
<?php
/**
 * Loads the child theme's translated strings.
 */
function fiera_child_setup() {
	load_child_theme_textdomain( 'fiera_child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'fiera_child_setup' );
```

### Disable parent theme style and scripts
If you want to stop loading css or javascript files put `wp_deregister_style( $handle )` or `wp_deregister_style( $handle )` into `fiera_child_scripts` function which is inside `functions.php` file.

**Example:**

```php
<?php
/**
 * Enqueue scripts and styles.
 */
function fiera_child_scripts() {
	wp_deregister_style( 'fiera-style' );
	wp_enqueue_style( 'fiera-child-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'fiera_child_scripts' );
```
