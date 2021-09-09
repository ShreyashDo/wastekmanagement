<?php
/**
 * Template Name: Templete Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );

if ( is_front_page() ) {
	get_template_part( 'global-templates/hero' );
}
?>

<div class="home-hero-banner-top">
	<div class="container">
		<div class="row align-items-end">
			<div class="col-lg-8 col-xl-7">
				<div class="skip-bin-info-holder">
					<div class="overlay-image-arrow">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home-hero-arrow-up.png" alt="Arrow Up">
					</div>
					<div class="title">
						<i class="fa fa-arrow-circle-up"></i>
						Skip Bin instant quote
					</div>
					<div class="desc">
						Simply type your suburb here and you'll be provided with instant price across our range
					</div>
				</div>
			</div>
			<div class="col-lg-4 offset-xl-1">
				
				<div class="seven-days-skip-info">
					<img src="<?php echo get_template_directory_uri(); ?>/img/Layer 2.png" alt="" width: "100%">
					<div class="title">7 Days fast and perfect service to your home.</div>
				</div>
			</div>
		</div>
		
		<div class="home-hero-slider">
			<div class="slider">
				<div class="slider-wrapper">
					<div class="slide">
						<div class="image">

						</div>
						<div class="entry-content">
							<div class="icon">
								<img src="<?php echo get_template_directory_uri(); ?>/img/home-slider-truck.png" alt="">
							</div>
							<div class="info">
								We deliver the right skip bins for your residential and commercial projects.
							</div>
							<div class="slider-nav">
								<a href="#"><i class="fa fa-arrow-circle-left"></i></a>
								<a href="#"><i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>

<div class="home-product-info">
	<div class="home-special-offer-background-overlay">
		<div class="container">
			<div class="home-special-offer">
				<div class="discount-circle">
					<div class="save">SAVE</div>
					<div class="percent">20%</div>
				</div>

				<div class="entry-content">
					<div class="title">15 days Special Offer on Subscription</div>
					<div class="desc">Available around Washi, Warli, Juhu, Bandra-East, Bandra-West, Powai, Band-stand, Thane, Navi-Mumbai, Panvel.</div>
					<a href="#" class="button">Find out more Information</a>
				</div>
			</div>
		</div>
	</div>

	<div class="home-product-holder">
		<div class="container">
			<h2><i class="fa fa-arrow-circle-down"></i>  Select the right skip bin for your project</h2>
			<div class="home-products">
				<div class="home-product">
					<div class="row">
						<div class="col-xl-4 col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/product-placeholder.png" alt="" width="100%">
						</div>
						<div class="col-xl-4 col-md-6">	
							<div class="title">4 Cubic meter skip</div>
							<ul>
								<li>Garden & House-hold Cleanup</li>
								<li>Heavy Loads</li>
								<li>Ideal for narrow alleys and small streets</li>
								<li>Building sites</li>
						</div>
						<div class="col-xl-4 col-lg-12">
							<div class="home-product-circles">
								<div class="row">
									<div class="offset-lg-3 offset-xl-0 offset-md-2 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
										<div class="circles">
											<div class="abs-circle-holder">
												<div class="content-holder">
													Approx x 4 trailers
												</div>
												<div class="icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.png" alt="">
											</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
										<div class="circles">
											<div class="abs-circle-holder">
												<div class="content-holder">
													Approx x 4 trailers Wheelie bins
												</div>
												<div class="icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.png" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="abs-holder-button">Get a Quote for this skip-bin</div>
				</div>
				<div class="home-product">
					<div class="row">
						<div class="col-xl-4 col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/product-placeholder.png" alt="" width="100%">
						</div>
						<div class="col-xl-4 col-md-6">	
							<div class="title">4 Cubic meter skip</div>
							<ul>
								<li>Garden & House-hold Cleanup</li>
								<li>Heavy Loads</li>
								<li>Ideal for narrow alleys and small streets</li>
								<li>Building sites</li>
						</div>
						<div class="col-xl-4 col-lg-12">
							<div class="home-product-circles">
								<div class="row">
									<div class="offset-lg-3 offset-xl-0 offset-md-2 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
										<div class="circles">
											<div class="abs-circle-holder">
												<div class="content-holder">
													Approx x 4 trailers
												</div>
												<div class="icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.png" alt="">
											</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
										<div class="circles">
											<div class="abs-circle-holder">
												<div class="content-holder">
													Approx x 4 trailers Wheelie bins
												</div>
												<div class="icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.png" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="abs-holder-button">Get a Quote for this skip-bin</div>
				</div>
				<div class="home-product">
					<div class="row">
						<div class="col-xl-4 col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/product-placeholder.png" alt="" width="100%">
						</div>
						<div class="col-xl-4 col-md-6">	
							<div class="title">4 Cubic meter skip</div>
							<ul>
								<li>Garden & House-hold Cleanup</li>
								<li>Heavy Loads</li>
								<li>Ideal for narrow alleys and small streets</li>
								<li>Building sites</li>
						</div>
						<div class="col-xl-4 col-lg-12">
							<div class="home-product-circles">
								<div class="row">
									<div class="offset-lg-3 offset-xl-0 offset-md-2 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
										<div class="circles">
											<div class="abs-circle-holder">
												<div class="content-holder">
													Approx x 4 trailers
												</div>
												<div class="icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.png" alt="">
											</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
										<div class="circles">
											<div class="abs-circle-holder">
												<div class="content-holder">
													Approx x 4 trailers Wheelie bins
												</div>
												<div class="icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.png" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="abs-holder-button">Get a Quote for this skip-bin</div>
				</div>
				<div class="home-product">
					<div class="row">
						<div class="col-xl-4 col-md-6">
							<img src="<?php echo get_template_directory_uri(); ?>/img/product-placeholder.png" alt="" width="100%">
						</div>
						<div class="col-xl-4 col-md-6">	
							<div class="title">4 Cubic meter skip</div>
							<ul>
								<li>Garden & House-hold Cleanup</li>
								<li>Heavy Loads</li>
								<li>Ideal for narrow alleys and small streets</li>
								<li>Building sites</li>
						</div>
						<div class="col-xl-4 col-lg-12">
							<div class="home-product-circles">
								<div class="row">
									<div class="offset-lg-3 offset-xl-0 offset-md-2 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
										<div class="circles">
											<div class="abs-circle-holder">
												<div class="content-holder">
													Approx x 4 trailers
												</div>
												<div class="icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.png" alt="">
											</div>
											</div>
										</div>
									</div>
									<div class="col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
										<div class="circles">
											<div class="abs-circle-holder">
												<div class="content-holder">
													Approx x 4 trailers Wheelie bins
												</div>
												<div class="icon">
													<img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.png" alt="">
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="abs-holder-button">Get a Quote for this skip-bin</div>
				</div>
			</div>
		</div>
	</div>

	<div class="home-we-accept">
		<div class="container">
			<div class="title-holder">
				<h2>We accept the following waste</h2>
					<div class="button-holder top">
						<a href="#" class="button outline">Read the full list of acceptable waste</a>
					</div>
			</div>
			<div class="row">
				<div class="col-lg-3 col-sm-6">
					<div class="circle">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-1.png" alt="We accept waste" width="100%">
						<div class="title">
							Commertial Waste
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="circle">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-2.png" alt="We accept waste" width="100%">
						<div class="title">
							Building Waste
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="circle">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-3.png" alt="We accept waste" width="100%">
						<div class="title">
							Green Waste
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-sm-6">
					<div class="circle">
						<img src="<?php echo get_template_directory_uri(); ?>/img/home-we-accept-4.png" alt="We accept waste" width="100%">
						<div class="title">
							Household Waste
						</div>
					</div>
				</div>
				
			</div>
			<div class="button-holder bottom">
					<a href="#" class="button outline">Read the full list of acceptable waste</a>
			</div>
		</div>
	</div>

</div>



<?php
get_footer();
