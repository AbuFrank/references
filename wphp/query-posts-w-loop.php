<!-- setting up the loop, go here for more info -->

<?php

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
	echo '<ul>';
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
		echo '<li>' . get_the_title() . '</li>';
	}
	echo '</ul>';
} else {
	// no posts found
}
 // Restore original Post Data 
wp_reset_postdata();

?>
<?php
// Setting up the template, called page-portfolio.php
/*
	TemplateName: Portfolio Page
*/
?>
<?php get_header(); ?>

<section class="row">
	<div class="small-12 columns text-center">
		<div class="leader">
		
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title(); ?></h1>
<?php the_content(); ?>			

<?php endwhile; endif; ?>

		</div>
	</div>
</section>

<?php

$args = array(
		'post_type' => 'portfolio'
);
$query = new WP_Query( $args );

?>

<section class="row no-max pad">
	
	<?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>
	
	<div class="small-6 medium-4 large-3 columns grid-item">
		<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('large'); ?>		
		</a>
	</div>

	<?php endwhile; endif; wp_reset_postdata(); ?>
</section>

<?php get_footer(); ?>
<!-- Single pages, e.g. single-portfolio.php -->
<?php get_header(); ?>

<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

	<p><?php the_field('description'); ?></p>
	<?php the_field('images'); ?>
	<hr>
	<p>
		<?php previous_post_link(); ?> --
		<a href="<?php bloginfo('url'); ?>/portfolio">Back to Portfolio</a> --
		<?php next_post_link(); ?>
	</p>

<?php endwhile; endif; ?>
