<?php get_header();?>
<!-- contenido de la pagina -->
<div class="container">
<?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
<h2><?php the_title(); ?></h2>
<div class="text-justify">
   <?php the_content()?>
</div>
        <?php endwhile; endif; ?>

</div>

<!-- fin contenido de la pagina -->

  <!--footer-->
 <?php get_footer();?>