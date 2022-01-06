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

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">

				<?php
				while ( have_posts() ) :
					the_post();
        ?>
        <div class="contactbox">
        <h1>Contact Us</h1>
        <p>To contact us, please fill out the form below. We will contact you by e-mail after confirming the person in charge.</p>
        <?php echo do_shortcode('[contact-form-7 id="245" title="FooterContact"]'); ?>
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
