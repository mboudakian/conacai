<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
   <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/bootstrap.min.css">
  <!-- Mi CSS-->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url');?>/style.css">
  <!-- Google Fonts-->
  <link href="https://fonts.googleapis.com/css2?family=Encode+Sans:wght@400;600;700&family=Montserrat:wght@500;600&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <!-- Font Awesome-->
  <link rel="stylesheet" href="<?php bloginfo('template_url');?>/assets/fontawesome/css/all.min.css">
  <title>Conacai test</title>
</head>

<body class="pt-5">
 <!-- NAVBAR -->
  <header class="w-100 fixed-top mb-5">
    <div class="headerTop">
      <a href="https://enacom.gob.ar" target="_blank" title="Ir al Sitio de Enacom">
      <img id="header-conacai" class="logo-oculto" src="<?php bloginfo('template_url');?>/images/logo.svg" alt="logo de conacai">
        <img src="<?php bloginfo('template_url');?>/images/logo_enacom.png" alt="Logo del Enacom" />
       
      </a>
    </div>

    <nav class="navbar navbar-expand-lg  navbar-dark bg-indigo mb-5">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
          <?php wp_nav_menu(array(
                'theme_location' => 'principal',
                'depth' => 2, //1 = no dropdown, 2 = con dropdown
                'container' => 'div',
                'container_class' => 'collapse navbar-collapse justify-content-center',
                'container_id' => 'navbarNav',
                'items_wrap' => '<ul class="navbar-nav">%3$s</ul>',
                'menu_class' => 'nav-item',
                'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                'walker'          => new WP_Bootstrap_Navwalker(),
            )); ?>
            
    </nav>

  </header>