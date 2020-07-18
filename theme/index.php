<?php get_header() ?>
<!-- Contenido -->
<div class="container my-5">
    <div class="row">
        <!-- Loop de WP -->
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <!-- Articulo -->
        <div class="col-12 col-sm-6 col-md-4 mb-3">
            <div class="card">

                <a href="<?php the_permalink(); ?>">
                    <?php if ( has_post_thumbnail() ) {
                        the_post_thumbnail( 'post-thumbnails', array('class' => 'card-img-top img-fluid'));
                    } ?>
                </a>

                <div class="card-body">
                    <a href="<?php the_permalink(); ?>">
                        <!-- título del articulo -->
                        <h4 class="card-title"><?php the_title(); ?></h4>
                    </a>
                    <p class="card-text">
                        <?php the_excerpt(); ?>
                    </p>
                </div>
                <div class="card-footer">
                    <small class="text-muted"><?php echo get_the_date(); ?> / <?php the_category(', '); ?> /
                        <?php the_author(); ?>
                    </small>

                </div>
            </div>
        </div>
        <?php endwhile; endif; ?>
        <!-- Fin articulo -->
    </div>
</div>
<!-- Fin Contenido -->
<?php get_footer() ?>