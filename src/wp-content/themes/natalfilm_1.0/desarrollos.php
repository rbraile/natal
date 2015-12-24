<?php
/**
* Template Name: desarrollos 
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

                <?php $the_query = new WP_Query( 'cat=7' ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <div class="entry-content clear">
                                <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                                <div class="left-col">
                                    <div class="contenido destacada clear">
                                        <a href="<?php echo catch_that_image();?>"><img src="<?php echo catch_that_image();?>" /></a>
                                        <div class="content-title">
                                            <h2 class="entry-title">
                                                <?php the_title();?>
                                            </h2>
                                            <h4><?php echo get_post_meta($post->ID, "frase", true); ?></h4>
                                        </div>
                                        <span class="box-color"></span>
                                    </div>
                                </div>
                            </div><!-- .entry-content -->
                        </article><!-- #post -->
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            
            <?php $the_query = new WP_Query( 'cat=6,-7' ); ?>
            <div class="content-list">
            <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
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
            <?php endwhile; ?>
            </div>
            <?php wp_reset_query(); ?>

                <footer class="entry-meta">
                    <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
                </footer><!-- .entry-meta -->
        </div><!-- #content -->
        <div class="sidebar">
            <div class="content-subcat">
                <h4>Nuestros desarrollos</h4>
                <ul class="filtros">
                    <?php wp_list_categories('child_of=12&title_li=x Material'); ?> 
                </ul>
                <ul class="filtros-rubro">
                    <?php wp_list_categories('child_of=9&title_li=x Industria'); ?> 
                </ul>
                <div class="content-img">
                    <p><a href="http://www.ecoplas.org.ar" target="_blank"><span>Socios de Ecoplas</span></a> Participamos del programa polietileno Reciclable</p>
                    <a target="_blank" href="http://www.ecoplas.org.ar"><img width="230" src="<?php echo get_bloginfo('template_url'); ?>/images/ecoplas.jpg" />
                </div>
            </div>
        </div>
    </div><!-- #primary -->

<?php get_footer(); ?>


