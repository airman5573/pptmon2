<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package PPTMON
 */

get_header();
?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main row">
      <div>
        <div class="col-md-12">
          <div class="adbox">
            <div align="center">
              <ins class="adsbygoogle"
                style="display:block; text-align:center;"
                data-ad-layout="in-article"
                data-ad-format="fluid"
                data-ad-client="ca-pub-1640812778563954"
                data-ad-slot="8508245529"></ins>
                <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="col-md-9"> <?php
          while ( have_posts() ) :
            the_post();
            if ( function_exists( 'bread_crumb' ) ) { bread_crumb(); } ?>
            <div class="contentbody">
              <header class="page-header">
                <h1 class="page-title"><?php the_title(); ?></h1>
              </header><?php 
              the_content(); ?>
            </div>

            <div class="downloadbox">
              <ul>
                <li><a target="_blank" class="download" href="<?php the_field('googleslide_link'); ?>">Use as Google Slides theme</a></li>
                <li><a target="_blank" href="<?php the_field('googleslide_download'); ?>">Download as PowerPoint template</a></li>
              </ul>
            </div>
            <div class="single-tags">
              <storng>Tags :</storng>
              <?php echo get_the_term_list( get_the_ID(), 'post_tag', "",", "); ?>
            </div><?php
            if ( function_exists('yoast_breadcrumb') ) {
              yoast_breadcrumb('<p id="breadcrumbs">','</p>');
            }?>
            <div class="adbox">
              <div align="center">
                <ins class="adsbygoogle"
                  style="display:block"
                  data-ad-format="autorelaxed"
                  data-ad-client="ca-pub-1640812778563954"
                  data-ad-slot="9089615280"></ins>
                <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
              </div>
            </div><?php
          endwhile; // End of the loop.?>
        </div><!--col--md-9-->
        <div class="col-md-3"><?php 
          dynamic_sidebar('sidebar'); ?>
          <div class="widget paypalink">
            Payment isn’t required, but donations are always appreciated!
            <a class="plink" href="https://paypal.me/pptmon" target="_blank">DONATE WITH PAYPAL</a>
            Your donation goes a long way to helping us run pptmon.com ! :)
          </div>

          <div class="adbox">
            <!-- 사각광고-01 -->
            <ins class="adsbygoogle"
              style="display:block"
              data-ad-client="ca-pub-1640812778563954"
              data-ad-slot="5172373466"
              data-ad-format="auto"
              data-full-width-responsive="true"></ins>
              <script>(adsbygoogle = window.adsbygoogle || []).push({});</script>
          </div>
          <script defer src='https://cse.google.com/cse.js?cx=partner-pub-1640812778563954:7627011333'></script><div class="gcse-searchbox-only"></div>
        </div> <!--col--md-3-->
      </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
