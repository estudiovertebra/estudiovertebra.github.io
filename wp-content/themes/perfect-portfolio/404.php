<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Perfect_Portfolio
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
            <div class="tc-wrapper">
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><span><?php esc_html_e( '404.', 'perfect-portfolio' ); ?></span></h1>
					</header><!-- .page-header -->
					<div class="page-content">
						<h3><?php esc_html_e( 'Página não encontrada.', 'perfect-portfolio' ); ?></h3>					
						<p><?php esc_html_e( 'Não consegue encontrar o que precisa? Faça uma pesquisa abaixo ou comece em nossa página inicial.', 'perfect-portfolio' ); ?></p>
						<?php get_search_form(); ?>					
					</div><!-- .page-content -->
				</section><!-- .error-404 -->

				<?php
			    /**
			     * @see perfect_portfolio_latest_posts
			    */
			    do_action( 'perfect_portfolio_latest_posts' ); ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php 
get_footer();