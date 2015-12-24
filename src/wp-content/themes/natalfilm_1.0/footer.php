<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

		</div><!-- #main -->
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="footer-content">

                <?php if ( is_active_sidebar( 'data-fiscal' ) ) : ?>
                    <div class="data-fiscal-content">
                        <?php dynamic_sidebar( 'data-fiscal' ); ?>
                    </div>
                <?php endif; ?>

                <h4><a href="/contactenos">Contactanos</a></h4>
                <p class="contacto">+54 11 4747 2815</p>
                <p class="contacto">info@natalfilm.com.ar</p>
                <div class="address">
                    <p>Dirección</p>         
                    <p>-</p>         
                    <p>Gervasio Posadas 1437</p>         
                    <p>B1643FUC Beccar</p>
                    <p>Buenos Aires. Argentina</p>
                </div>
                <p class="copy-right">@ Todos los derechos reservados. Natalfilm de Sertrafo SA, 2015</p>
            </div>
		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>
</body>
</html>