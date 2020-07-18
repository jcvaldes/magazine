<?php get_header(); ?>

<!-- Contenido articulo -->
<div class="container">
    <div class="row">
        <div class="col-12 col-md-9 my-5">
            <!-- loop de Wordpress -->
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <!-- <img src="images/articulo.png" alt="" class="img-fluid" /> -->
            <?php if ( has_post_thumbnail() ) {

             the_post_thumbnail( 'post-thumbnails', array('class' => 'img-fluid'));

         } ?>
            <h2 class="my-3">
                <?php the_title(); ?>
            </h2>
            <p class="lead"><?php echo get_the_date(); ?></p>
            <div class="text-justify">
                <?php the_content() ?>
            </div>
            <?php endwhile; endif; ?>
        </div>
        <!-- Fin articulo -->
        <!-- aside -->
        <div class="col-12 col-md-3">
            <?php get_sidebar(); ?>
            <!-- <div class="my-3">
                <h3>Lorem, ipsum</h3>
                <img class="img-fluid" src="images/articulo.png" alt="" />
            </div>
            <div class="my-3">
                <h3>Lorem, ipsum</h3>
                <img class="img-fluid" src="images/articulo.png" alt="" />
            </div>
            <div class="my-3">
                <h3>Lorem, ipsum</h3>
                <img class="img-fluid" src="images/articulo.png" alt="" />
            </div> -->
        </div>
        <!-- Fin aside -->
    </div>
</div>
<!-- Fin Contenido articulo -->
<?php get_footer(); ?>