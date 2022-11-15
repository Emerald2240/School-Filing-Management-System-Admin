<?php
require_once('config/connect.php');
require_once('functions/functions.php');


if (!isset($_SESSION['super_log'])) {
	gotoPage("login");
}
?>

<!DOCTYPE html>
<html>

<!-- Mirrored from www.okler.net/previews/porto/9.9.0/blog-post-image-gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 22:10:35 GMT -->

<head>

	<!-- Basic -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Post Image Gallery | Porto - Multipurpose Website Template</title>

	<meta name="keywords" content="WebSite Template" />
	<meta name="description" content="Porto - Multipurpose Website Template">
	<meta name="author" content="okler.net">

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

	<!-- Web Fonts  -->
	<link id="googleFonts" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7CShadows+Into+Light&amp;display=swap" rel="stylesheet" type="text/css">

	<!-- Vendor CSS -->
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" href="vendor/animate/animate.compat.css">
	<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

	<!-- Theme CSS -->
	<link rel="stylesheet" href="css/theme.css">
	<link rel="stylesheet" href="css/theme-elements.css">
	<link rel="stylesheet" href="css/theme-blog.css">
	<link rel="stylesheet" href="css/theme-shop.css">

	<!-- Skin CSS -->
	<link id="skinCSS" rel="stylesheet" href="css/skins/default.css">

	<!-- Theme Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Head Libs -->
	<script src="vendor/modernizr/modernizr.min.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-42715764-11"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-42715764-11');
	</script>

</head>

