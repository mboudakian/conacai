<?php

get_header(); ?>
<!-- contenido de la pagina -->

<section class="mt-5 bg-indigo">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-lg-7  col-sm-8">

                <div class="texto-institucionales pt-4">
                    <?php
                    if (have_posts()) :
                        while (have_posts()) : the_post(); ?>
                            <h2 class="pb-4"><?php the_title(); ?></h2>
                            <?php if(has_post_thumbnail() ){
                the_post_thumbnail( 'noticia-interior', array( 'class' => 'img-fluid' ) );;
            } ?>
                            <div class="text-left py-4">
                                <?php the_content() ?>
                            </div>
                </div>

            </div>
            <div class="col-lg-5 col-sm-4 fondo-institucionales">
            </div>
    <?php endwhile;
                    endif; ?>
        </div>

    </div>
</section>



<!-- fin contenido de la pagina -->

<!--footer-->
<?php get_footer(); ?>