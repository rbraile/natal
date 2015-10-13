<?php
/**
* Template Name: como-trabajamos 
*/
get_header(); ?>

    <div id="primary" class="content-area home-page">
        <div id="content" class="site-content" role="main">
            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <?php if( in_category('Desarrollos')): ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <div class="entry-content clear">
                            <?php //the_content(); ?>
                            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                            <div class="left-col">
                                <div class="contenido clear">
                                    <div class="content-title">
                                        <h2 class="entry-title">
                                            <?php the_title();?>
                                        </h2>
                                        <h4><?php echo get_post_meta($post->ID, "fecha", true); ?></h4>
                                    </div>
                                    <?php the_content();?>
                                </div>
                            </div>
                        </div><!-- .entry-content -->
                    </article><!-- #post -->
                <?php endif;?>
            <?php endwhile; ?>

                <footer class="entry-meta">
                    <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-meta -->
        </div><!-- #content -->
        <div class="sidebar">
            
        </div>
    </div><!-- #primary -->

<?php get_footer(); ?>