<body data-plugin-page-transition>

	<div class="body">
		<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyChangeLogo': true, 'stickyStartAt': 30, 'stickyHeaderContainerHeight': 70}">
			<div class="header-body border-top-0">
				<div class="header-container container-fluid px-lg-4">
					<div class="header-row">
						<div class="header-column header-column-border-right flex-grow-0">
							<div class="header-row pe-4">
								<div class="header-logo">
									<a href="../user/index-2.html">
										<img alt="Porto" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="img/logo-default-slim.png">
									</a>
								</div>
							</div>
						</div>
						<div class="header-column">
							<div class="header-row">
								<div class="header-nav header-nav-links justify-content-center">
									<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
										<nav class="collapse header-mobile-border-top">
											<ul class="nav nav-pills" id="mainNav">
												<li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="../user/index-2.html"> Home </a>
													<ul class="dropdown-menu">
														<li> <a class="dropdown-item" href="../user/index-2.html"> Landing Page </a> </li>
														<li> <a class="dropdown-item" href="../user/index-2.html#demos"> Demos <span class="tip tip-dark">hot</span> </a> </li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Classic</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="../user/index-classic.html">Classic - Original</a></li>
																<li><a class="dropdown-item" href="../user/index-classic-color.html">Classic - Color</a></li>
																<li><a class="dropdown-item" href="../user/index-classic-light.html">Classic - Light</a></li>
																<li><a class="dropdown-item" href="../user/index-classic-video.html">Classic - Video</a></li>
																<li><a class="dropdown-item" href="../user/index-classic-video-light.html">Classic - Video - Light</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Corporate</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="../user/index-corporate.html">Corporate - Version 1</a></li>
																<li><a class="dropdown-item" href="../user/index-corporate-2.html">Corporate - Version 2</a></li>
																<li><a class="dropdown-item" href="../user/index-corporate-3.html">Corporate - Version 3</a></li>
																<li><a class="dropdown-item" href="../user/index-corporate-4.html">Corporate - Version 4</a></li>
																<li><a class="dropdown-item" href="../user/index-corporate-5.html">Corporate - Version 5</a></li>
																<li><a class="dropdown-item" href="../user/index-corporate-6.html">Corporate - Version 6</a></li>
																<li><a class="dropdown-item" href="../user/index-corporate-7.html">Corporate - Version 7</a></li>
																<li><a class="dropdown-item" href="../user/index-corporate-8.html">Corporate - Version 8</a></li>
																<li><a class="dropdown-item" href="../user/index-corporate-9.html">Corporate - Version 9</a></li>
																<li><a class="dropdown-item" href="../user/index-corporate-10.html" ->Corporate - Version 10</a></li>
																<li><a class="dropdown-item" href="../user/index-2.html#demos" ->More...</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Portfolio</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="../user/index-portfolio.html">Portfolio - Version 1</a></li>
																<li><a class="dropdown-item" href="../user/index-portfolio-2.html">Portfolio - Version 2</a></li>
																<li><a class="dropdown-item" href="../user/index-portfolio-3.html">Portfolio - Version 3</a></li>
																<li><a class="dropdown-item" href="../user/index-portfolio-4.html">Portfolio - Version 4</a></li>
																<li><a class="dropdown-item" href="../user/index-portfolio-5.html">Portfolio - Version 5</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Blog</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="../user/index-blog.html">Blog - Version 1</a></li>
																<li><a class="dropdown-item" href="../user/index-blog-2.html">Blog - Version 2</a></li>
																<li><a class="dropdown-item" href="../user/index-blog-3.html">Blog - Version 3</a></li>
																<li><a class="dropdown-item" href="../user/index-blog-4.html">Blog - Version 4</a></li>
																<li><a class="dropdown-item" href="../user/index-blog-5.html">Blog - Version 5</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">One Page</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="../user/index-one-page.html">One Page Original</a></li>
															</ul>
														</li>
													</ul>
												</li>
												<li class="dropdown dropdown-mega"> <a class="dropdown-item dropdown-toggle" href="elements.html"> Elements </a>
													<ul class="dropdown-menu">
														<li>
															<div class="dropdown-mega-content">
																<div class="row">
																	<div class="col-lg-3"> <span class="dropdown-mega-sub-title">Elements 1</span>
																		<ul class="dropdown-mega-sub-nav">
																			<li><a class="dropdown-item" href="elements-accordions.html">Accordions</a></li>
																			<li><a class="dropdown-item" href="elements-alerts.html">Alerts</a></li>
																			<li><a class="dropdown-item" href="elements-animations.html">Animations</a></li>
																			<li><a class="dropdown-item" href="elements-arrows.html">Arrows</a></li>
																			<li><a class="dropdown-item" href="elements-badges.html">Badges</a></li>
																			<li><a class="dropdown-item" href="elements-before-after.html">Before / After</a></li>
																			<li><a class="dropdown-item" href="elements-blockquotes.html">Blockquotes</a></li>
																			<li><a class="dropdown-item" href="elements-buttons.html">Buttons</a></li>
																			<li><a class="dropdown-item" href="elements-call-to-action.html">Call to Action</a></li>
																			<li><a class="dropdown-item" href="elements-cards.html">Cards</a></li>
																			<li><a class="dropdown-item" href="elements-carousels.html">Carousels</a></li>
																			<li><a class="dropdown-item" href="elements-cascading-images.html">Cascading Images</a></li>
																		</ul>
																	</div>
																	<div class="col-lg-3"> <span class="dropdown-mega-sub-title">Elements 2</span>
																		<ul class="dropdown-mega-sub-nav">
																			<li><a class="dropdown-item" href="elements-content-rotate.html">Content Rotate</a></li>
																			<li><a class="dropdown-item" href="elements-countdowns.html">Countdowns</a></li>
																			<li><a class="dropdown-item" href="elements-counters.html">Counters</a></li>
																			<li><a class="dropdown-item" href="elements-dividers.html">Dividers</a></li>
																			<li><a class="dropdown-item" href="elements-forms.html">Forms</a></li>
																			<li><a class="dropdown-item" href="elements-headings.html">Headings</a></li>
																			<li><a class="dropdown-item" href="elements-icons.html">Icons</a></li>
																			<li><a class="dropdown-item" href="elements-icon-boxes.html">Icon Boxes</a></li>
																			<li><a class="dropdown-item" href="elements-image-frames.html">Image Frames</a></li>
																			<li><a class="dropdown-item" href="elements-image-gallery.html">Image Gallery</a></li>
																			<li><a class="dropdown-item" href="elements-image-hotspots.html">Image Hotspots</a></li>
																			<li><a class="dropdown-item" href="elements-lightboxes.html">Lightboxes</a></li>
																		</ul>
																	</div>
																	<div class="col-lg-3"> <span class="dropdown-mega-sub-title">Elements 3</span>
																		<ul class="dropdown-mega-sub-nav">
																			<li><a class="dropdown-item" href="elements-lists.html">Lists</a></li>
																			<li><a class="dropdown-item" href="elements-maps.html">Maps</a></li>
																			<li><a class="dropdown-item" href="elements-medias.html">Medias</a></li>
																			<li><a class="dropdown-item" href="elements-modals.html">Modals</a></li>
																			<li><a class="dropdown-item" href="elements-parallax.html">Parallax</a></li>
																			<li><a class="dropdown-item" href="elements-particles.html">Particles</a></li>
																			<li><a class="dropdown-item" href="elements-posts.html">Posts</a></li>
																			<li><a class="dropdown-item" href="elements-pricing-tables.html">Pricing Tables</a></li>
																			<li><a class="dropdown-item" href="elements-process.html">Process</a></li>
																			<li><a class="dropdown-item" href="elements-progressbars.html">Progress Bars</a></li>
																			<li><a class="dropdown-item" href="elements-random-images.html">Random Images</a></li>
																			<li><a class="dropdown-item" href="elements-read-more.html">Read More</a></li>
																		</ul>
																	</div>
																	<div class="col-lg-3"> <span class="dropdown-mega-sub-title">Elements 4</span>
																		<ul class="dropdown-mega-sub-nav">
																			<li><a class="dropdown-item" href="elements-sections.html">Sections</a></li>
																			<li><a class="dropdown-item" href="elements-shape-dividers.html">Shape Dividers</a></li>
																			<li><a class="dropdown-item" href="elements-star-ratings.html">Star Ratings</a></li>
																			<li><a class="dropdown-item" href="elements-sticky-elements.html">Sticky Elements</a></li>
																			<li><a class="dropdown-item" href="elements-tables.html">Tables</a></li>
																			<li><a class="dropdown-item" href="elements-tabs.html">Tabs</a></li>
																			<li><a class="dropdown-item" href="elements-testimonials.html">Testimonials</a></li>
																			<li><a class="dropdown-item" href="elements-toggles.html">Toggles</a></li>
																			<li><a class="dropdown-item" href="elements-tooltips-popovers.html">Tooltips & Popovers</a></li>
																			<li><a class="dropdown-item" href="elements-typography.html">Typography</a></li>
																			<li><a class="dropdown-item" href="elements-word-rotator.html">Word Rotator</a></li>
																			<li><a class="dropdown-item" href="elements-360-image-viewer.html">360º Image Viewer</a></li>
																		</ul>
																	</div>
																</div>
															</div>
														</li>
													</ul>
												</li>
												<li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#"> Features </a>
													<ul class="dropdown-menu">
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Headers</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="feature-headers-overview.html">Overview</a></li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Classic</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-headers-classic.html">Classic</a></li>
																		<li><a class="dropdown-item" href="feature-headers-classic-language-dropdown.html">Classic + Language Dropdown</a></li>
																		<li><a class="dropdown-item" href="feature-headers-classic-big-logo.html">Classic + Big Logo</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Flat</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-headers-flat.html">Flat</a></li>
																		<li><a class="dropdown-item" href="feature-headers-flat-top-bar.html">Flat + Top Bar</a></li>
																		<li><a class="dropdown-item" href="feature-headers-flat-top-bar-top-borders.html">Flat + Top Bar + Top Border</a></li>
																		<li><a class="dropdown-item" href="feature-headers-flat-colored-top-bar.html">Flat + Colored Top Bar</a></li>
																		<li><a class="dropdown-item" href="feature-headers-flat-borders.html">Flat + Borders</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Center</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-headers-center.html">Center</a></li>
																		<li><a class="dropdown-item" href="feature-headers-center-double-navs.html">Center + Double Navs</a></li>
																		<li><a class="dropdown-item" href="feature-headers-center-nav-buttons.html">Center + Nav + Buttons</a></li>
																		<li><a class="dropdown-item" href="feature-headers-center-below-slider.html">Center Below Slider</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Floating</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-headers-floating-bar.html">Floating Bar</a></li>
																		<li><a class="dropdown-item" href="feature-headers-floating-icons.html">Floating Icons</a></li>
																	</ul>
																</li>
																<li><a class="dropdown-item" href="feature-headers-below-slider.html">Below Slider</a></li>
																<li><a class="dropdown-item" href="feature-headers-full-video.html">Full Video</a></li>
																<li><a class="dropdown-item" href="feature-headers-narrow.html">Narrow</a></li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Sticky</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-headers-sticky-shrink.html">Sticky Shrink</a></li>
																		<li><a class="dropdown-item" href="feature-headers-sticky-scroll-up.html">Sticky Scroll Up</a></li>
																		<li><a class="dropdown-item" href="feature-headers-sticky-static.html">Sticky Static</a></li>
																		<li><a class="dropdown-item" href="feature-headers-sticky-change-logo.html">Sticky Change Logo</a></li>
																		<li><a class="dropdown-item" href="feature-headers-sticky-reveal.html">Sticky Reveal</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Transparent</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-headers-transparent-light.html">Transparent Light</a></li>
																		<li><a class="dropdown-item" href="feature-headers-transparent-dark.html">Transparent Dark</a></li>
																		<li><a class="dropdown-item" href="feature-headers-transparent-light-bottom-border.html">Transparent Light + Bottom Border</a></li>
																		<li><a class="dropdown-item" href="feature-headers-transparent-dark-bottom-border.html">Transparent Dark + Bottom Border</a></li>
																		<li><a class="dropdown-item" href="feature-headers-transparent-bottom-slider.html">Transparent Bottom Slider</a></li>
																		<li><a class="dropdown-item" href="feature-headers-transparent-top-bar-extra-buttons.html">Transparent Top Bar Extra Buttons</a></li>
																		<li><a class="dropdown-item" href="feature-headers-semi-transparent-light.html">Semi Transparent Light</a></li>
																		<li><a class="dropdown-item" href="feature-headers-semi-transparent-dark.html">Semi Transparent Dark</a></li>
																		<li><a class="dropdown-item" href="feature-headers-semi-transparent-bottom-slider.html">Semi Transparent Bottom Slider</a></li>
																		<li><a class="dropdown-item" href="feature-headers-semi-transparent-top-bar-borders.html">Semi Transparent + Top Bar + Borders</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Full Width</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-headers-full-width.html">Full Width</a></li>
																		<li><a class="dropdown-item" href="feature-headers-full-width-borders.html">Full Width + Borders</a></li>
																		<li><a class="dropdown-item" href="feature-headers-full-width-transparent-light.html">Full Width Transparent Light</a></li>
																		<li><a class="dropdown-item" href="feature-headers-full-width-transparent-dark.html">Full Width Transparent Dark</a></li>
																		<li><a class="dropdown-item" href="feature-headers-full-width-semi-transparent-light.html">Full Width Semi Transparent Light</a></li>
																		<li><a class="dropdown-item" href="feature-headers-full-width-semi-transparent-dark.html">Full Width Semi Transparent Dark</a></li>
																		<li><a class="dropdown-item" href="feature-headers-full-width-2-rows-extra-buttons.html">Full Width 2 Rows + Extra Buttons</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Navbar</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-headers-navbar.html">Navbar</a></li>
																		<li><a class="dropdown-item" href="feature-headers-navbar-full.html">Navbar Full</a></li>
																		<li><a class="dropdown-item" href="feature-headers-navbar-pills.html">Navbar Pills</a></li>
																		<li><a class="dropdown-item" href="feature-headers-navbar-divisors.html">Navbar Divisors</a></li>
																		<li><a class="dropdown-item" href="feature-headers-navbar-icons-search.html">Nav Bar + Icons + Search</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Side Header</a>
																	<ul class="dropdown-menu">
																		<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Side Header Left</a>
																			<ul class="dropdown-menu">
																				<li><a class="dropdown-item" href="feature-headers-side-header-left-dropdown.html">Dropdown</a></li>
																				<li><a class="dropdown-item" href="feature-headers-side-header-left-expand.html">Expand</a></li>
																				<li><a class="dropdown-item" href="feature-headers-side-header-left-columns.html">Columns</a></li>
																				<li><a class="dropdown-item" href="feature-headers-side-header-left-slide.html">Slide</a></li>
																				<li><a class="dropdown-item" href="feature-headers-side-header-left-semi-transparent.html">Semi Transparent</a></li>
																				<li><a class="dropdown-item" href="feature-headers-side-header-left-dark.html">Dark</a></li>
																			</ul>
																		</li>
																		<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Side Header Right</a>
																			<ul class="dropdown-menu">
																				<li><a class="dropdown-item" href="feature-headers-side-header-right-dropdown.html">Dropdown</a></li>
																				<li><a class="dropdown-item" href="feature-headers-side-header-right-expand.html">Expand</a></li>
																				<li><a class="dropdown-item" href="feature-headers-side-header-right-columns.html">Columns</a></li>
																				<li><a class="dropdown-item" href="feature-headers-side-header-right-slide.html">Slide</a></li>
																				<li><a class="dropdown-item" href="feature-headers-side-header-right-semi-transparent.html">Semi Transparent</a></li>
																				<li><a class="dropdown-item" href="feature-headers-side-header-right-dark.html">Dark</a></li>
																			</ul>
																		</li>
																		<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Side Header Offcanvas</a>
																			<ul class="dropdown-menu">
																				<li><a class="dropdown-item" href="feature-headers-side-header-offcanvas-push.html">Push</a></li>
																				<li><a class="dropdown-item" href="feature-headers-side-header-offcanvas-slide.html">Slide</a></li>
																			</ul>
																		</li>
																		<li><a class="dropdown-item" href="feature-headers-side-header-narrow-bar.html">Side Header Narrow Bar</a></li>
																	</ul>
																</li>
																<li><a class="dropdown-item" href="feature-headers-sign-in-sign-up.html">Sign In / Sign Up</a></li>
																<li><a class="dropdown-item" href="feature-headers-logged.html">Logged</a></li>
																<li><a class="dropdown-item" href="feature-headers-mini-cart.html">Mini Cart</a></li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Search Styles</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-headers-search-simple-input.html">Simple Input</a></li>
																		<li><a class="dropdown-item" href="feature-headers-search-simple-input-reveal.html">Simple Input Reveal</a></li>
																		<li><a class="dropdown-item" href="feature-headers-search-dropdown.html">Dropdown</a></li>
																		<li><a class="dropdown-item" href="feature-headers-search-big-input-hidden.html">Big Input Hidden</a></li>
																		<li><a class="dropdown-item" href="feature-headers-search-full-screen.html">Full Screen</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Extra</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-headers-extra-big-icon.html">Big Icon</a></li>
																		<li><a class="dropdown-item" href="feature-headers-extra-big-icons-top.html">Big Icons Top</a></li>
																		<li><a class="dropdown-item" href="feature-headers-extra-button.html">Button</a></li>
																		<li><a class="dropdown-item" href="feature-headers-extra-background-color.html">Background Color</a></li>
																	</ul>
																</li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Navigations</a>
															<ul class="dropdown-menu">
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Pills</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-navigations-pills.html">Pills</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-pills-arrows.html">Pills + Arrows</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-pills-dark-text.html">Pills Dark Text</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-pills-color-dropdown.html">Pills Color Dropdown</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-pills-square.html">Pills Square</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-pills-rounded.html">Pills Rounded</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Stripes</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-navigations-stripe.html">Stripe</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-stripe-dark-text.html">Stripe Dark Text</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-stripe-color-dropdown.html">Stripe Color Dropdown</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Hover Effects</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-navigations-hover-top-line.html">Top Line</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-hover-top-line-animated.html">Top Line Animated</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-hover-top-line-color-dropdown.html">Top Line Color Dropdown</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-hover-bottom-line.html">Bottom Line</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-hover-bottom-line-animated.html">Bottom Line Animated</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-hover-slide.html">Slide</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-hover-sub-title.html">Sub Title</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-hover-line-under-text.html">Line Under Text</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Vertical</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-navigations-vertical-dropdown.html">Dropdown</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-vertical-expand.html">Expand</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-vertical-columns.html">Columns</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-vertical-slide.html">Slide</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Hamburguer</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-navigations-hamburguer-sidebar.html">Sidebar</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-hamburguer-overlay.html">Overlay</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Dropdown Styles</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-navigations-dropdowns-dark.html">Dark</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-dropdowns-light.html">Light</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-dropdowns-colors.html">Colors</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-dropdowns-top-line.html">Top Line</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-dropdowns-square.html">Square</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-dropdowns-arrow.html">Arrow Dropdown</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-dropdowns-arrow-center.html">Arrow Center Dropdown</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-dropdowns-modern-light.html">Modern Light</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-dropdowns-modern-dark.html">Modern Dark</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Dropdown Effects</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-no-effect.html">No Effect</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-opacity.html">Opacity</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-top.html">Move To Top</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-bottom.html">Move To Bottom</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-right.html">Move To Right</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-dropdowns-effect-move-to-left.html">Move To Left</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Font Styles</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-navigations-font-small.html">Small</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-font-medium.html">Medium</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-font-large.html">Large</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-font-alternative.html">Alternative</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Icons</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-navigations-icons.html">Icons</a></li>
																		<li><a class="dropdown-item" href="feature-navigations-icons-float-icons.html">Float Icons</a></li>
																	</ul>
																</li>
																<li><a class="dropdown-item" href="feature-navigations-sub-title.html">Sub Title</a></li>
																<li><a class="dropdown-item" href="feature-navigations-divisors.html">Divisors</a></li>
																<li><a class="dropdown-item" href="feature-navigations-logo-between.html">Logo Between</a></li>
																<li><a class="dropdown-item" href="feature-navigations-one-page.html">One Page Nav</a></li>
																<li><a class="dropdown-item" href="feature-navigations-click-to-open.html">Click To Open</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Page Headers</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="feature-page-headers-overview.html">Overview</a></li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Classic</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-page-headers-classic-small.html">Small</a></li>
																		<li><a class="dropdown-item" href="feature-page-headers-classic-medium.html">Medium</a></li>
																		<li><a class="dropdown-item" href="feature-page-headers-classic-large.html">Large</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Modern</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-page-headers-modern-small.html">Small</a></li>
																		<li><a class="dropdown-item" href="feature-page-headers-modern-medium.html">Medium</a></li>
																		<li><a class="dropdown-item" href="feature-page-headers-modern-large.html">Large</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Colors</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-page-headers-colors-primary.html">Primary</a></li>
																		<li><a class="dropdown-item" href="feature-page-headers-colors-secondary.html">Secondary</a></li>
																		<li><a class="dropdown-item" href="feature-page-headers-colors-tertiary.html">Tertiary</a></li>
																		<li><a class="dropdown-item" href="feature-page-headers-colors-quaternary.html">Quaternary</a></li>
																		<li><a class="dropdown-item" href="feature-page-headers-colors-light.html">Light</a></li>
																		<li><a class="dropdown-item" href="feature-page-headers-colors-dark.html">Dark</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Title Position</a>
																	<ul class="dropdown-menu">
																		<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Left</a>
																			<ul class="dropdown-menu">
																				<li><a class="dropdown-item" href="feature-page-headers-title-position-left-small.html">Small</a></li>
																				<li><a class="dropdown-item" href="feature-page-headers-title-position-left-medium.html">Medium</a></li>
																				<li><a class="dropdown-item" href="feature-page-headers-title-position-left-large.html">Large</a></li>
																			</ul>
																		</li>
																		<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Right</a>
																			<ul class="dropdown-menu">
																				<li><a class="dropdown-item" href="feature-page-headers-title-position-right-small.html">Small</a></li>
																				<li><a class="dropdown-item" href="feature-page-headers-title-position-right-medium.html">Medium</a></li>
																				<li><a class="dropdown-item" href="feature-page-headers-title-position-right-large.html">Large</a></li>
																			</ul>
																		</li>
																		<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Center</a>
																			<ul class="dropdown-menu">
																				<li><a class="dropdown-item" href="feature-page-headers-title-position-center-small.html">Small</a></li>
																				<li><a class="dropdown-item" href="feature-page-headers-title-position-center-medium.html">Medium</a></li>
																				<li><a class="dropdown-item" href="feature-page-headers-title-position-center-large.html">Large</a></li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Background</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-page-headers-background-fixed.html">Fixed</a></li>
																		<li><a class="dropdown-item" href="feature-page-headers-background-parallax.html">Parallax</a></li>
																		<li><a class="dropdown-item" href="feature-page-headers-background-video.html">Video</a></li>
																		<li><a class="dropdown-item" href="feature-page-headers-background-transparent-header.html">Transparent Header</a></li>
																		<li><a class="dropdown-item" href="feature-page-headers-background-pattern.html">Pattern</a></li>
																		<li><a class="dropdown-item" href="feature-page-headers-background-overlay.html">Overlay</a></li>
																		<li><a class="dropdown-item" href="feature-page-headers-background-clean.html">Clean (No Background)</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Extra</a>
																	<ul class="dropdown-menu">
																		<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Breadcrumb</a>
																			<ul class="dropdown-menu">
																				<li><a class="dropdown-item" href="feature-page-headers-extra-breadcrumb-outside.html">Outside</a></li>
																				<li><a class="dropdown-item" href="feature-page-headers-extra-breadcrumb-dark.html">Dark</a></li>
																			</ul>
																		</li>
																		<li><a class="dropdown-item" href="feature-page-headers-extra-scroll-to-content.html">Scroll to Content</a></li>
																		<li><a class="dropdown-item" href="feature-page-headers-extra-full-width.html">Full Width</a></li>
																		<li><a class="dropdown-item" href="feature-page-headers-extra-product.html">Product</a></li>
																		<li><a class="dropdown-item" href="feature-page-headers-extra-mouse-hover-split.html">Mouse Hover Split</a></li>
																	</ul>
																</li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Footers</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="feature-footers-overview.html">Overview</a></li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Classic</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-footers-classic.html#footer">Classic</a></li>
																		<li><a class="dropdown-item" href="feature-footers-classic-advanced.html#footer">Advanced</a></li>
																		<li><a class="dropdown-item" href="feature-footers-classic-compact.html#footer">Compact</a></li>
																		<li><a class="dropdown-item" href="feature-footers-classic-simple.html#footer">Simple</a></li>
																		<li><a class="dropdown-item" href="feature-footers-classic-locations.html#footer">Locations</a></li>
																		<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Copyright</a>
																			<ul class="dropdown-menu">
																				<li><a class="dropdown-item" href="feature-footers-classic-copyright-light.html#footer">Light</a></li>
																				<li><a class="dropdown-item" href="feature-footers-classic-copyright-dark.html#footer">Dark</a></li>
																				<li><a class="dropdown-item" href="feature-footers-classic-copyright-social-icons.html#footer">Social Icons</a></li>
																			</ul>
																		</li>
																		<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Colors</a>
																			<ul class="dropdown-menu">
																				<li><a class="dropdown-item" href="feature-footers-classic-colors-primary.html#footer">Primary</a></li>
																				<li><a class="dropdown-item" href="feature-footers-classic-colors-secondary.html#footer">Secondary</a></li>
																				<li><a class="dropdown-item" href="feature-footers-classic-colors-tertiary.html#footer">Tertiary</a></li>
																				<li><a class="dropdown-item" href="feature-footers-classic-colors-quaternary.html#footer			">Quaternary</a></li>
																				<li><a class="dropdown-item" href="feature-footers-classic-colors-light.html#footer">Light</a></li>
																				<li><a class="dropdown-item" href="feature-footers-classic-colors-light-simple.html#footer">Light Simple</a></li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Modern</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-footers-modern.html#footer">Modern</a></li>
																		<li><a class="dropdown-item" href="feature-footers-modern-font-style-alternative.html#footer">Font Style Alternative</a></li>
																		<li><a class="dropdown-item" href="feature-footers-modern-clean.html#footer">Clean</a></li>
																		<li><a class="dropdown-item" href="feature-footers-modern-useful-links.html#footer">Useful Links</a></li>
																		<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Background</a>
																			<ul class="dropdown-menu">
																				<li><a class="dropdown-item" href="feature-footers-modern-background-image-simple.html#footer">Image Simple</a></li>
																				<li><a class="dropdown-item" href="feature-footers-modern-background-image-advanced.html#footer">Image Advanced</a></li>
																				<li><a class="dropdown-item" href="feature-footers-modern-background-video-simple.html#footer">Video Simple</a></li>
																			</ul>
																		</li>
																		<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Call to Action</a>
																			<ul class="dropdown-menu">
																				<li><a class="dropdown-item" href="feature-footers-modern-call-to-action-button.html#footer">Button</a></li>
																				<li><a class="dropdown-item" href="feature-footers-modern-call-to-action-simple.html#footer">Simple</a></li>
																			</ul>
																		</li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Blog</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-footers-blog-classic.html#footer">Blog Classic</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">eCommerce</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-footers-ecommerce-classic.html#footer">eCommerce Classic</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Contact Form</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-footers-contact-form-classic.html#footer">Classic</a></li>
																		<li><a class="dropdown-item" href="feature-footers-contact-form-above-the-map.html#footer">Above the Map</a></li>
																		<li><a class="dropdown-item" href="feature-footers-contact-form-center.html#footer">Center</a></li>
																		<li><a class="dropdown-item" href="feature-footers-contact-form-columns.html#footer">Columns</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Map</a>
																	<ul class="dropdown-menu">
																		<li><a class="dropdown-item" href="feature-footers-map-hidden.html#footer">Hidden Map</a></li>
																		<li><a class="dropdown-item" href="feature-footers-map-full-width.html#footer">Full Width</a></li>
																	</ul>
																</li>
																<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Extra</a>
																	<ul class="dropdown-menu">
																		<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Simple</a>
																			<ul class="dropdown-menu">
																				<li><a class="dropdown-item" href="feature-footers-extra-top-social-icons.html#footer">Top Social Icons</a></li>
																				<li><a class="dropdown-item" href="feature-footers-extra-big-icons.html#footer">Big Icons</a></li>
																			</ul>
																		</li>
																		<li><a class="dropdown-item" href="feature-footers-extra-recent-work.html#footer">Recent Work</a></li>
																		<li><a class="dropdown-item" href="feature-footers-extra-reveal.html#footeranchor">Reveal</a></li>
																		<li><a class="dropdown-item" href="feature-footers-extra-instagram.html#footer">Instagram</a></li>
																		<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Full Width</a>
																			<ul class="dropdown-menu">
																				<li><a class="dropdown-item" href="feature-footers-extra-full-width-light.html#footer">Simple Light</a></li>
																				<li><a class="dropdown-item" href="feature-footers-extra-full-width-dark.html#footer">Simple Dark</a></li>
																			</ul>
																		</li>
																	</ul>
																</li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Admin Extension <span class="tip tip-dark">hot</span><em class="not-included">(Not Included)</em></a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="feature-admin-forms-basic.html">Forms Basic</a></li>
																<li><a class="dropdown-item" href="feature-admin-forms-advanced.html">Forms Advanced</a></li>
																<li><a class="dropdown-item" href="feature-admin-forms-wizard.html">Forms Wizard</a></li>
																<li><a class="dropdown-item" href="feature-admin-forms-code-editor.html">Code Editor</a></li>
																<li><a class="dropdown-item" href="feature-admin-tables-advanced.html">Tables Advanced</a></li>
																<li><a class="dropdown-item" href="feature-admin-tables-responsive.html">Tables Responsive</a></li>
																<li><a class="dropdown-item" href="feature-admin-tables-editable.html">Tables Editable</a></li>
																<li><a class="dropdown-item" href="feature-admin-tables-ajax.html">Tables Ajax</a></li>
																<li><a class="dropdown-item" href="feature-admin-charts.html">Charts</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Sliders</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="../user/index-slider-revolution.html">Revolution Slider</a></li>
																<li><a class="dropdown-item" href="../user/index-slider-owl.html">Owl Slider</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Layout Options</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="feature-layout-boxed.html">Boxed</a></li>
																<li><a class="dropdown-item" href="feature-layout-dark.html">Dark</a></li>
																<li><a class="dropdown-item" href="feature-layout-rtl.html">RTL</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Extra</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="feature-cursor-effect.html">Cursor Effect</a></li>
																<li><a class="dropdown-item" href="feature-grid-system.html">Grid System</a></li>
																<li><a class="dropdown-item" href="feature-reading-progress.html">Reading Progress</a></li>
																<li><a class="dropdown-item" href="feature-lazy-load.html">Lazy Load</a></li>
																<li><a class="dropdown-item" href="feature-page-loading.html">Page Loading</a></li>
																<li><a class="dropdown-item" href="feature-page-transition.html">Page Transition</a></li>
																<li><a class="dropdown-item" href="feature-side-panel.html">Side Panel</a></li>
															</ul>
														</li>
														<li> <a class="dropdown-item" href="feature-gdpr.html">GDPR</a> </li>
													</ul>
												</li>
												<li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#"> Pages </a>
													<ul class="dropdown-menu">
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Contact Us</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="contact-us-advanced.html">Contact Us - Advanced</a></li>
																<li><a class="dropdown-item" href="contact-us.html">Contact Us - Basic</a></li>
																<li><a class="dropdown-item" href="contact-us-recaptcha.html">Contact Us - Recaptcha</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">About Us</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="about-us-advanced.html">About Us - Advanced</a></li>
																<li><a class="dropdown-item" href="about-us.html">About Us - Basic</a></li>
																<li><a class="dropdown-item" href="about-me.html">About Me</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Layouts</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="page-full-width.html">Full Width</a></li>
																<li><a class="dropdown-item" href="page-left-sidebar.html">Left Sidebar</a></li>
																<li><a class="dropdown-item" href="page-right-sidebar.html">Right Sidebar</a></li>
																<li><a class="dropdown-item" href="page-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
																<li><a class="dropdown-item" href="page-sticky-sidebar.html">Sticky Sidebar</a></li>
																<li><a class="dropdown-item" href="page-secondary-navbar.html">Secondary Navbar</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Extra</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="page-404.html">404 Error</a></li>
																<li><a class="dropdown-item" href="page-500.html">500 Error</a></li>
																<li><a class="dropdown-item" href="page-coming-soon.html">Coming Soon</a></li>
																<li><a class="dropdown-item" href="page-maintenance-mode.html">Maintenance Mode</a></li>
																<li><a class="dropdown-item" href="page-search-results.html">Search Results</a></li>
																<li><a class="dropdown-item" href="sitemap.html">Sitemap</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Team</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="page-team-advanced.html">Team - Advanced</a></li>
																<li><a class="dropdown-item" href="page-team.html">Team - Basic</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Services</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="page-services.html">Services - Version 1</a></li>
																<li><a class="dropdown-item" href="page-services-2.html">Services - Version 2</a></li>
																<li><a class="dropdown-item" href="page-services-3.html">Services - Version 3</a></li>
															</ul>
														</li>
														<li><a class="dropdown-item" href="page-careers.html">Careers</a></li>
														<li><a class="dropdown-item" href="page-faq.html">FAQ</a></li>
														<li><a class="dropdown-item" href="page-login.html">Login / Register</a></li>
														<li><a class="dropdown-item" href="page-user-profile.html">User Profile</a></li>
													</ul>
												</li>
												<li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#"> Portfolio </a>
													<ul class="dropdown-menu">
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Single Project</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="portfolio-single-wide-slider.html">Wide Slider</a></li>
																<li><a class="dropdown-item" href="portfolio-single-small-slider.html">Small Slider</a></li>
																<li><a class="dropdown-item" href="portfolio-single-full-width-slider.html">Full Width Slider</a></li>
																<li><a class="dropdown-item" href="portfolio-single-gallery.html">Gallery</a></li>
																<li><a class="dropdown-item" href="portfolio-single-carousel.html">Carousel</a></li>
																<li><a class="dropdown-item" href="portfolio-single-medias.html">Medias</a></li>
																<li><a class="dropdown-item" href="portfolio-single-full-width-video.html">Full Width Video</a></li>
																<li><a class="dropdown-item" href="portfolio-single-masonry-images.html">Masonry Images</a></li>
																<li><a class="dropdown-item" href="portfolio-single-left-sidebar.html">Left Sidebar</a></li>
																<li><a class="dropdown-item" href="portfolio-single-right-sidebar.html">Right Sidebar</a></li>
																<li><a class="dropdown-item" href="portfolio-single-left-and-right-sidebars.html">Left and Right Sidebars</a></li>
																<li><a class="dropdown-item" href="portfolio-single-sticky-sidebar.html">Sticky Sidebar</a></li>
																<li><a class="dropdown-item" href="portfolio-single-extended.html">Extended</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Grid Layouts</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="portfolio-grid-1-column.html">1 Column</a></li>
																<li><a class="dropdown-item" href="portfolio-grid-2-columns.html">2 Columns</a></li>
																<li><a class="dropdown-item" href="portfolio-grid-3-columns.html">3 Columns</a></li>
																<li><a class="dropdown-item" href="portfolio-grid-4-columns.html">4 Columns</a></li>
																<li><a class="dropdown-item" href="portfolio-grid-5-columns.html">5 Columns</a></li>
																<li><a class="dropdown-item" href="portfolio-grid-6-columns.html">6 Columns</a></li>
																<li><a class="dropdown-item" href="portfolio-grid-no-margins.html">No Margins</a></li>
																<li><a class="dropdown-item" href="portfolio-grid-full-width.html">Full Width</a></li>
																<li><a class="dropdown-item" href="portfolio-grid-full-width-no-margins.html">Full Width No Margins</a></li>
																<li><a class="dropdown-item" href="portfolio-grid-1-column-title-and-description.html">Title and Description</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Masonry Layouts</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="portfolio-masonry-2-columns.html">2 Columns</a></li>
																<li><a class="dropdown-item" href="portfolio-masonry-3-columns.html">3 Columns</a></li>
																<li><a class="dropdown-item" href="portfolio-masonry-4-columns.html">4 Columns</a></li>
																<li><a class="dropdown-item" href="portfolio-masonry-5-columns.html">5 Columns</a></li>
																<li><a class="dropdown-item" href="portfolio-masonry-6-columns.html">6 Columns</a></li>
																<li><a class="dropdown-item" href="portfolio-masonry-no-margins.html">No Margins</a></li>
																<li><a class="dropdown-item" href="portfolio-masonry-full-width.html">Full Width</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Sidebar Layouts</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="portfolio-sidebar-left.html">Left Sidebar</a></li>
																<li><a class="dropdown-item" href="portfolio-sidebar-right.html">Right Sidebar</a></li>
																<li><a class="dropdown-item" href="portfolio-sidebar-left-and-right.html">Left and Right Sidebars</a></li>
																<li><a class="dropdown-item" href="portfolio-sidebar-sticky.html">Sticky Sidebar</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Ajax</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="portfolio-ajax-page.html">Ajax on Page</a></li>
																<li><a class="dropdown-item" href="portfolio-ajax-modal.html">Ajax on Modal</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Extra</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="portfolio-extra-timeline.html">Timeline</a></li>
																<li><a class="dropdown-item" href="portfolio-extra-lightbox.html">Lightbox</a></li>
																<li><a class="dropdown-item" href="portfolio-extra-load-more.html">Load More</a></li>
																<li><a class="dropdown-item" href="portfolio-extra-infinite-scroll.html">Infinite Scroll</a></li>
																<li><a class="dropdown-item" href="portfolio-extra-lazy-load-masonry.html">Lazy Load Masonry</a></li>
																<li><a class="dropdown-item" href="portfolio-extra-pagination.html">Pagination</a></li>
																<li><a class="dropdown-item" href="portfolio-extra-combination-filters.html">Combination Filters</a></li>
															</ul>
														</li>
													</ul>
												</li>
												<li class="dropdown"> <a class="dropdown-item dropdown-toggle active" href="#"> Blog </a>
													<ul class="dropdown-menu">
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Large Image</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="blog-large-image-full-width.html">Full Width</a></li>
																<li><a class="dropdown-item" href="blog-large-image-sidebar-left.html">Left Sidebar</a></li>
																<li><a class="dropdown-item" href="blog-large-image-sidebar-right.html">Right Sidebar </a></li>
																<li><a class="dropdown-item" href="blog-large-image-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Medium Image</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="blog-medium-image-sidebar-left.html">Left Sidebar</a></li>
																<li><a class="dropdown-item" href="blog-medium-image-sidebar-right.html">Right Sidebar </a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Grid</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="blog-grid-4-columns.html">4 Columns</a></li>
																<li><a class="dropdown-item" href="blog-grid-3-columns.html">3 Columns</a></li>
																<li><a class="dropdown-item" href="blog-grid-full-width.html">Full Width</a></li>
																<li><a class="dropdown-item" href="blog-grid-no-margins.html">No Margins</a></li>
																<li><a class="dropdown-item" href="blog-grid-no-margins-full-width.html">No Margins Full Width</a></li>
																<li><a class="dropdown-item" href="blog-grid-sidebar-left.html">Left Sidebar</a></li>
																<li><a class="dropdown-item" href="blog-grid-sidebar-right.html">Right Sidebar </a></li>
																<li><a class="dropdown-item" href="blog-grid-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Masonry</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="blog-masonry-4-columns.html">4 Columns</a></li>
																<li><a class="dropdown-item" href="blog-masonry-3-columns.html">3 Columns</a></li>
																<li><a class="dropdown-item" href="blog-masonry-full-width.html">Full Width</a></li>
																<li><a class="dropdown-item" href="blog-masonry-no-margins.html">No Margins</a></li>
																<li><a class="dropdown-item" href="blog-masonry-no-margins-full-width.html">No Margins Full Width</a></li>
																<li><a class="dropdown-item" href="blog-masonry-sidebar-left.html">Left Sidebar</a></li>
																<li><a class="dropdown-item" href="blog-masonry-sidebar-right.html">Right Sidebar </a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Timeline</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="blog-timeline.html">Full Width</a></li>
																<li><a class="dropdown-item" href="blog-timeline-sidebar-left.html">Left Sidebar</a></li>
																<li><a class="dropdown-item" href="blog-timeline-sidebar-right.html">Right Sidebar </a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Single Post</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="blog-post.html">Full Width</a></li>
																<li><a class="dropdown-item" href="blog-post-slider-gallery.html">Slider Gallery</a></li>
																<li><a class="dropdown-item" href="blog-post-image-gallery.html">Image Gallery</a></li>
																<li><a class="dropdown-item" href="blog-post-embedded-video.html">Embedded Video</a></li>
																<li><a class="dropdown-item" href="blog-post-html5-video.html">HTML5 Video</a></li>
																<li><a class="dropdown-item" href="blog-post-blockquote.html">Blockquote</a></li>
																<li><a class="dropdown-item" href="blog-post-link.html">Link</a></li>
																<li><a class="dropdown-item" href="blog-post-embedded-audio.html">Embedded Audio</a></li>
																<li><a class="dropdown-item" href="blog-post-small-image.html">Small Image</a></li>
																<li><a class="dropdown-item" href="blog-post-sidebar-left.html">Left Sidebar</a></li>
																<li><a class="dropdown-item" href="blog-post-sidebar-right.html">Right Sidebar </a></li>
																<li><a class="dropdown-item" href="blog-post-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Post Comments</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="blog-post.html#comments">Default</a></li>
																<li><a class="dropdown-item" href="blog-post-comments-facebook.html#comments">Facebook Comments</a></li>
																<li><a class="dropdown-item" href="blog-post-comments-disqus.html#comments">Disqus Comments</a></li>
															</ul>
														</li>
													</ul>
												</li>
												<li class="dropdown"> <a class="dropdown-item dropdown-toggle" href="#"> Shop </a>
													<ul class="dropdown-menu">
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">Single Product</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="shop-product-full-width.html">Full Width</a></li>
																<li><a class="dropdown-item" href="shop-product-sidebar-left.html">Left Sidebar</a></li>
																<li><a class="dropdown-item" href="shop-product-sidebar-right.html">Right Sidebar</a></li>
																<li><a class="dropdown-item" href="shop-product-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
															</ul>
														</li>
														<li><a class="dropdown-item" href="shop-4-columns.html">4 Columns</a></li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">3 Columns</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="shop-3-columns-full-width.html">Full Width</a></li>
																<li><a class="dropdown-item" href="shop-3-columns-sidebar-left.html">Left Sidebar</a></li>
																<li><a class="dropdown-item" href="shop-3-columns-sidebar-right.html">Right Sidebar </a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">2 Columns</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="shop-2-columns-full-width.html">Full Width</a></li>
																<li><a class="dropdown-item" href="shop-2-columns-sidebar-left.html">Left Sidebar</a></li>
																<li><a class="dropdown-item" href="shop-2-columns-sidebar-right.html">Right Sidebar </a></li>
																<li><a class="dropdown-item" href="shop-2-columns-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
															</ul>
														</li>
														<li class="dropdown-submenu"> <a class="dropdown-item" href="#">1 Column</a>
															<ul class="dropdown-menu">
																<li><a class="dropdown-item" href="shop-1-column-full-width.html">Full Width</a></li>
																<li><a class="dropdown-item" href="shop-1-column-sidebar-left.html">Left Sidebar</a></li>
																<li><a class="dropdown-item" href="shop-1-column-sidebar-right.html">Right Sidebar </a></li>
																<li><a class="dropdown-item" href="shop-1-column-sidebar-left-and-right.html">Left and Right Sidebar</a></li>
															</ul>
														</li>
														<li><a class="dropdown-item" href="shop-cart.html">Cart</a></li>
														<li><a class="dropdown-item" href="shop-login.html">Login</a></li>
														<li><a class="dropdown-item" href="shop-checkout.html">Checkout</a></li>
														<li><a class="dropdown-item" href="shop-order-complete.html">Order Complete</a></li>
													</ul>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
						<div class="header-column header-column-border-left flex-grow-0 justify-content-center">
							<div class="header-row ps-4 justify-content-end">
								<ul class="header-social-icons social-icons d-none d-sm-block social-icons-clean m-0">
									<li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
									<li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
								</ul>
								<button class="btn header-btn-collapse-nav ms-0 ms-sm-3" data-bs-toggle="collapse" data-bs-target=".header-nav-main nav">
									<i class="fas fa-bars"></i>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div role="main" class="main">

			<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md">
				<div class="container">
					<div class="row">
						<div class="col-md-12 align-self-center p-static order-2 text-center">
							<h1 class="text-dark font-weight-bold text-8">Post Image Gallery</h1> <span class="sub-title text-dark">Check out our Latest News!</span>
						</div>
						<div class="col-md-12 align-self-center order-1">
							<ul class="breadcrumb d-block text-center">
								<li><a href="#">Home</a></li>
								<li class="active">Blog</li>
							</ul>
						</div>
					</div>
				</div>
			</section>

			<div class="container py-4">

				<div class="row">
					<div class="col">
						<div class="blog-posts single-post">

							<article class="post post-large blog-single-post border-0 m-0 p-0">
								<div class="post-image ms-0">
									<div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
										<div class="row mx-0">
											<div class="col-6 col-md-4 p-0">
												<a href="img/blog/square/blog-13.jpg">
													<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
														<span class="thumb-info-wrapper">
															<img src="img/blog/square/blog-13.jpg" class="img-fluid" alt="" />
															<span class="thumb-info-action">
																<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
															</span>
														</span>
													</span>
												</a>
											</div>
											<div class="col-6 col-md-4 p-0">
												<a href="img/blog/square/blog-16.jpg">
													<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
														<span class="thumb-info-wrapper">
															<img src="img/blog/square/blog-16.jpg" class="img-fluid" alt="" />
															<span class="thumb-info-action">
																<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
															</span>
														</span>
													</span>
												</a>
											</div>
											<div class="col-6 col-md-4 p-0">
												<a href="img/blog/square/blog-20.jpg">
													<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
														<span class="thumb-info-wrapper">
															<img src="img/blog/square/blog-20.jpg" class="img-fluid" alt="" />
															<span class="thumb-info-action">
																<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
															</span>
														</span>
													</span>
												</a>
											</div>
											<div class="col-6 col-md-4 p-0">
												<a href="img/blog/square/blog-23.jpg">
													<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
														<span class="thumb-info-wrapper">
															<img src="img/blog/square/blog-23.jpg" class="img-fluid" alt="" />
															<span class="thumb-info-action">
																<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
															</span>
														</span>
													</span>
												</a>
											</div>
											<div class="col-6 col-md-4 p-0">
												<a href="img/blog/square/blog-29.jpg">
													<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
														<span class="thumb-info-wrapper">
															<img src="img/blog/square/blog-29.jpg" class="img-fluid" alt="" />
															<span class="thumb-info-action">
																<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
															</span>
														</span>
													</span>
												</a>
											</div>
											<div class="col-6 col-md-4 p-0">
												<a href="img/blog/square/blog-40.jpg">
													<span class="thumb-info thumb-info-no-borders thumb-info-centered-icons">
														<span class="thumb-info-wrapper">
															<img src="img/blog/square/blog-40.jpg" class="img-fluid" alt="" />
															<span class="thumb-info-action">
																<span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-plus text-dark"></i></span>
															</span>
														</span>
													</span>
												</a>
											</div>
										</div>
									</div>
								</div>

								<div class="post-date ms-0">
									<span class="day">10</span>
									<span class="month">Jan</span>
								</div>

								<div class="post-content ms-0">

									<h2 class="font-weight-semi-bold"><a href="blog-post.html">Class aptent taciti sociosqu ad litora torquent</a></h2>

									<div class="post-meta">
										<span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
										<span><i class="far fa-folder"></i> <a href="#">Lifestyle</a>, <a href="#">Design</a> </span>
										<span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
									</div>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur lectus lacus, rutrum sit amet placerat et, bibendum nec mauris. Duis molestie, purus eget placerat viverra, nisi odio gravida sapien, congue tincidunt nisl ante nec tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce sagittis, massa fringilla consequat blandit, mauris ligula porta nisi, non tristique enim sapien vel nisl. Suspendisse vestibulum lobortis dapibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Praesent nec tempus nibh. Donec mollis commodo metus et fringilla. Etiam venenatis, diam id adipiscing convallis, nisi eros lobortis tellus, feugiat adipiscing ante ante sit amet dolor. Vestibulum vehicula scelerisque facilisis. Sed faucibus placerat bibendum. Maecenas sollicitudin commodo justo, quis hendrerit leo consequat ac. Proin sit amet risus sapien, eget interdum dui. Proin justo sapien, varius sit amet hendrerit id, egestas quis mauris.</p>
									<p>Ut ac elit non mi pharetra dictum nec quis nibh. Pellentesque ut fringilla elit. Aliquam non ipsum id leo eleifend sagittis id a lorem. Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aliquam massa mauris, viverra et rhoncus a, feugiat ut sem. Quisque ultricies diam tempus quam molestie vitae sodales dolor sagittis. Praesent commodo sodales purus. Maecenas scelerisque ligula vitae leo adipiscing a facilisis nisl ullamcorper. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;</p>
									<p>Curabitur non erat quam, id volutpat leo. Nullam pretium gravida urna et interdum. Suspendisse in dui tellus. Cras luctus nisl vel risus adipiscing aliquet. Phasellus convallis lorem dui. Quisque hendrerit, lectus ut accumsan gravida, leo tellus porttitor mi, ac mattis eros nunc vel enim. Nulla facilisi. Nam non nulla sed nibh sodales auctor eget non augue. Pellentesque sollicitudin consectetur mauris, eu mattis mi dictum ac. Etiam et sapien eu nisl dapibus fermentum et nec tortor.</p>
									<p>Curabitur nec nulla lectus, non hendrerit lorem. Quisque lorem risus, porttitor eget fringilla non, vehicula sed tortor. Proin enim quam, vulputate at lobortis quis, condimentum at justo. Phasellus nec nisi justo. Ut luctus sagittis nulla at dapibus. Aliquam ullamcorper commodo elit, quis ornare eros consectetur a. Curabitur nulla dui, fermentum sed dapibus at, adipiscing eget nisi. Aenean iaculis vehicula imperdiet. Donec suscipit leo sed metus vestibulum pulvinar. Phasellus bibendum magna nec tellus fringilla faucibus. Phasellus mollis scelerisque volutpat. Ut sed molestie turpis. Phasellus ultrices suscipit tellus, ac vehicula ligula condimentum et.</p>
									<p>Aenean metus nibh, molestie at consectetur nec, molestie sed nulla. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec euismod urna. Donec gravida pharetra ipsum, non volutpat ipsum sagittis a. Phasellus ut convallis ipsum. Sed nec dui orci, nec hendrerit massa. Curabitur at risus suscipit massa varius accumsan. Proin eu nisi id velit ultrices viverra nec condimentum magna. Ut porta orci quis nulla aliquam at dictum mi viverra. Maecenas ultricies elit in tortor scelerisque facilisis. Mauris vehicula porttitor lacus, vel pretium est semper non. Ut accumsan rhoncus metus non pharetra. Quisque luctus blandit nisi, id tempus tellus pulvinar eu. Nam ornare laoreet mi a molestie. Donec sodales scelerisque congue. </p>

									<div class="post-block mt-5 post-share">
										<h4 class="mb-3">Share this Post</h4>

										<!-- Go to www.addthis.com/dashboard to customize your tools -->
										<div class="addthis_inline_share_toolbox"></div>
										<script type="text/javascript" src="../../../../s7.addthis.com/js/300/addthis_widget.js#pubid=ra-60ba220dbab331b0"></script>

									</div>

									<div class="post-block mt-4 pt-2 post-author">
										<h4 class="mb-3">Author</h4>
										<div class="img-thumbnail img-thumbnail-no-borders d-block pb-3">
											<a href="blog-post.html">
												<img src="img/avatars/avatar.jpg" alt="">
											</a>
										</div>
										<p><strong class="name"><a href="#" class="text-4 pb-2 pt-2 d-block">John Doe</a></strong></p>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui. </p>
									</div>
									<div id="comments" class="post-block mt-5 post-comments">
										<h4 class="mb-3">Comments (3)</h4>

										<ul class="comments">
											<li>
												<div class="comment">
													<div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
														<img class="avatar" alt="" src="img/avatars/avatar-2.jpg">
													</div>
													<div class="comment-block">
														<div class="comment-arrow"></div>
														<span class="comment-by">
															<strong>John Doe</strong>
															<span class="float-end">
																<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
															</span>
														</span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim ornare nisi, vitae mattis nulla ante id dui.</p>
														<span class="date float-end">January 12, 2022 at 1:38 pm</span>
													</div>
												</div>

												<ul class="comments reply">
													<li>
														<div class="comment">
															<div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
																<img class="avatar" alt="" src="img/avatars/avatar-3.jpg">
															</div>
															<div class="comment-block">
																<div class="comment-arrow"></div>
																<span class="comment-by">
																	<strong>John Doe</strong>
																	<span class="float-end">
																		<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																	</span>
																</span>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
																<span class="date float-end">January 12, 2022 at 1:38 pm</span>
															</div>
														</div>
													</li>
													<li>
														<div class="comment">
															<div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
																<img class="avatar" alt="" src="img/avatars/avatar-4.jpg">
															</div>
															<div class="comment-block">
																<div class="comment-arrow"></div>
																<span class="comment-by">
																	<strong>John Doe</strong>
																	<span class="float-end">
																		<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
																	</span>
																</span>
																<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae, gravida pellentesque urna varius vitae.</p>
																<span class="date float-end">January 12, 2022 at 1:38 pm</span>
															</div>
														</div>
													</li>
												</ul>
											</li>
											<li>
												<div class="comment">
													<div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
														<img class="avatar" alt="" src="img/avatars/avatar.jpg">
													</div>
													<div class="comment-block">
														<div class="comment-arrow"></div>
														<span class="comment-by">
															<strong>John Doe</strong>
															<span class="float-end">
																<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
															</span>
														</span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
														<span class="date float-end">January 12, 2022 at 1:38 pm</span>
													</div>
												</div>
											</li>
											<li>
												<div class="comment">
													<div class="img-thumbnail img-thumbnail-no-borders d-none d-sm-block">
														<img class="avatar" alt="" src="img/avatars/avatar.jpg">
													</div>
													<div class="comment-block">
														<div class="comment-arrow"></div>
														<span class="comment-by">
															<strong>John Doe</strong>
															<span class="float-end">
																<span> <a href="#"><i class="fas fa-reply"></i> Reply</a></span>
															</span>
														</span>
														<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
														<span class="date float-end">January 12, 2022 at 1:38 pm</span>
													</div>
												</div>
											</li>
										</ul>

									</div>

									<div class="post-block mt-5 post-leave-comment">
										<h4 class="mb-3">Leave a comment</h4>

										<form class="contact-form p-4 rounded bg-color-grey" action="https://www.okler.net/previews/porto/9.9.0/php/contact-form.php" method="POST">
											<div class="p-2">
												<div class="row">
													<div class="form-group col-lg-6">
														<label class="form-label required font-weight-bold text-dark">Full Name</label>
														<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" required>
													</div>
													<div class="form-group col-lg-6">
														<label class="form-label required font-weight-bold text-dark">Email Address</label>
														<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" required>
													</div>
												</div>
												<div class="row">
													<div class="form-group col">
														<label class="form-label required font-weight-bold text-dark">Comment</label>
														<textarea maxlength="5000" data-msg-required="Please enter your message." rows="8" class="form-control" name="message" required></textarea>
													</div>
												</div>
												<div class="row">
													<div class="form-group col mb-0">
														<input type="submit" value="Post Comment" class="btn btn-primary btn-modern" data-loading-text="Loading...">
													</div>
												</div>
											</div>
										</form>
									</div>

								</div>
							</article>

						</div>
					</div>
				</div>

			</div>

		</div>

		<footer id="footer">
			<div class="container">
				<div class="footer-ribbon"> <span>Get in Touch</span> </div>
				<div class="row py-5 my-4">
					<div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
						<h5 class="text-3 mb-3">ABOUT THE BLOG</h5>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu pulvinar magna semper scelerisque.</p>
						<p class="mb-2">Praesent venenatis turpis vitae purus semper, eget sagittis velit venenatis ptent taciti sociosqu ad litora...</p>
						<p class="mb-0"><a href="#" class="btn-flat btn-xs text-color-light p-relative top-5"><strong class="text-2">VIEW MORE</strong><i class="fas fa-angle-right p-relative top-1 ps-2"></i></a></p>
					</div>
					<div class="col-md-6 col-lg-3 mb-5 mb-lg-0">
						<h5 class="text-3 mb-3">RECENT POSTS</h5>
						<ul class="list-unstyled mb-0">
							<li class="d-flex mb-3 pb-1">
								<article class="d-flex"> <a href="#"> <img class="me-3 rounded-circle" src="img/office/our-office-4-square.jpg" alt="" style="max-width: 70px;"> </a>
									<div class="media-body"> <a href="#">
											<h6 class="text-3 text-color-light opacity-8 ls-0 mb-1">Lorem ipsum dolor sit, consectetur adipiscing elit.</h6>
											<p class="text-2 mb-0">12:53 AM Dec 19th</p>
										</a> </div>
								</article>
							</li>
							<li class="d-flex">
								<article class="d-flex"> <a href="#"> <img class="me-3 rounded-circle" src="img/office/our-office-5-square.jpg" alt="" style="max-width: 70px;"> </a>
									<div class="media-body"> <a href="#">
											<h6 class="text-3 text-color-light opacity-8 ls-0 mb-1">Lorem ipsum dolor sit, consectetur adipiscing elit.</h6>
											<p class="text-2 mb-0">12:53 AM Dec 19th</p>
										</a> </div>
								</article>
							</li>
						</ul>
					</div>
					<div class="col-md-6 col-lg-3 mb-5 mb-md-0">
						<h5 class="text-3 mb-3">RECENT COMMENTS</h5>
						<ul class="list-unstyled mb-0">
							<li class="mb-3 pb-1"> <a href="#">
									<p class="text-3 text-color-light opacity-8 mb-1"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2">John Doe</strong> commented on <strong class="text-color-primary">lorem ipsum dolor sit amet.</strong></p>
									<p class="text-2 mb-0">12:55 AM Dec 19th</p>
								</a> </li>
							<li> <a href="#">
									<p class="text-3 text-color-light opacity-8 mb-1"><i class="fas fa-angle-right text-color-primary"></i><strong class="ms-2">John Doe</strong> commented on <strong class="text-color-primary">lorem ipsum dolor sit amet.</strong></p>
									<p class="text-2 mb-0">12:55 AM Dec 19th</p>
								</a> </li>
						</ul>
					</div>
					<div class="col-md-6 col-lg-2">
						<h5 class="text-3 mb-3">CATEGORIES</h5>
						<p> <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Gadgets</span></a> <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Photography</span></a> <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Lifestyle</span></a> <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Fashion</span></a> <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Recipes</span></a> <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Travel</span></a> <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Business</span></a> <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Architecture</span></a> <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Reviews</span></a> <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Sports</span></a> <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Videos</span></a> <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Technology</span></a> <a href="#"><span class="badge badge-dark bg-color-black badge-sm py-2 me-1 mb-2 text-uppercase">Design</span></a> </p>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container py-2">
					<div class="row py-4">
						<div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0"> <a href="../user/index-2.html" class="logo pe-0 pe-lg-3"> <img alt="Porto Website Template" src="img/logo-footer.png" class="opacity-5" height="32"> </a> </div>
						<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
							<p>© Copyright 2022. All Rights Reserved.</p>
						</div>
						<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
							<nav id="sub-menu">
								<ul>
									<li><i class="fas fa-angle-right"></i><a href="page-faq.html" class="ms-1 text-decoration-none"> FAQ's</a></li>
									<li><i class="fas fa-angle-right"></i><a href="sitemap.html" class="ms-1 text-decoration-none"> Sitemap</a></li>
									<li><i class="fas fa-angle-right"></i><a href="contact-us.html" class="ms-1 text-decoration-none"> Contact Us</a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>

	<a class="style-switcher-open-loader" href="#" data-base-path="" data-skin-src="" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Style Switcher"><i class="fas fa-cogs"></i>
		<div class="style-switcher-tooltip"><strong>Style Switcher</strong>
			<p>Check out different color options and styles.</p>
		</div>
	</a>

	<a class="envato-buy-redirect" href="https://themeforest.net/checkout/from_item/4106987?license=regular&amp;support=bundle_6month&amp;ref=Okler" target="_blank" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Buy Porto"><i class="fas fa-shopping-cart"></i></a>
	<a class="demos-redirect" href="../user/index-2.html#demos" data-bs-toggle="tooltip" data-bs-animation="false" data-bs-placement="right" title="Demos"><img src="img/icons/demos-redirect.png" class="img-fluid" /></a>


	<!-- Vendor -->
	<script src="vendor/plugins/js/plugins.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>

	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>

</body>

<!-- Mirrored from www.okler.net/previews/porto/9.9.0/blog-post-image-gallery.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Nov 2022 22:10:35 GMT -->

</html>