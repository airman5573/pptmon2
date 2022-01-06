<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package PPTMON
 */

?>

	<!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
						<h5>About Us</h5>
						<ul>
							<li><a href="/terms-of-use/">Terms of Use</a></li>
							<li><a href="/privacy-policy/">Privacy Policy</a></li>
							<li><a href="/contact-us/">Contact Us</a></li>
						</ul>
				</div>
				<div class="col-md-4">
						<h5>Free Graphic Source</h5>
						<ul>
							<li><a href="https://pixabay.com/" target="_blank">Free High Quality Images</a></li>
							<li><a href="https://thenounproject.com/" target="_blank">Free High Quality Icon</a></li>
							<li><a href="https://undraw.co" target="_blank">Free High Quality Illustrations</a></li>
						</ul>
				</div>
				<div class="col-md-4">
						<h5>Recommended Information</h5>
						<ul>
							<li><a href="https://support.office.com/en-us/powerpoint" target="_blank">PowerPoint Help</a></li>
							<li><a href="https://support.google.com/docs/topic/2811776?hl=en&p=about_slides&rd=1" target="_blank">Google Slides Help</a></li>
							<li><a href="https://googledrive.blogspot.com/" target="_blank">Google Drive Blog</a></li>
							<li><a href="https://jooble.org/jobs-presentation-specialist" target="_blank">Careers</a></li>
						</ul>
				</div>
				
				<div class="col-md-12">
						<div class="copy">ⓒ MonsterCompany. All right reserved.</div>
				</div>

			</div>
		</div>
	</footer><!-- #colophon -->
<!-- #page -->

<?php wp_footer(); ?>

<script>
jQuery(function($) {
  // if ($('.itemlist').length > 0) {
  //   var masonry = new Macy({
	// 		container: '.itemlist',
	// 		cancelLegacy: true,
	// 		trueOrder: false,
	// 		waitForImages: false,
	// 		useOwnImageLoader: false,
	// 		debug: true,
	// 		mobileFirst: true,
	// 		columns: 1,
	// 		margin: 40,
	// 		breakAt: {
	// 				1200: 3,
	// 				940: 3,
	// 				520: 2,
	// 				400: 1
	// 		}
	//   });
  // }

  // Scroll할때 광고가 뜨도록 한다
  //<![CDATA[
  // var la=!1;window.addEventListener("scroll",function(){(0!=document.documentElement.scrollTop&&!1===la||0!=document.body.scrollTop&&!1===la)&&(!function(){var e=document.createElement("script");e.type="text/javascript",e.async=!0,e.src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1640812778563954";var a=document.getElementsByTagName("script")[0];a.parentNode.insertBefore(e,a)}(),la=!0)},!0);
  //]]>

  // Load되고 나서 광고가 뜨도록 한다
  // function downloadJSAtOnload() {
  //   setTimeout(() => {
  //     var element = document.createElement("script");
  //     element.src = "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1640812778563954";
  //     document.body.appendChild(element);
  //   }, 1000);
  // }
  // if (window.addEventListener) window.addEventListener("load", downloadJSAtOnload, false);
  // else if (window.attachEvent) window.attachEvent("onload", downloadJSAtOnload);
  // else window.onload = downloadJSAtOnload;

	// Desktop
	let mousemoved = false;
	document.addEventListener('mousemove', function(e){
		if (mousemoved == false) {
			mousemoved = true;

			// 일반광고
			var element = document.createElement("script");
			element.src = "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1640812778563954";
			document.body.appendChild(element);

			// presentation
			var $container = jQuery("#presentation-container");
			if ($container.length > 0) {
				let src = $container.attr('data-src');
				var $element = jQuery(`
					<div style="position: relative; padding-bottom: 56.25%; height: 0;">
						<iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
							src="${src}" frameborder="0" allowfullscreen="allowfullscreen">
						</iframe>
					</div>
				`);
				$container.append($element);
			}
		}
	});

	// Mobile
	let touchmoved = false;
	document.addEventListener('touchmove', function(e){
		if (touchmoved == false) {
			touchmoved = true;

			// 일반광고
			var element = document.createElement("script");
			element.src = "https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1640812778563954";
			document.body.appendChild(element);

			// presentation
			// var $container = jQuery("#presentation-container");
			// if ($container.length > 0) {
			// 	let src = $container.attr('data-src');
			// 	var $element = jQuery(`
			// 		<div style="position: relative; padding-bottom: 56.25%; height: 0;">
			// 			<iframe style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;"
			// 				src="${src}" frameborder="0" allowfullscreen="allowfullscreen">
			// 			</iframe>
			// 		</div>
			// 	`);
			// 	$container.append($element);
			// }
		}
	});

});</script>

