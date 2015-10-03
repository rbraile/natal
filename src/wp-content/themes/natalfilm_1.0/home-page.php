<?php
/**
* Template Name: Home-page 
*/
get_header(); ?>

    <div id="primary" class="content-area home-page">
        <div id="content" class="site-content" role="main">

            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
                        <div class="entry-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <?php endif; ?>

                        <h1 class="entry-title"><?php the_title(); ?></h1>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php the_content(); ?>
                        <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                    
                        <div class="top-images clear">
                            <div class="images-left">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/images/home-big-left.jpg"> 
                                <div class="double-row clear">
                                    <div class="double-row-first">
                                        <img src="<?php echo get_bloginfo('template_url'); ?>/images/logo-home-square.png">    
                                    </div>
                                    <div class="double-row-last">
                                        <h3>
                                            Por qué elergirnos
                                            <a>La empresa</a>
                                        </h3>
                                        <span class="ic-plus-big"></span>
                                    </div>
                                </div>   
                            </div>
                            <div class="images-right">
                                <h3>Nuestros desarrollos</h3>
                                <img src="<?php echo get_bloginfo('template_url'); ?>/images/home-big-right.jpg" />
                                <span class="ic-plus-big"></span>    
                            </div>
                        </div>

                        <div class="banner-middle">
                            <p>
                                Somos una empresa que desarrolla envases flexibles de polietileno, polipropileno 
                                y friselina a medida de cada cliente
                            </p>
                            <span class="ic-plus-big"></span>
                        </div>

                        <div class="brands-content">
                            <h3>Marcas que confían en nosotros</h3>
                            <div class="brands">
                                <img src="<?php echo get_bloginfo('template_url'); ?>/images/brands/chungo-logo.jpg" alt="chungo" />
                                <img src="<?php echo get_bloginfo('template_url'); ?>/images/brands/cremolatti-logo.jpg" alt="chungo" />
                                <img src="<?php echo get_bloginfo('template_url'); ?>/images/brands/moratto-logo.jpg" alt="chungo" />
                                <img src="<?php echo get_bloginfo('template_url'); ?>/images/brands/persicco-logo.jpg" alt="chungo" />
                                <img src="<?php echo get_bloginfo('template_url'); ?>/images/brands/veneciana-logo.jpg" alt="chungo" />
                                <img src="<?php echo get_bloginfo('template_url'); ?>/images/brands/cremolatti-logo.jpg" alt="chungo" />
                                <img src="<?php echo get_bloginfo('template_url'); ?>/images/brands/moratto-logo.jpg" alt="chungo" />
                                <img src="<?php echo get_bloginfo('template_url'); ?>/images/brands/persicco-logo.jpg" alt="chungo" />
                                <img src="<?php echo get_bloginfo('template_url'); ?>/images/brands/veneciana-logo.jpg" alt="chungo" />
                            </div>
                        </div>

                    </div><!-- .entry-content -->

                    <footer class="entry-meta">
                        <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
                    </footer><!-- .entry-meta -->
                </article><!-- #post -->

                <?php comments_template(); ?>
            <?php endwhile; ?>

        </div><!-- #content -->
    </div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>