<div class="<?php wptouch_post_classes(); ?>">
	<div class="post-page-head-area bauhaus">
		<h2 class="post-title heading-font"><?php the_title(); ?></h2>
	</div>
	<div class="post-page-content mobile">
		<?php if ( bauhaus_should_show_thumbnail() && wptouch_has_post_thumbnail() ) { ?>
			<div class="post-page-thumbnail">
				<?php the_post_thumbnail('large', array( 'class' => 'post-thumbnail wp-post-image' ) ); ?>
			</div>
		<?php } ?>

        <?php if(is_page( 'nuestros-desarrollos' )):?>
        
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

        <?php elseif(is_page('eco-news')):?>
            <div class="list-news eco-news">
                <?php $the_query = new WP_Query( 'cat=21' ); ?>
                <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
                            <div class="contenido destacada clear">
                                <div class="content-news">
                                   <?php get_template_part( 'post-loop' ); ?>
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
                    <ul>
                        <?php wp_list_categories('child_of=21&title_li='); ?> 
                    </ul>
                   
                </div>
            </div>
        <?php else:?>
            <?php wptouch_the_content(); ?>
        <?php endif;?>
        
	</div>
</div>