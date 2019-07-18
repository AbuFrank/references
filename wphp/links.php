<?php
// How to create a relative path

$productID = get_the_ID();

if (!$productID) {
		// in this example the default path is http://home-url.com/#secondary-featured
		$productURL = home_url( $path = '#secondary-featured', $scheme = relative );
	} else {
		// otherwise return the post's url
		$productURL = get_permalink($productID);
	}
?>

<?php //create link ?>
<a href="<?php echo esc_url( $productURL ); ?>"></a>