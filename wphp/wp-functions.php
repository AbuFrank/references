<?
// srcset
$srcset = wp_get_attachment_image_srcset($imgID);

// image url of any image size
$imgArr = wp_get_attachment_image_src($featuredImg, 'medium_large');
$imgUrl = $imgArr[0];
?>