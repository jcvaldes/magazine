<?php get_header(); ?>
    <!-- Contenido menu -->
    <div class="container my-5">
         <!-- loop de Wordpress -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
        <h2><?php the_title(); ?></h2>
        <div class="text-justify">
            <!-- contenido de la pagina --> 
            <?php the_content(); ?>
        </div>
        <?php endwhile; endif; ?>
        <!-- Fin loop de Wordpress -->
    </div>
    <!-- Fin Contenido menu -->
  <?php get_footer(); ?>