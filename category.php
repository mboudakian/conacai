<?php get_header();?>
<section class="categoria pt-5">
<div class="container pt-5">
  <div class="row pt-5">
  <?php
      if (have_posts()) :
        while (have_posts()) :
                the_post();
      ?>     

  <article class="col-lg-6 col-sm-12 pb-5 px-5">
  <div class="card h-100">
    <a class="card-title" href="<?php the_permalink(); ?>">
      <?php the_post_thumbnail( 'imagen-categoria', ['class' => 'img-fluid' ]); ?>
    </a>
    <div class="card-body d-flex flex-column py-0">
    <a class="no-underline" href="<?php the_permalink(); ?>">
      <h2 class="card-title  texto-categoria"><?php the_title(); ?></h2>
    </a>
    </div>
  </div>
  </article>
    <?php  endwhile; ?>
  <?php  endif; ?>
  </div>

  <div class="row paginacion py-4">
  <?php
  global $wp_query;
  
  $big = 999999999; // need an unlikely integer
  $translated = __( '', 'mytextdomain' ); // Supply translatable string
  
  echo paginate_links( array(
      'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
      'format' => '?paged=%#%',
      'current' => max( 1, get_query_var('paged') ),
      'total' => $wp_query->max_num_pages,
      'before_page_number' => '<span class="screen-reader-text">'.$translated.' </span>'
  ) );
  ?>
  </div>

  </div>
</section>
<?php get_footer();?>