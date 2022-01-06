<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package PPTMON
 */

get_header();
?>
<style media="screen">
	.page-header{
		margin: 0;
		background: #fff;
		border-bottom: 0;
	}
</style>
	<section id="primary" class="content-area container">
		<main id="main" class="site-main row">
			<div class="col-md-12">


				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title">

							<?php
							/* translators: %s: search query. */
							printf( esc_html__( 'Search Results for: %s', 'pptmon' ), '<span>' . get_search_query() . '</span>' );
							?>

						</h1>
					</header><!-- .page-header -->


					<?php
					echo '<div class="itemlist">';
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/article', 'search' );

					endwhile;

					echo '</div>';
					?>

					<div class="adbox">
						<div align="center">

						</div>
						
					</div>

					<?php
					wp_pagenavi();

				else :
					echo '';
					get_template_part( 'template-parts/content', 'none' );
					echo '';
				endif;
		?>

			</div><!--col-md-12-->
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
