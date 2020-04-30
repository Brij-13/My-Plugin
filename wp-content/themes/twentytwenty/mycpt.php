<?php /* Template Name: mycpt */ ?>

<?php 
$args = array( 'post_type' => 'movies', 'posts_per_page' => 10 );
$the_query = new WP_Query( $args ); 
?>
<?php if ( $the_query->have_posts() ) : ?>
<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
<h2><?php the_title(); ?><?PHP get_permalink(); ?></h2>
<div class="entry-content">
<?php the_content(); ?> 
</div>

<?php endwhile; ?>
<?php endif; ?>