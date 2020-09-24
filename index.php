<?php get_header(); ?>


<!-- contenido -->

  <section class="portada-novedades mt-5">

    <div class="logo-portada pt-4 pl-4 pb-3 col-sm-12">
      <img class="img-fluid mt-4" src="<?php bloginfo('template_url');?>/images/conacai-logo.PNG" alt="logo conacai">
    </div>

<!-- CAROUSEL -->
<div class="container col-lg-8 col-md-7 col-sm-12">
    <div id="carouselPrincipal" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
  <?php
		$args = array(
			'showposts'=>'5',
			'category_name'=>'novedades'
		);
		$the_query = new WP_Query($args);
		if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
	?>
    <li data-target="#carouselPrincipal" data-slide-to="<?php echo $the_query->current_post; ?>" class="<?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>"></li>
      <?php endwhile; endif; ?>
  </ol>
  <div class="carousel-inner">
  <?php 
		if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();
	?>
    <div class="carousel-item  <?php if ( $the_query->current_post == 0 ) : ?>active<?php endif; ?>" style="background-image:url('<?php the_post_thumbnail_url('slide-novedades'); ?>');">
      
      <div class="carousel-caption">
      <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><h2 class=" text-left"><?php the_title(); ?></h2></a>
    <p class="text-left"><?php echo apply_filters( 'the_content', wp_trim_words( strip_tags( $post->post_content ), 10 ) ); ?></p>
    <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">Ver Más...</a>
  </div>
    </div>
    <?php endwhile; endif; ?>
   
  </div>


  <?php if ( have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  <?php if ( $the_query->current_post == 1 ): ?>
  <a class="carousel-control-prev" href="#carouselPrincipal" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselPrincipal" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <?php endif; ?>
	<?php endwhile; endif; ?> 
</div>
</div>




  </section> 


  <div class="imagen-fondo">
    <section class="video-portada">
      <div id="videolinea">
        <div class="container">
          <div class="row">
            <div class="col-sm-9 col-md-12 col-lg-6">
              <iframe width="100%" height="315" src="https://www.youtube.com/embed/s8k5GfBQmM8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-sm-9 col-md-12 col-lg-6 recuadro h-100 py-1">
              <h2 class="py-3">Línea 102 de las chicas y chicos
                las 24 horas los 365 días del año.</h2>
              <p class="py-3">La línea 102 es un servicio telefónico gratuito
                brindado por la Secretaría de Niñez, Adolescencia
                y familia, para orientar a las niñas, niños y
                adolescentes y a los ciudadanos en general, sobre
                protección y restitución de derechos de niñas y
                niños con derechos amenazados o vulnerados.</p>
            </div>
          </div>

        </div>


      </div>
    </section>

    <!--SECCION NOTICIAS-->

    <section class="noticias pb-5">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <h2 class="d-block mb-4">Noticias de interés</h2>
          </div>
          <?php
        $la_query = new WP_Query("category_name=actividades&showposts=4"); while($la_query->have_posts()) : $la_query->the_post(); ?>
          

          <article class="col-sm-12 col-md-6 col-lg-3 col-xs-12 mb-4">
            <div class="card h-100 cardcolor">
              <a class="card-title" href="<?php the_permalink(); ?>"><?php if(has_post_thumbnail() ){
                the_post_thumbnail( 'noticias-thumbnail', array( 'class' => 'card-img-top img-fluid' ) );;
            } ?></a>
              <div class="card-body d-flex flex-column py-0">
                <a class="no-underline" href="<?php the_permalink(); ?>">
                  <h3 class="card-title h3 text-white"><?php the_title(); ?></h3>
                </a>
              </div>
            </div>
          </article>
          <?php  endwhile; ?>

        </div>
      </div>
    </section>

  </div>


  <!--FIN DEL CONTENIDO-->

<?php get_footer(); ?>