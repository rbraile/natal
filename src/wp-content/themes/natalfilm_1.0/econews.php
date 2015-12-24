<?php
/**
* Template Name: econews 
*/
get_header(); ?>

    <div id="primary" class="content-area home-page econews clear">
        <div id="content" class="site-content" role="main">
                <div class="title-content clear">
                    <h1 class="entry-title">
                        <?php the_title();?>
                    </h1>
                    <div class="frase">
                        <?php echo get_post_meta($post->ID, "frase", true); ?>
                    </div>
                </div>
                <div class="list-news">
                    <div class="econews-destacada">
                        <img src="<?php echo get_bloginfo('template_url'); ?>/images/econews-top.jpg" alt="econews" />
                        <p>4 de Mayo, 2015</p>    
                        <h2>Nuevo edificio de las oficinas sustentables en Buenos Aires</h2>
                        <span class="box-color"></span> 
                    </div>

                    <?php $the_query = new WP_Query( 'cat=21' ); ?>
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                                <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                                <div class="contenido destacada clear">
                                    <?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
                                    <div class="entry-thumbnail">
                                        <?php the_post_thumbnail(); ?>
                                    </div>
                                    <?php endif; ?>
                                    <div class="content-news">
                                        <p><?php the_time('j F, Y'); ?></p>
                                        <h2 clacontent-subcatss="entry-title">
                                            <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                                        </h2>
                                        <div class="resumen">
                                            <p><?php echo get_post_meta($post->ID, "destacado", true); ?></p>
                                        </div>
                                    </div>
                                    <span class="box-color"></span>
                                </div>
                            </article><!-- #post -->
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
                </div>
                <div class="sidebar">
                    <div class="content-subcat">
                        <h4>Categorías</h4>
                        <ul class="filtros">
                            <?php wp_list_categories('child_of=21&title_li='); ?> 
                        </ul>
                       
                    </div>
                </div>
                <footer class="entry-meta">
                    <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-meta -->
            </div><!-- #content -->
    </div><!-- #primary -->

<?php get_footer(); ?>


