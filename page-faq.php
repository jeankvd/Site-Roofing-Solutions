<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>

<div class="jumbotron jumbotron-fluid" id="faq-banner">
  <h1><?php the_title(); ?></h1>
</div>

<!-- Content -->


<div class="container" >
  <div class="row">
    <div class="col-lg-9" id="faq-list">
      <div id="info">
        <?php

        $args = array('post_type' => 'question');

// The Query
$the_query = new WP_Query( $args );

// The Loop
if ( $the_query->have_posts() ) {
  $i = 0;
	while ( $the_query->have_posts() ) {
		$the_query->the_post();
    echo '<div class="question" data-toggle="collapse" data-target="#question' . $i .'" aria-expanded="false" aria-controls="question' . $i .'">';
		echo '<a>' . get_the_title() . '</a>';
    echo '<div class="collapse" id="question' . $i .'">' . get_the_content() . '</div>';
    echo '</div>';
    $i++;
	}
  echo '</div>';
echo '</div>';

	/* Restore original Post Data */
	wp_reset_postdata();
} ?>

<?php get_sidebar( 'faq' ); ?>

  </div>
</div>
<?php endwhile; ?>
<?php endif; ?>

<?php get_footer( );?>
