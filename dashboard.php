<?php
require_once('config/connect.php');
require_once('functions/functions.php');


if (!isset($_SESSION['super_log'])) {
	gotoPage("../user/index");
}
?>

<!DOCTYPE html>
<html data-style-switcher-options="{'changeLogo': false, 'colorPrimary': '#e23c8e', 'colorSecondary': '#a33188', 'colorTertiary': '#4046b3', 'colorQuaternary': '#171940'}">


<head>
	<title>Dashboard - ESUT Filing Management System</title>
	<meta name="keywords" content="WebSite Template" />
	<meta name="description" content="Porto - Multipurpose Website Template">
	<meta name="author" content="okler.net">

	<?php require_once('includes/head.php') ?>

</head>

<body>

	<div class="body">
		<?php require_once('includes/header.php') ?>


		<div role="main" class="main">

			<section class="section custom-bg-color-light-1 border-0 pt-5 m-0">
				<div class="container position-relative z-../user/index-1 pt-5 mt-5">
					<div class="custom-circle custom-circle-wrapper custom-circle-big custom-circle-pos-1 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="900" data-appear-animation-duration="2s">
						<div class="bg-color-tertiary rounded-circle w-100 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 1000}"></div>
					</div>
					<div class="custom-circle custom-circle-medium custom-circle-pos-2 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1450" data-appear-animation-duration="2s">
						<div class="custom-bg-color-grey-2 rounded-circle w-95 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.2, 'transition': true, 'transitionDuration': 2000}"></div>
					</div>
					<div class="custom-circle custom-circle-medium custom-circle-pos-3 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1300">
						<div class="custom-bg-color-grey-2 rounded-circle w-95 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000}"></div>
					</div>
					<div class="custom-circle custom-circle-small custom-circle-pos-4 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1600">
						<div class="custom-bg-color-grey-2 rounded-circle w-95 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.6, 'transition': true, 'transitionDuration': 500}"></div>
					</div>
					<div class="custom-circle custom-circle-medium custom-circle-pos-5 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1050" data-appear-animation-duration="2s">
						<div class="bg-color-secondary rounded-circle w-95 h-95" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 2000}"></div>
					</div>
					<div class="custom-circle custom-circle-medium custom-circle-pos-6 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1200" data-appear-animation-duration="2s">
						<div class="custom-bg-color-grey-2 rounded-circle w-95 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.8, 'transition': true, 'transitionDuration': 500}"></div>
					</div>
					<div class="custom-circle custom-circle-small custom-circle-pos-7 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1700">
						<div class="custom-bg-color-grey-2 rounded-circle w-95 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000}"></div>
					</div>
					<div class="custom-circle custom-circle-medium custom-circle-pos-8 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1350" data-appear-animation-duration="2s">
						<div class="custom-bg-color-grey-2 rounded-circle w-95 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 500}"></div>
					</div>
					<div class="row align-items-center pt-4">
						<div class="col-md-6 pb-5 mb-md-5">
							<div class="spacer" style="height: 110px;"></div>
							<h1 class="text-color-dark font-weight-bold text-10 mb-3 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300">E-Filing For Students</h1>
							<!-- <p class="custom-text-color-grey-1 text-4 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="450">The world has been completely computerized. The world is a global village. We should work now to maximize your productivity and visibility, getting better faster results is easy</p> -->
							<a href="#dashboard-items" class="btn btn-gradient btn-rounded font-weight-semibold px-5 py-3 text-3 mb-md-5 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600">View Files</a>
							<div class="spacer d-none d-md-block" style="height: 310px;"></div>
						</div>
						<div class="col-md-6 pb-5">
							<img src="img/demos/seo-2/concept-1.png" class="img-fluid position-relative z-../user/index-1 pb-5 mb-5 ms-5 top-10 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="750" data-appear-animation-duration="1500ms" alt="Demo SEO 2" />
						</div>
					</div>
				</div>
			</section>

			<section class="section position-relative bg-color-light border-0 m-0">
				<svg class="custom-section-curved-top-1" width="100%" height="600px" xmlns="http://www.w3.org/2000/svg">
					<path id="svg_1" d="m-12.66406,442.40068c352.72654,-76.36348 565.45337,5.45453 696.36219,19.99996c130.90882,14.54542 270.90852,-23.63632 367.27196,-47.27263c96.36344,-23.63631 379.99921,-154.54513 527.27163,-209.09047c147.27242,-54.54535 381.813,-92.55755 406.36076,-99.00598c12.27388,-3.22421 917.96684,-113.93032 715.00991,10.61478c-202.95693,124.5451 -210.46055,521.28714 -198.64021,540.29354c11.82034,19.0064 -2500.90899,-15.53962 -2500.0019,-16.36399c-0.90709,0.82437 -9.99798,-180.99343 -9.09089,-181.8178" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#f7f8f9" />
					<path id="svg_2" d="m-116.90461,507.88064c314.5448,-112.72704 523.63527,-21.81814 878.17999,12.72724c354.54471,34.54538 632.72595,-225.45407 978.17978,-294.54484c172.72691,-34.54538 291.36195,-62.7275 368.52007,-78.40952c77.15812,-15.68202 352.84215,-22.50036 359.66142,-7.04537c13.63854,30.90997 97.72734,614.54347 50.90961,639.99858c-46.81772,25.4551 -855.68236,4.54593 -1433.63569,1.81866c-577.95334,-2.72727 -1155.90718,-5.45466 -1155.45364,-5.45491" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#fbfcfc" />
					<path id="svg_3" d="m-115.93584,623.27542c234.54496,-132.72699 429.09001,-112.72703 678.1804,-83.63619c249.09039,29.09085 389.09011,30.90903 656.36228,-107.2725c267.27217,-138.18153 816.36193,-207.2723 1121.81584,-170.90873c305.45391,36.36356 -292.72666,-19.99996 -293.63778,-18.18228c71.36548,8.18218 627.05432,68.63506 626.48637,265.22584c-0.56794,196.59079 -20.11364,456.59134 -31.02284,531.13767c-10.90919,74.54633 -1561.82313,-36.3646 -1565.45948,-34.54642c-3.63636,1.81818 -1249.08831,-1.81818 -1248.18122,-1.81869c-0.90709,0.00051 39.09282,-234.54445 39.99992,-234.54496c-0.9071,0.00051 -4.54345,-76.36297 -3.63636,-76.36348" stroke-opacity="null" stroke-width="0" stroke="#000" fill="#ffffff" />
				</svg>
				<div class="container position-relative custom-negative-margin-1 z-index-3 pb-lg-5 mb-lg-3">
					<div class="custom-circle custom-circle-wrapper custom-circle-big custom-circle-pos-1 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="900" data-appear-animation-duration="2s">
						<div class="bg-color-tertiary rounded-circle w-95 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 1000}"></div>
					</div>
					<div class="custom-circle custom-circle-medium custom-circle-pos-2 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1450" data-appear-animation-duration="2s">
						<div class="custom-bg-color-grey-2 rounded-circle w-95 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.2, 'transition': true, 'transitionDuration': 2000}"></div>
					</div>
					<div class="custom-circle custom-circle-medium custom-circle-pos-3 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1300">
						<div class="custom-bg-color-grey-2 rounded-circle w-95 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000}"></div>
					</div>
					<div class="custom-circle custom-circle-small custom-circle-pos-4 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1600">
						<div class="custom-bg-color-grey-2 rounded-circle w-95 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.6, 'transition': true, 'transitionDuration': 500}"></div>
					</div>
					<div class="custom-circle custom-circle-medium custom-circle-pos-5 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1050" data-appear-animation-duration="2s">
						<div class="bg-color-secondary rounded-circle w-95 h-95" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.2, 'transition': true, 'transitionDuration': 2000}"></div>
					</div>
					<div class="custom-circle custom-circle-medium custom-circle-pos-6 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1200" data-appear-animation-duration="2s">
						<div class="custom-bg-color-grey-2 rounded-circle w-95 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.8, 'transition': true, 'transitionDuration': 500}"></div>
					</div>
					<div class="custom-circle custom-circle-small custom-circle-pos-7 appear-animation" data-appear-animation="expandIn" data-appear-animation-delay="1700">
						<div class="custom-bg-color-grey-2 rounded-circle w-95 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'top', 'speed': 0.3, 'transition': true, 'transitionDuration': 1000}"></div>
					</div>
					<div class="custom-circle custom-circle-medium custom-circle-pos-8 appear-animation" data-appear-animation="expandInWithBlur" data-appear-animation-delay="1350" data-appear-animation-duration="2s">
						<div class="custom-bg-color-grey-2 rounded-circle w-95 h-100" data-plugin-float-element data-plugin-options="{'startPos': 'bottom', 'speed': 0.5, 'transition': true, 'transitionDuration': 500}"></div>
					</div>
					<div id="dashboard-items" class="row align-items-center">
						<div class="col-lg-7 pe-lg-5">
							<div class="row align-items-center">
								<?php
								$studentFileUploads = getAllFileSessionsUploaded();
								$maxLevel = 0;
								foreach ($studentFileUploads as $uploads) {
									if ($uploads['level'] > $maxLevel) {
										$maxLevel++;
									}
								}
								if ($studentFileUploads) {
									for ($i = 1; $i <= $maxLevel; $i++) {
										$numApproved = returnNumberOfFilesPerStatusPerYear($studentFileUploads, 'Approved', $i);
										$numWaiting = returnNumberOfFilesPerStatusPerYear($studentFileUploads, 'Waiting', $i);
										$numRejected = returnNumberOfFilesPerStatusPerYear($studentFileUploads, 'Rejected', $i);
										$processed = ($numApproved + $numRejected);
										$total = returnNumberOfFilesPerYear($studentFileUploads, $i);
								?>
										<?php if ($i % 2) { ?>
											<div class="col-md-6">
												<div class="card position-relative border-0 custom-box-shadow-1 custom-border-radius-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850">
													<div class="custom-dots-rect-1" style="background-image: url(img/demos/seo-2/dots-group.png);"></div>
													<div class="card-body text-center pt-5">
														<img src="img/demos/seo-2/icons/<?= returnImagePerFilesProcessed($processed, $total) ?>" class="img-fluid mb-4 pb-2" width="80" height="80" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-tertiary pb-2 mb-4'}" />
														<h4 class="text-color-dark font-weight-semibold mb-2">Year <?= $i ?> [<?= $total ?>]</h4>
														<!-- <p>Total: <?= $total ?></p> -->
														<p>Approved <i class="fa fa-check text-color-success"></i>: <?= $numApproved ?></p>
														<p>Rejected <i class="fa fa-close text-color-danger"></i>: <?= $numRejected ?></p>
														<p>Waiting <i class="fa fa-rotate text-color-warning"></i>: <?= $numWaiting ?></p>
														<?php if ($processed != $total) { ?>
															<a href="file_uploads?year=<?= $i ?>" class="btn btn-gradient btn-rounded font-weight-semibold px-5 py-3 text-3 mb-md-5 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;"><i class="fa fa-arrow-right"></i></a>
														<?php } ?>
													</div>
												</div>
											</div>
										<?php } else { ?>

											<div class="col-md-6">
												<div class="card position-relative border-0 custom-box-shadow-1 custom-border-radius-1 mb-4 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="850">
													<div class="custom-dots-rect-1" style="background-image: url(img/demos/seo-2/dots-group.png);"></div>
													<div class="card-body text-center pt-5">
														<img src="img/demos/seo-2/icons/<?= returnImagePerFilesProcessed($processed, $total) ?>" class="img-fluid mb-4 pb-2" width="80" height="80" alt="" data-icon data-plugin-options="{'onlySVG': true, 'extraClass': 'svg-fill-color-tertiary pb-2 mb-4'}" />
														<h4 class="text-color-dark font-weight-semibold mb-2">Year <?= $i ?> [<?= $total ?>]</h4>
														<!-- <p>Total: <?= $total ?></p> -->
														<p>Approved <i class="fa fa-check text-color-success"></i>: <?= $numApproved ?></p>
														<p>Rejected <i class="fa fa-close text-color-danger"></i>: <?= $numRejected ?></p>
														<p>Waiting <i class="fa fa-rotate text-color-warning"></i>: <?= $numWaiting ?></p>
														<?php if ($processed != $total) { ?>
															<a href="file_uploads?year=<?= $i ?>" class="btn btn-gradient btn-rounded font-weight-semibold px-5 py-3 text-3 mb-md-5 appear-animation animated fadeInUpShorter appear-animation-visible" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="600" style="animation-delay: 600ms;"><i class="fa fa-arrow-right"></i></a>
														<?php } ?>
													</div>
												</div>
											</div>

								<?php }
									}
								} ?>

							</div>
						</div>

					</div>
				</div>
			</section>

		</div>

		<?php require_once('includes/footer.php') ?>


	</div>
	<?php require_once('includes/js_imports.php') ?>


	<!-- Vendor -->
	<script src="vendor/plugins/js/plugins.min.js"></script>

	<!-- Theme Base, Components and Settings -->
	<script src="js/theme.js"></script>

	<!-- Demo -->
	<script src="js/demos/demo-seo-2.js"></script>

	<!-- Theme Initialization Files -->
	<script src="js/theme.init.js"></script>

</body>

</html>