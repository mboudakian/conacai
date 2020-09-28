<?php get_header()?>
<section class="categoria pt-5">
<div class="container pt-5">
<div class="row pt-5">
<?php
        $la_query = new WP_Query("category_name=actividades&showposts=4"); while($la_query->have_posts()) : $la_query->the_post(); ?>
          
<article class="col-lg-6 col-sm-12 pb-5 px-5">

<div class="card h-100">
              <a class="card-title" href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail() ){
                the_post_thumbnail( 'imagen-categoria', array( 'class' => 'card-img-top img-fluid' ) );;
            } ?></a>
              <div class="card-body d-flex flex-column py-0">
                <a class="no-underline" href="<?php the_permalink(); ?>">
                  <h2 class="card-title  texto-categoria"><?php the_title(); ?></h2>
                </a>
              </div>
            </div>
</article>


          <?php  endwhile; ?>

</div>



</div>
</section>
<?php get_footer()?>