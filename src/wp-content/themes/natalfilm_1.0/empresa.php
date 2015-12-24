<?php
/**
* Template Name: empresa 
*/
get_header(); ?>

    <div id="primary" class="content-area home-page clear">
        <div id="content" class="site-content" role="main">
                <div class="title-content clear">
                    <h1 class="entry-title">
                        <?php the_title();?>
                    </h1>
                    <div class="frase">
                        <?php echo get_post_meta($post->ID, "frase", true); ?>
                    </div>
                </div>
                <?php masterslider(4); ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content">
                            <?php the_content(); ?>
                            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                        </div><!-- .entry-content -->
                    </article>
                <?php endwhile;?>
                <footer class="entry-meta">
                    <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-meta -->
        </div><!-- #content -->
        <div class="sidebar">
            <div class="content-subcat">
                <h4>Nuestros Servicios</h4>
                <ul class="servicios">
                    <li class="trabajo"><span></span> <p>Trabajo <br />personalizado</p></li>
                    <li class="estudio"><span></span> <p>Estudio previo de cada trabajo a realizar</p></li>
                    <li class="proceso"><span></span> <p>Proceso <br />de preprensa</p></li>
                    <li class="recursos"><span></span> <p>Recursos tecnológicos de primera línea</p></li>
                    <li class="metodo"><span></span> <p>Método productivo Just in time</p></li>
                    <li class="logistica"><span></span> <p>Logística moderna a nivel nacional</p></li>
                </ul>
                <div class="content-img">
                    <a href="/eco-news" title="La empresa"><img width="230" src="<?php echo get_bloginfo('template_url'); ?>/images/logo-envases-amigables.png" /></a>
                </div>
            </div>
        </div>
    </div><!-- #primary -->

<?php get_footer(); ?>


