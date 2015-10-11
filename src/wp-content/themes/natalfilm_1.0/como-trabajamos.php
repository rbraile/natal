<?php
/**
* Template Name: como-trabajamos 
*/
get_header(); ?>

    <div id="primary" class="content-area home-page">
        <div id="content" class="site-content" role="main">

            <?php /* The loop */ ?>
            <?php while ( have_posts() ) : the_post(); ?>

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
                                <h3>Nuestra visión empresarial y desarrollo productivo nos distingue
                                 y diferencia en el mercado específico y se trasluce en las propias 
                                 características de nuestro trabajo</h3>
                                <div class="content-images">
                                    <div class="text text1">
                                        <p>1/</p>
                                        <p>
                                            Analizamos la imagen, sus variables comunicacionales y 
                                            las necesidades del cliente para realizar un diagnóstico 
                                            personalizado.
                                        </p>
                                    </div>
                                    <div class="text text2">
                                        <p>2/</p>
                                        <p>
                                            Desarrollamos varios prototipos con diversos materiales y
                                             examinamos cuál es la opción que mejor se ajusta a los 
                                             objetivos planteados en el diagnóstico.
                                        </p>
                                    </div>
                                    <div class="text text3">
                                        <p>3/</p>
                                        <p>
                                            Se presenta al cliente un boceto como referencia detallada
                                            y fehaciente de cómo quedará el producto.
                                        </p>
                                    </div>
                                    <div class="text text4">
                                        <p>4/</p>
                                        <p>
                                            Se lleva adelante el proceso de preprensa que permite 
                                            optimizar el diseño y una calidad de excelencia en la 
                                            impresión en le producto final.
                                        </p>
                                    </div>
                                    <div class="text text5">
                                        <p>5/</p>
                                        <p>
                                            Se entrega el producto en las cantidades solicitadas, las mismas
                                            pueden variar 5% por los procesos de fabricaión y en el momento
                                            adecuado ("just in time").
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar">
                            
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