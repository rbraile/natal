<?php
/**
* Template Name: contacto
*/
get_header(); ?>

 <script src="https://maps.googleapis.com/maps/api/js"></script>

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
                                <div id="map" style="width: 500px;height: 500px;"></div>
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
 <script type="text/javascript">
     function initMap() {
       var myLatLng = {lat: -25.363, lng: 131.044};

       // Create a map object and specify the DOM element for display.
       var map = new google.maps.Map(document.getElementById('map'), {
         center: myLatLng,
         scrollwheel: false,
         zoom: 4
       });

       // Create a marker and set its position.
       var marker = new google.maps.Marker({
         map: map,
         position: myLatLng,
         title: 'Hello World!'
       });
     }
</script>
<?php get_sidebar(); ?>
<?php get_footer(); ?>