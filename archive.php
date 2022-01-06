<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PPTMON
 */

get_header();
?>
<header class="page-header">
	<h1 class="page-title">Free <span><?php echo single_cat_title(); ?></span>Google Slides Themes and PowerPoint Templates</h1>
	<div class="archive-description">
		<!--
		+ Daily Updates + Free <?php// echo single_cat_title(); ?> powerpoint Template for Your Presentation
	-->
	</div>
</header><!-- .page-header -->

	<div id="primary" class="content-area container">
		<main id="main" class="site-main row">
			<div class="col-md-12">

				<?php if ( have_posts() ) : ?>
						<div class="row">
							<?php// get_template_part( 'template-parts/servicedesc', 'none' ); ?>
							<div class="col-md-12">
								<?php get_template_part( 'template-parts/categories', get_post_type() ); ?>
							</div>
						</div>
				<div align="center">
          <ins class="adsbygoogle"
              style="display:block; text-align:center;"
              data-ad-layout="in-article"
              data-ad-format="fluid"
              data-ad-client="ca-pub-1640812778563954"
              data-ad-slot="8508245529"></ins>
              <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
				</div>
					<?php
					echo '<div class="itemlist">';
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/article', get_post_type() );

					endwhile;

					echo '</div>';
					?>


				
				
					<div class="adbox">
            <ins class="adsbygoogle"
                style="display:block; text-align:center;"
                data-ad-layout="in-article"
                data-ad-format="fluid"
                data-ad-client="ca-pub-1640812778563954"
                data-ad-slot="8508245529"></ins>
                <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
				  </div>
						

					<?php
					echo '<div class="pageouter">';
					wp_pagenavi();
					echo '</div>';

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

<div class="adbox">
	<div align="center">
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-1640812778563954"
     data-ad-slot="9089615280"></ins>
     <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
	</div>
	
	
</div>
				
				
			</div><!--col-md-12-->
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
