<?php

/*
Template name: Institucional
*/

get_header(); ?>
<!-- contenido de la pagina -->

<section class="mt-5 bg-indigo">
        <div class="container-fluid">
                <div class="row">
                        <div class="col-lg-7  col-sm-8">
                                <div class="logo-portada pt-4 pl-0 pb-3 col-sm-12">
                                        <img class="img-fluid mt-4" src="<?php bloginfo('template_url');?>/images/conacai-logo.PNG" alt="logo conacai">
                                </div>
                                <div class="texto-institucionales pl-4">
                                        <?php
                                        if (have_posts()) :
                                                while (have_posts()) : the_post(); ?>
                                                        <h2><?php the_title(); ?></h2>
                                                        <div class="text-left">
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