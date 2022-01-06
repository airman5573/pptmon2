<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PPTMON
 */

get_header();
?>
<style media="screen">
  .contactbox{
    max-width: 700px;
    margin-bottom: 10rem;
  }
  .contactbox ol{
    margin: 0 0 0 15px;
    padding: 0;
  }
  .contactbox hr{
    margin: 2rem 0;
  }
  .contactbox h5{
    margin-top: 2rem;
  }
</style>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">

				<?php
				while ( have_posts() ) :
					the_post();
        ?>
        <div class="contactbox">
          <?php the_content();?>
        </div>

        <?php
				endwhile; // End of the loop.
				?>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
