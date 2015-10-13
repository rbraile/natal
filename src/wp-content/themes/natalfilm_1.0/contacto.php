<?php
/**
* Template Name: contacto
*/
get_header(); ?>

    <div id="primary" class="content-area home-page">
        <div id="content" class="site-content" role="main">

            <?php /* The loop */ ?>
            <?php if ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                    <div class="entry-content clear">
                        <?php //the_content(); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                    
                        <div class="left-col">
                            <div class="title-content clear">
                                <h1 class="entry-title">
                                    <?php the_title();?>
                                </h1>
                                <div class="frase">
                                    <?php echo get_post_meta($post->ID, "frase", true); ?>
                                </div>
                            </div>
                            <div class="contenido">
                                <?php the_content(); ?>
                            </div>
                        </div>
                        
                    </div><!-- .entry-content -->

                    <footer class="entry-meta">
                        <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
                    </footer><!-- .entry-meta -->
                    <?php if ( is_active_sidebar( 'marcas' ) ) : ?>
                        <div class="menu-marcas-content clear">
                            <?php dynamic_sidebar( 'marcas' ); ?>
                        </div><!-- #tertiary -->
                    <?php endif; ?>
                </article><!-- #post -->

            <?php endif; ?>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>