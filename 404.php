<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package handsonmindson
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main row">

			<section class="error-404 not-found col-sm-12">
				<header class="page-header">
					<h1 class="page-title text-center"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'handsonmindson' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content text-center">
					<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'handsonmindson' ); ?></p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer();
