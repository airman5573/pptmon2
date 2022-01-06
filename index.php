<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package PPTMON
 */

get_header();
?>
<header class="page-header">
		<h1 class="page-title">Free Google Slides Themes and PowerPoint Templates for support your presentation !</h1>
</header>

<!--
<style media="screen">
	.catlist ul li{
		float: none;
		width: 100%;
	}
	.catlist ul li a{
		text-align: left;
	}
	.info2box{
		padding-left: 0;
		font-size: 12px;
		color: #555;
	}
	.info2box img{
		position: static;
		transform: none;
		margin: 0 0 5px;
		width: 100%;
	}
	.info2box p{
		margin: 0;
		word-break: break-all;
		text-align: justify;
	}
	.catlist{
		margin: 0 0 20px;
	}
	h5{
		margin: 0 0 15px;
	}
</style>
-->
<!--
<div class="slider">

	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
	  <div class="carousel-inner">
	    <div class="carousel-item active">
				<div class="container">

					<div class="slide-text">
						<h1>Free PowerPoint Templates Google Slides themes</h1>
						<div class="slide-description">
							Free PowerPoint Templates Google Slides Themes - Give your presentations beauty and originality.
						</div>
					</div>

				</div>
	    </div>
	    <div class="carousel-item">
				<div class="container">

					<div class="slide-text">
						<h1>Free Google Slides themes PowerPoint Templates</h1>
						<div class="slide-description">
							Free Google Slides theme PowerPoint Templates - We want to help you save time by using our designs to create more meaningful presentations!
						</div>
					</div>

				</div>
	    </div>
	  </div>
	  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>
	</div>

</div>
-->
	<div id="primary" class="content-area container">
		<main id="main" class="site-main row">

<!--
			<div class="col-md-2">
				<h5>Categorise</h5>
				<?php get_template_part( 'template-parts/categories', get_post_type() ); ?>

				  <div class="info2box">
				    <img src="http://www.pptmon.com/wp-content/uploads/2019/05/mon-ani-01-3-low.gif">
				    <p>Free Google Slides Themes and PowerPoint Templates - Give your presentations beauty and originality</p>
				  </div>

				  <div class="info2box">
				    <img src="http://www.pptmon.com/wp-content/uploads/2019/05/mon-ani-02-3-low.gif">
				    <p>Free Google Slides theme PowerPoint Templates - We want to help you save time by using our designs to create more meaningful presentations!</p>
				  </div>
			</div>
-->

			<div class="col-md-12">

				<?php
				if ( have_posts() ) :

					//if ( is_home() && ! is_front_page() ) :
						?>

						<div class="row">

							<?php get_template_part( 'template-parts/servicedesc', 'none' ); ?>

							<div class="col-md-12">
								<?php get_template_part( 'template-parts/categories', get_post_type() ); ?>
							</div>
						</div>

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

						<?php
					//endif;
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
	<div align="center">
	</div>
</div>
					<?php

					echo '<div class="pageouter">';
					wp_pagenavi();
					echo '</div>';

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>

			</div><!--col-md-12-->
		</main><!-- #main -->
	</div><!-- #primary -->

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


<?php
get_footer();
