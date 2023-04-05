<?php
?>
<div class="row">
<?php if ( have_rows( 'services' ) ) : ?>
    <?php while ( have_rows( 'services' ) ) : the_row(); ?>
  <div class="col-sm-4">
  <div class="card" style="width: 18rem;">
  <img src="<?php the_sub_field( 'image' ); ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php the_sub_field( 'title' ); ?></h5>
    <p class="card-text"><?php the_sub_field( 'description' ); ?></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
  </div>
  <?php endwhile; ?>
  <?php endif; ?>
</div>