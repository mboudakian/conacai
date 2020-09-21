<?php

/*
Template name: Institucional
*/

get_header();?>
<!-- contenido de la pagina -->

<section class="page">
    <div class="container">
            <div class="row py-5">
               <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<div class="text-justify">
   <?php the_content()?>
</div>
        <?php endwhile; endif; ?>     
            </div>


</div>    
</section>



<!-- fin contenido de la pagina -->

  <!--footer-->
 <?php get_footer();?>