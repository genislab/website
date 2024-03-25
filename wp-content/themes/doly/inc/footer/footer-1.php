<?php

/**

 * Footer action

 * @package Doly

 */



function doly_footer_style_1(){ ?>

<footer class="footer-area">

	<div class="container">

		<div class="row">

			<div class="col-lg-12">

				<div class="copyright text-center">

					<a href="<?php echo esc_url( __( 'https://genislab.com/', 'Genislab Technologies' ) ); ?>">

						<?php

						/* translators: %s: CMS name, i.e. WordPress. */

						printf( esc_html__( 'Powered by %s', 'Genislab' ), 'Genislab Technologies' );

						?>

					</a>

					<p><?php

						/* translators: 1: Theme name, 2: Theme author. */

						printf( esc_html__( 'Last updated: %1$s by %2$s.', 'Genislab' ), 'GenisXchange', 'Genislab Technologies' );

						?></p>

				</div>

			</div>

		</div>

	</div>

</footer>

<?php }

add_action('doly_footer_style','doly_footer_style_1');