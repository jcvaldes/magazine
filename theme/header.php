<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/css/bootstrap.min.css" />
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo bloginfo('template_url'); ?>/style.css" />
  </head>
  <body>
    <!--Menu-->
    <div class="container-fluid bg-dark">
       <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
          <img
            src="<?php echo bloginfo('template_url'); ?>/images/bootstrap-solid.svg"
            width="30"
            height="30"
            alt=""
            loading="lazy"
          />
          Magazine
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
       <!--
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#" tabindex="-1" aria-disabled="true"
                >Link</a
              >
            </li>
          </ul>
        </div>
        -->
        <?php wp_nav_menu(array(
        'theme_location' => 'superior',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbarSupportedContent',
            'items_wrap' => '<ul class="navbar-nav ml-auto text-center">%3$s</ul>',
            'menu_class' => 'nav-item'
            )); ?>
        </nav> 

     
    </div>
    <!--Fin Menu-->
    <!-- Subscribiir -->
    <div
      class="container-fluid suscribir d-flex flex-column justify-content-center align-items-center"
    >
      <div class="text-center text-white">
        <h1 class="display-4">Lorem ipsum dolor sit</h1>
      </div>
      <form action="" class="form-inline">
        <div class="form-group mr-sm-3">
          <input type="text" class="form-control" placeholder="Nombre" />
        </div>
        <div class="form-group mr-sm-3">
          <input type="email" class="form-control" placeholder="Email" />
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
      </form>
    </div>
    <!-- Fin Subscribir -->