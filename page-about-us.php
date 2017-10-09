<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
<div class="jumbotron jumbotron-fluid" id="about-banner">
  <h1><?php the_title() ?></h1>
</div>
<div class="container">
  <p class="lead"><?php the_field('lead_text'); ?></p>
  <p><?php the_content(); ?></p>
</div>

<!-- Could've hardcoded this into either a non-dynamic template or into the editor and disabling the visual editor but I wanted to give my client more control over the content -->
<div class="container" id="about-container">
  <div class="row">
    <div class="col-sm-6">
      <h2><?php the_field('title_left_column');?></h2>
      <p><?php the_field('paragraph_left_column'); ?></p>
    </div>
    <div class="col-sm-6">
      <h2><?php the_field('title_right_column');?></h2>
      <p><?php the_field('paragraph_right_column'); ?></p>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-sm-6">
      <img class="img-fluid" src="<?php the_field('image_bottom_column') ?>" />
    </div>
    <div class="col-sm-6">
      <h2><?php the_field('title_bottom_column');?></h2>
      <p><?php the_field('paragraph_bottom_column'); ?></p>
    </div>
  </div>
</div>


<?php endwhile; ?>
<?php endif; ?>
<?php get_footer( );?>
