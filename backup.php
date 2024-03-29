<!DOCTYPE HTML>
<html class="rainy_effect" lang="en">

<!-- Mirrored from digitalentertainment85.eu5.org/agency/demo/index_background_rainy.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Dec 2020 12:55:56 GMT -->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="">
	<meta name="description" content="">
	<title>Agency</title>
	<link rel="shortcut icon" href="images/favicon.png">
	<link rel="apple-touch-icon" sizes="57x57" href="images/apple-touch-icon-57.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114.png">
	<link href="css/uikit.css" rel="stylesheet" media="all">
	<link href="css/styles.css" rel="stylesheet" media="all">

	<style type="text/css">
		.spinner-load{
		    display: block;
		    color: white;
		    font-size: 10pt;
		    margin: 0;
		    margin-bottom: 5px;
		    letter-spacing: 1.5px;
		}
	</style>
</head>
<body data-ng-app="myPage" data-ng-controller="myPageCtrl">

<div class="spinner" id="spinner" >
	<div  style="display: flex; justify-content: center; margin-top: 20%;"> 
		<img class="spinnerLogo" src="images/loader/loader (9).gif" style="height: 60px; margin-top: -1px; margin-right: 5px; display: none;">
		<div class="spinnerLogo" style="display: none;">
			<p class="spinner-load">Rizquna</p>
			<p class="spinner-load">Berkah</p>
			<p class="spinner-load">Abadi</p> 
		</div>
	</div>
</div>


<div class="wrapper">

<header class="uk-small-hidden header">
	<nav class="uk-navbar header-nav" style="z-index: 9999;">
		<div class="uk-container uk-container-center">
			<a class="uk-navbar-brand logo_link">
				<img style="max-height: 80% !important;" class="uk-responsive-height logo" src="images/logo-mid.png" alt="">
			</a>
			<div class="uk-navbar-flip uk-visible-large">
				<ul class="uk-navbar-nav header-nav-list">
					<li class="header_nav_list_item">
						<a onclick="scrollDiv('featuress')" class="link_features header_nav_list_item_link" href="#">Services</a>
					</li> 
					<li class="header_nav_list_item">
						<a onclick="scrollDiv('aboutUs')" class="link_features header_nav_list_item_link" href="javascript:void(0)">About Us</a>
					</li>
					<li class="header_nav_list_item">
						<a data-ng-click="scrollNav($event)" class="link_pricing header_nav_list_item_link" href="#">Tracking</a>
					</li>
					<li class="header_nav_list_item">
						<a data-ng-click="scrollNav($event)" class="link_clients header_nav_list_item_link" href="#">Gallery</a>
					</li>
					<li class="header_nav_list_item">
						<a data-ng-click="scrollNav($event)" class="link_facts header_nav_list_item_link" href="#">Contact Us</a>
					</li>
				</ul>
			</div>
			<div class="uk-navbar-flip uk-hidden-large header_navbar_mobile_block">
				<div data-ng-click="toggleMobileNav($event)" class="uk-navbar-toggle header_navbar_mobile"></div>
			</div>
		</div>
	</nav>
</header>

<section class="uk-height-viewport uk-cover-background uk-position-relative uk-flex uk-flex-middle uk-overflow-hidden container">
	<div class="uk-container uk-container-center uk-width-1-1 uk-text-center uk-position-relative container_block">

		<div class="" style="z-index: 9999">
			<h1 class="uk-h1 container_title">PT. RIZQUNA</h1>
			<h2 class="uk-h2 container_subtitle">BERKAH ABADI	</h2>
			<div class="container_description">ONE-STOP LOGISTICS SOLUTIONS PROVIDER <br> We give you  full service freight transportation company by land, air and Ocean.</div>

			<div class="uk-position-relative uk-margin-large-bottom uk-width-1-1 container_button">
				<div data-ng-click="scrollNav($event)" class="uk-button uk-border-rounded green_button container_button_message">Send message</div>
				<div data-ng-click="scrollNav($event)" class="uk-button uk-border-rounded container_button_subscribe">Subscribe</div>
			</div>
		</div>

	</div>
	<div data-ng-click="scrollNav($event)" class="uk-icon-angle-down container_arrow"></div>
</section>

<section class="elements section">
	<div class="uk-container uk-container-center uk-text-center" >
	<h3 class="uk-h3 uk-margin-bottom animated section_title elements_title">Great features</h3>
	<h4 class="uk-h4 uk-margin-large-bottom animated section_subtitle">It's time to build out the site and make some big decisions</h4>
		<div class="uk-grid uk-grid-large">
			<div class="uk-width-large-1-4 uk-width-small-1-2 animated">
				<div class="uk-margin-large-bottom elements_item">
					<div class="uk-icon-thumbs-o-up uk-border-circle elements_item_label"></div>
					<h4 class="uk-h4 elements_item_text">Price</h4>
					<p class="elements_item_desc">Lorem ipsum dolor sit amet, cons ec tetur ducimus orem ipsum do lor sit amet, consectetur ipsum dolor</p>
				</div>
			</div>
			<div class="uk-width-large-1-4 uk-width-small-1-2 animated">
				<div class="uk-margin-large-bottom elements_item">
					<div class="uk-icon-line-chart uk-border-circle elements_item_label"></div>
					<h4 class="uk-h4 elements_item_text">High quality</h4>
					<p class="elements_item_desc">Lorem ipsum dolor sit amet, cons ec tetur ducimus orem ipsum do lor sit amet, consectetur ipsum dolor</p>
				</div>
			</div>
			<div class="uk-width-large-1-4 uk-width-small-1-2 animated">
				<div class="uk-margin-large-bottom elements_item">
					<div class="uk-icon-bar-chart-o uk-border-circle elements_item_label"></div>
					<h4 class="uk-h4 elements_item_text">Advanced analytics</h4>
					<p class="elements_item_desc">Lorem ipsum dolor sit amet, cons ec tetur ducimus orem ipsum do lor sit amet, consectetur ipsum dolor</p>
				</div>
			</div>
			<div class="uk-width-large-1-4 uk-width-small-1-2 animated">
				<div class="uk-margin-large-bottom elements_item">
					<div class="uk-icon-clock-o uk-border-circle elements_item_label"></div>
					<h4 class="uk-h4 elements_item_text">24/7 Support</h4>
					<p class="elements_item_desc">Lorem ipsum dolor sit amet, cons ec tetur ducimus orem ipsum do lor sit amet, consectetur ipsum dolor</p>
				</div>
			</div>
		</div>
	</div>
</section> 

<section class="description description_secondary section">
	<div class="uk-grid uk-grid-collapse">
		<div class="uk-width-large-1-2 description_image" data-image="images/page_3.jpg"></div>
		<div class="uk-width-large-1-2 uk-flex uk-flex-middle">
			<div class="uk-container description_block" data-uk-scrollspy="{cls:'uk-active'}">
				<h3 class="uk-h3 uk-margin-large-bottom animated description_title">The best start for your business idea</h3>
				<p class="animated description_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere veritatis inventore eum, cupiditate esse debitis consectetur nisi harum. Tempore, assumenda ducimus vero totam labore. Ipsam, eos odit eaque, voluptatum minima, odio eveniet soluta saepe, culpa quo enim omnis iusto. Possimus, at numquam beatae non atque?</p>
			</div>
		</div>
	</div>
</section>

<section class="features grey_overlay section" id="featuress">
	<div class="uk-container uk-container-center uk-position-relative" data-uk-scrollspy="{cls:'uk-active'}">
		<h3 class="uk-h3 uk-text-center uk-text-contrast animated section_title features_title">We offer</h3>
		<h4 class="uk-h4 uk-text-contrast uk-text-center uk-margin-large-bottom animated section_subtitle">Take your website to the next level</h4>
		<div class="uk-grid uk-grid-large">
			<div class="uk-width-large-1-3 uk-width-medium-1-2 uk-text-center uk-margin-large-bottom animated">
				<div class="uk-grid uk-grid-collapse features_block">
					<div class="uk-width-1-1 uk-margin-bottom uk-text-center">
						<div class="uk-icon-html5 features_logo"></div>
					</div>
					<div class="uk-width-1-1">
						<h4 class="uk-h4 uk-text-contrast features_caption">Web development</h4>
						<p class="uk-text-contrast features_text">Pro in a velit aliquam vitae males uada rutrum. Aenean ullam corper placerat porttitor velit aliquam vitae. Aliquam a augue suscipit, bibendum</p>
					</div>
				</div>
			</div>
			<div class="uk-width-large-1-3 uk-width-medium-1-2 uk-text-center uk-margin-large-bottom animated">
				<div class="uk-grid uk-grid-collapse features_block">
					<div class="uk-width-1-1 uk-margin-bottom uk-text-center">
						<div class="uk-icon-signal features_logo"></div>
					</div>
					<div class="uk-width-1-1">
						<h4 class="uk-h4 uk-text-contrast features_caption">Digital Marketing</h4>
						<p class="uk-text-contrast features_text">Pro in a velit aliquam vitae males uada rutrum. Aenean ullam corper placerat porttitor velit aliquam vitae. Aliquam a augue suscipit, bibendum</p>
					</div>
				</div>
			</div>
			<div class="uk-width-large-1-3 uk-width-medium-1-2 uk-text-center uk-margin-large-bottom animated">
				<div class="uk-grid uk-grid-collapse features_block">
					<div class="uk-width-1-1 uk-margin-bottom uk-text-center">
						<div class="uk-icon-picture-o features_logo"></div>
					</div>
					<div class="uk-width-1-1">
						<h4 class="uk-h4 uk-text-contrast features_caption">Responsive design</h4>
						<p class="uk-text-contrast features_text">Pro in a velit aliquam vitae males uada rutrum. Aenean ullam corper placerat porttitor velit aliquam vitae. Aliquam a augue suscipit, bibendum</p>
					</div>
				</div>
			</div>
			<div class="uk-width-large-1-3 uk-width-medium-1-2 uk-text-center uk-margin-large-bottom animated">
				<div class="uk-grid uk-grid-collapse features_block">
					<div class="uk-width-1-1 uk-margin-bottom uk-text-center">
						<div class="uk-icon-trophy features_logo"></div>
					</div>
					<div class="uk-width-1-1">
						<h4 class="uk-h4 uk-text-contrast features_caption">Product Branding</h4>
						<p class="uk-text-contrast features_text">Pro in a velit aliquam vitae males uada rutrum. Aenean ullam corper placerat porttitor velit aliquam vitae. Aliquam a augue suscipit, bibendum</p>
					</div>
				</div>
			</div>
			<div class="uk-width-large-1-3 uk-width-medium-1-2 uk-text-center uk-margin-large-bottom animated">
				<div class="uk-grid uk-grid-collapse features_block">
					<div class="uk-width-1-1 uk-margin-bottom uk-text-center">
						<div class="uk-icon-search features_logo"></div>
					</div>
					<div class="uk-width-1-1">
						<h4 class="uk-h4 uk-text-contrast features_caption">Search engine optimization</h4>
						<p class="uk-text-contrast features_text">Pro in a velit aliquam vitae males uada rutrum. Aenean ullam corper placerat porttitor velit aliquam vitae. Aliquam a augue suscipit, bibendum</p>
					</div>
				</div>
			</div>
			<div class="uk-width-large-1-3 uk-width-medium-1-2 uk-text-center uk-margin-large-bottom animated">
				<div class="uk-grid uk-grid-collapse features_block">
					<div class="uk-width-1-1 uk-margin-bottom uk-text-center">
						<div class="uk-icon-lightbulb-o features_logo"></div>
					</div>
					<div class="uk-width-1-1">
						<h4 class="uk-h4 uk-text-contrast features_caption">Innovative technologies</h4>
						<p class="uk-text-contrast features_text">Pro in a velit aliquam vitae males uada rutrum. Aenean ullam corper placerat porttitor velit aliquam vitae. Aliquam a augue suscipit, bibendum</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="price section">
	<div class="uk-container uk-container-center uk-text-center price_container" data-uk-scrollspy="{cls:'uk-active'}">
		<h3 class="uk-h3 uk-text-center animated section_title price_title">Pricing plan</h3>
		<h4 class="uk-h4 uk-margin-large-bottom uk-text-center animated section_subtitle">Let our professional design team create a beautiful website just for you</h4>
		<div class="uk-grid">
			<div class="uk-width-large-1-4 uk-width-small-1-2 animated">
				<div class="uk-position-relative uk-overflow-hidden uk-margin-large-bottom price_block">
					<div class="price_header">
						<h4 class="uk-h4 price_block_title">Basic</h4>
						<p class="price_block_cost">$10</p>
					</div>
					<div class="price_block_text">1 Design Version</div>
					<div class="price_block_text">Free Update</div>
					<div class="price_block_text">3 Subdomains</div>
					<div class="price_block_text">1GB Disk Space</div>
					<div class="price_block_text">Mail Support</div>
					<div class="price_block_footer">
						<a class="uk-button uk-border-rounded uk-button-large" href="#">Purchase</a>
					</div>
				</div>
			</div>
			<div class="uk-width-large-1-4 uk-width-small-1-2 animated">
				<div class="uk-position-relative uk-overflow-hidden uk-margin-large-bottom price_block">
					<div class="price_header">
						<h4 class="uk-h4 price_block_title">Standard</h4>
						<p class="price_block_cost">$20</p>
					</div>
					<div class="price_block_text">2 Design Versions</div>
					<div class="price_block_text">Free Update</div>
					<div class="price_block_text">3 Subdomains</div>
					<div class="price_block_text">5GB Disk Space</div>
					<div class="price_block_text">Mail Support</div>
					<div class="price_block_footer">
						<a class="uk-button uk-border-rounded uk-button-large" href="#">Purchase</a>
					</div>
				</div>
			</div>
			<div class="uk-width-large-1-4 uk-width-small-1-2 animated">
				<div class="uk-position-relative uk-overflow-hidden uk-margin-large-bottom best_price price_block">
					<div class="price_header">
						<h4 class="uk-h4 price_block_title">Premium</h4>
						<p class="price_block_cost">$50</p>
					</div>
					<div class="price_block_text">5 Design Versions</div>
					<div class="price_block_text">Free Update</div>
					<div class="price_block_text">3 Subdomains</div>
					<div class="price_block_text">10GB Disk Space</div>
					<div class="price_block_text">Phone & Mail Support</div>
					<div class="price_block_footer">
						<a class="uk-button uk-border-rounded uk-button-large" href="#">Purchase</a>
					</div>
				</div>
			</div>
			<div class="uk-width-large-1-4 uk-width-small-1-2 animated">
				<div class="uk-position-relative uk-overflow-hidden uk-margin-large-bottom price_block">
					<div class="price_header">
						<h4 class="uk-h4 price_block_title">Extra</h4>
						<p class="price_block_cost">$100</p>
					</div>
					<div class="price_block_text">10 Design Versions</div>
					<div class="price_block_text">Free Update</div>
					<div class="price_block_text">3 Subdomains</div>
					<div class="price_block_text">25GB Disk Space</div>
					<div class="price_block_text">Phone & Mail Support</div>
					<div class="price_block_footer">
						<a class="uk-button uk-border-rounded uk-button-large" href="#">Purchase</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="subscribe dark_overlay section">
	<div class="uk-container uk-container-center uk-text-center" data-uk-scrollspy="{cls:'uk-active'}">
		<h3 class="uk-h3 uk-text-contrast animated section_title subscribe_title">Subscribe to get latest news</h3>
		<h4 class="uk-h4 uk-text-contrast uk-margin-large-bottom animated section_subtitle">Stay up to date with all modern trends in web design and development</h4>

		<form data-ng-submit="mailchimpForm" class="uk-form animated form_sign_in" autocomplete="off">
			<div class="uk-grid uk-grid-collapse uk-container-center uk-width-medium-2-3 uk-width-large-1-2 uk-margin-bottom">
				<div class="uk-width-small-3-4 uk-margin-bottom">
					<input name="email" class="uk-width-1-1 uk-text-contrast form_input" type="email" placeholder="Enter your e-mail">
				</div>
				<div class="uk-width-small-1-4 uk-margin-bottom">
					<button class="uk-width-1-1 uk-button button_custom_green form_button" type="submit">Subscribe</button>
				</div>
			</div>

			<div class="success">E-mail has been added successfully.</div>
			<div class="success_response"></div>

			<div class="error">E-mail must be valid and message must be longer than 1 character.</div>
			<div class="error_response"></div>
		</form>
	</div>
</section>

<section class="clients section">
	<div class="uk-container uk-container-center uk-text-center" data-uk-scrollspy="{cls:'uk-active'}">
		<h3 class="uk-h3 animated section_title clients_title">Our clients who work with us</h3>
		<h4 class="uk-h4 uk-margin-large-bottom animated section_subtitle">Both large national corporate clients and small local businesses trust our team</h4>
		<div class="uk-slidenav-position uk-align-center uk-margin-bottom animated clients_slider" data-uk-slider>
			<div class="uk-slider-container clients_slider_container">
				<ul class="uk-slider uk-grid-width-medium-1-4 clients_list">
					<li class="clients_list_item">
						<img class="clients_list_item_image" src="images/logo_1.png" alt="">
					</li>
					<li class="clients_list_item">
						<img class="clients_list_item_image" src="images/logo_2.png" alt="">
					</li>
				</ul>
			</div>
			<a href="#" class="uk-slidenav uk-slidenav-previous uk-border-circle clients_slider_arrow_left" data-uk-slider-item="previous" draggable="false"></a>
			<a href="#" class="uk-slidenav uk-slidenav-next uk-border-circle clients_slider_arrow_right" data-uk-slider-item="next" draggable="false"></a>
		</div>
	</div>
</section>

<section class="statistic dark_overlay section" id="statistic">
	<div class="uk-container uk-container-center uk-text-contrast uk-position-relative uk-text-center" data-uk-scrollspy="{cls:'select uk-active'}">
		<h3 class="uk-h3 uk-text-contrast animated section_title statistic_title">Some facts about us</h3>
		<h4 class="uk-h4 uk-text-contrast uk-margin-large-bottom animated section_subtitle">You will have a successful project that will deliver quality results for your business</h4>
		<div class="statistic_wrapper">
			<div class="uk-grid uk-grid-large">
				<div class="uk-width-large-1-4 uk-width-small-1-2 animated">
					<div class="uk-margin-large-bottom statistic_block">
						<div class="statistic_caption">
							<span class="statistic_counter" id="statistic_counter_1">0</span>
						</div>
						<div class="statistic_text">Projects</div>
					</div>
				</div>
				<div class="uk-width-large-1-4 uk-width-small-1-2 animated">
					<div class="uk-margin-large-bottom statistic_block">
						<div class="statistic_caption">
							<span class="statistic_counter" id="statistic_counter_2">0</span>
						</div>
						<div class="statistic_text">Clients</div>
					</div>
				</div>
				<div class="uk-width-large-1-4 uk-width-small-1-2 animated">
					<div class="uk-margin-large-bottom statistic_block">
						<div class="statistic_caption">
							<span class="statistic_counter" id="statistic_counter_3">0</span>
						</div>
						<div class="statistic_text">Hours spent</div>
					</div>
				</div>
				<div class="uk-width-large-1-4 uk-width-small-1-2 animated">
					<div class="uk-margin-large-bottom statistic_block">
						<div class="statistic_caption">
							<span class="statistic_counter" id="statistic_counter_4">0</span>
						</div>
						<div class="statistic_text">Followers</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="gallery wide_four_item_gallery section" data-uk-scrollspy="{cls:'uk-active'}">
	<h3 class="uk-h3 uk-text-center animated section_title gallery_title">Our best projects</h3>
	<h4 class="uk-h4 uk-text-center uk-margin-large-bottom animated section_subtitle">We develop innovations that are changing the world</h4>
	<div class="uk-grid uk-grid-collapse">
		<div class="uk-width-medium-1-2 uk-width-xlarge-1-4 animated">
			<a class="uk-display-block uk-position-relative uk-overflow-hidden gallery_block"   data-lightbox-type="image" data-uk-lightbox="{group:'my-group'}">
				<div class="uk-position-cover gallery_overlay">
					<div class="uk-text-center gallery_table">
						<div class="uk-text-center gallery_cell">
							<div class="uk-text-center gallery_container">
								<h4 class="uk-h4 uk-text-contrast gallery_caption">Title</h4>
								<div class="uk-text-contrast gallery_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur lorem ipsum dolor sit ametlorem</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="uk-width-medium-1-2 uk-width-xlarge-1-4 animated">
			<a class="uk-display-block uk-position-relative uk-overflow-hidden gallery_block"  data-lightbox-type="image" data-uk-lightbox="{group:'my-group'}">
				<div class="uk-position-cover gallery_overlay">
					<div class="uk-text-center gallery_table">
						<div class="uk-text-center gallery_cell">
							<div class="uk-text-center gallery_container">
								<h4 class="uk-h4 uk-text-contrast gallery_caption">Title</h4>
								<div class="uk-text-contrast gallery_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur lorem ipsum dolor sit ametlorem</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="uk-width-medium-1-2 uk-width-xlarge-1-4 animated">
			<a class="uk-display-block uk-position-relative uk-overflow-hidden gallery_block"  data-lightbox-type="image" data-uk-lightbox="{group:'my-group'}">
				<div class="uk-position-cover gallery_overlay">
					<div class="uk-text-center gallery_table">
						<div class="uk-text-center gallery_cell">
							<div class="uk-text-center gallery_container">
								<h4 class="uk-h4 uk-text-contrast gallery_caption">Title</h4>
								<div class="uk-text-contrast gallery_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur lorem ipsum dolor sit ametlorem</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="uk-width-medium-1-2 uk-width-xlarge-1-4 animated">
			<a class="uk-display-block uk-position-relative uk-overflow-hidden gallery_block" data-lightbox-type="image" data-uk-lightbox="{group:'my-group'}">
				<div class="uk-position-cover gallery_overlay">
					<div class="uk-text-center gallery_table">
						<div class="uk-text-center gallery_cell">
							<div class="uk-text-center gallery_container">
								<h4 class="uk-h4 uk-text-contrast gallery_caption">Title</h4>
								<div class="uk-text-contrast gallery_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur lorem ipsum dolor sit ametlorem</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="uk-width-medium-1-2 uk-width-xlarge-1-4 animated">
			<a class="uk-display-block uk-position-relative uk-overflow-hidden gallery_block" href="../../../image.ibb.co/bMRThb/gallery_3.jpg" data-lightbox-type="image" data-uk-lightbox="{group:'my-group'}">
				<div class="uk-position-cover gallery_overlay">
					<div class="uk-text-center gallery_table">
						<div class="uk-text-center gallery_cell">
							<div class="uk-text-center gallery_container">
								<h4 class="uk-h4 uk-text-contrast gallery_caption">Title</h4>
								<div class="uk-text-contrast gallery_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur lorem ipsum dolor sit ametlorem</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="uk-width-medium-1-2 uk-width-xlarge-1-4 animated">
			<a class="uk-display-block uk-position-relative uk-overflow-hidden gallery_block" href="../../../image.ibb.co/nOn12b/gallery_11.jpg" data-lightbox-type="image" data-uk-lightbox="{group:'my-group'}">
				<div class="uk-position-cover gallery_overlay">
					<div class="uk-text-center gallery_table">
						<div class="uk-text-center gallery_cell">
							<div class="uk-text-center gallery_container">
								<h4 class="uk-h4 uk-text-contrast gallery_caption">Title</h4>
								<div class="uk-text-contrast gallery_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur lorem ipsum dolor sit ametlorem</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="uk-width-medium-1-2 uk-width-xlarge-1-4 animated">
			<a class="uk-display-block uk-position-relative uk-overflow-hidden gallery_block" href="../../../image.ibb.co/nANeoG/gallery_5.jpg" data-lightbox-type="image" data-uk-lightbox="{group:'my-group'}">
				<div class="uk-position-cover gallery_overlay">
					<div class="uk-text-center gallery_table">
						<div class="uk-text-center gallery_cell">
							<div class="uk-text-center gallery_container">
								<h4 class="uk-h4 uk-text-contrast gallery_caption">Title</h4>
								<div class="uk-text-contrast gallery_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur lorem ipsum dolor sit ametlorem</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
		<div class="uk-width-medium-1-2 uk-width-xlarge-1-4 animated">
			<a class="uk-display-block uk-position-relative uk-overflow-hidden gallery_block" href="../../../image.ibb.co/da23Fw/page_3.jpg" data-lightbox-type="image" data-uk-lightbox="{group:'my-group'}">
				<div class="uk-position-cover gallery_overlay">
					<div class="uk-text-center gallery_table">
						<div class="uk-text-center gallery_cell">
							<div class="uk-text-center gallery_container">
								<h4 class="uk-h4 uk-text-contrast gallery_caption">Title</h4>
								<div class="uk-text-contrast gallery_description">Lorem ipsum dolor sit amet, consectetur adipisicing elit Lorem ipsum dolor sit amet, consectetur lorem ipsum dolor sit ametlorem</div>
							</div>
						</div>
					</div>
				</div>
			</a>
		</div>
	</div>
</section>

<section class="team section">
	<div class="uk-container uk-container-center uk-text-center" data-uk-scrollspy="{cls:'uk-active'}">
		<h3 class="uk-h3 animated section_title team_title">Our team</h3>
		<h4 class="uk-h4 uk-margin-large-bottom animated section_subtitle">We have a fantastic team of developers and engineers that are ready to help you</h4>
		<div class="uk-grid uk-grid-large">
			<div class="uk-width-large-1-4 uk-width-medium-1-2 animated">
				<div class="uk-position-relative uk-margin-large-bottom team_block"> 
					<h4 class="uk-h4 uk-margin-small-bottom team_name">James Smith</h4>
					<div class="uk-margin-bottom team_position">Founder & CEO</div>
					<div class="uk-margin-bottom team_description">Lorem ipsum dolor sit amet, consectetur ducimus</div>
					<ul class="uk-list social_list">
						<li class="social_list_item">
							<a class="uk-icon-facebook social_list_item_link" href="#"></a>
						</li>
						<li class="social_list_item">
							<a class="uk-icon-twitter social_list_item_link" href="#"></a>
						</li>
						<li class="social_list_item">
							<a class="uk-icon-google-plus social_list_item_link" href="#"></a>
						</li>
						<li class="social_list_item">
							<a class="uk-icon-linkedin social_list_item_link" href="#"></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="uk-width-large-1-4 uk-width-medium-1-2 animated">
				<div class="uk-position-relative uk-margin-large-bottom team_block"> 
					<h4 class="uk-h4 uk-margin-small-bottom team_name">Elizabeth Johnson</h4>
					<div class="uk-margin-bottom team_position">Creative director</div>
					<div class="uk-margin-bottom team_description">Lorem ipsum dolor sit amet, consectetur ducimus</div>
					<ul class="uk-list social_list">
						<li class="social_list_item">
							<a class="uk-icon-facebook social_list_item_link" href="#"></a>
						</li>
						<li class="social_list_item">
							<a class="uk-icon-youtube social_list_item_link" href="#"></a>
						</li>
						<li class="social_list_item">
							<a class="uk-icon-skype social_list_item_link" href="#"></a>
						</li>
						<li class="social_list_item">
							<a class="uk-icon-linkedin social_list_item_link" href="#"></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="uk-width-large-1-4 uk-width-medium-1-2 animated">
				<div class="uk-position-relative uk-margin-large-bottom team_block">
					<h4 class="uk-h4 uk-margin-small-bottom team_name">Robert Williams</h4>
					<div class="uk-margin-bottom team_position">Web developer</div>
					<div class="uk-margin-bottom team_description">Lorem ipsum dolor sit amet, consectetur ducimus</div>
					<ul class="uk-list social_list">
						<li class="social_list_item">
							<a class="uk-icon-facebook social_list_item_link" href="#"></a>
						</li>
						<li class="social_list_item">
							<a class="uk-icon-twitter social_list_item_link" href="#"></a>
						</li>
						<li class="social_list_item">
							<a class="uk-icon-pinterest social_list_item_link" href="#"></a>
						</li>
						<li class="social_list_item">
							<a class="uk-icon-linkedin social_list_item_link" href="#"></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="uk-width-large-1-4 uk-width-medium-1-2 animated">
				<div class="uk-position-relative uk-margin-large-bottom team_block">
					<h4 class="uk-h4 uk-margin-small-bottom team_name">Jennifer Jones</h4>
					<div class="uk-margin-bottom team_position">Web designer</div>
					<div class="uk-margin-bottom team_description">Lorem ipsum dolor sit amet, consectetur ducimus</div>
					<ul class="uk-list social_list">
						<li class="social_list_item">
							<a class="uk-icon-facebook social_list_item_link" href="#"></a>
						</li>
						<li class="social_list_item">
							<a class="uk-icon-behance social_list_item_link" href="#"></a>
						</li>
						<li class="social_list_item">
							<a class="uk-icon-instagram social_list_item_link" href="#"></a>
						</li>
						<li class="social_list_item">
							<a class="uk-icon-linkedin social_list_item_link" href="#"></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="video_preview grey_overlay section">
	<div class="uk-container uk-container-center uk-text-center uk-position-relative" data-uk-scrollspy="{cls:'uk-active'}">
		<h3 class="uk-h3 uk-text-contrast animated section_title team_title">Video presentation</h3>
		<h4 class="uk-h4 uk-text-contrast uk-margin-large-bottom animated section_subtitle">We offer a wide range of business services including data analysis and reporting</h4>
		<a class="uk-border-circle uk-icon-play animated video_button" href="https://www.youtube.com/embed/m_lOQe2y4ug?ecver=2" data-uk-lightbox="{group:'group1'}" data-lightbox-type="iframe"></a>
	</div>
</section>

<section class="reviews section">
	<div class="uk-container uk-container-center uk-text-center" data-uk-scrollspy="{cls:'uk-active'}">
		<h3 class="uk-h3 animated section_title reviews_title">Our customers</h3>
		<h4 class="uk-h4 uk-margin-large-bottom animated section_subtitle">We've helped customers all around the world create beautifully effective websites</h4>
		<div class="uk-slidenav-position uk-align-center uk-margin-large-bottom animated reviews_slider" data-uk-slider>
			<div class="uk-slider-container">
				<ul class="uk-slider reviews_list">
					<li class="reviews_list_item">
						<div class="uk-position-relative reviews_message">Sed ut perspic iatis unde omnis iste natus error sit volup tatem accusa ntium dolore mque eaque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore perpicab.</div>
						<div class="reviews_info">
							<img class="uk-margin-small-bottom reviews_image"  alt="">
							<div class="reviews_description">
								<div class="reviews_name">Kenneth Lewis</div>
								<div class="reviews_position">Founder and CEO</div>
							</div>
						</div>
					</li>
					<li class="reviews_list_item">
						<div class="uk-position-relative reviews_message">Sed ut perspic iatis unde omnis iste natus error sit volup tatem accusa ntium dolore mque eaque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore perpicab.</div>
						<div class="reviews_info">
							<img class="uk-margin-small-bottom reviews_image"  alt="">
							<div class="reviews_description">
								<div class="reviews_name">Kimberly Davis</div>
								<div class="reviews_position">Marketing manager</div>
							</div>
						</div>
					</li>
					<li class="reviews_list_item">
						<div class="uk-position-relative reviews_message">Sed ut perspic iatis unde omnis iste natus error sit volup tatem accusa ntium dolore mque eaque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore perpicab.</div>
						<div class="reviews_info">
							<img class="uk-margin-small-bottom reviews_image"  alt="">
							<div class="reviews_description">
								<div class="reviews_name">Carl Walker</div>
								<div class="reviews_position">PR Manager</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous uk-border-circle reviews_slider_arrow_left" data-uk-slider-item="previous" draggable="false"></a>
			<a href="#" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next uk-border-circle reviews_slider_arrow_right" data-uk-slider-item="next" draggable="false"></a>
		</div>
	</div>
</section>

<section class="promo sepia_overlay section">
	<div class="uk-position-relative uk-container uk-container-center uk-text-center" data-uk-scrollspy="{cls:'uk-active'}">
		<h3 class="uk-h3 uk-text-contrast animated section_title promo_title">Perfect for any kind of presentation</h3>
		<h4 class="uk-h4 uk-text-contrast animated section_subtitle promo_text">Lets build something beautiful together and make it work for you</h4>
		<div data-ng-click="scrollTop()" class="uk-button uk-button-large button_custom_green uk-border-rounded uk-margin-top animated promo_button">Purchase now</div>
	</div>
</section>

<section class="contact grey_overlay section">
	<div class="uk-container uk-container-center uk-text-center" data-uk-scrollspy="{cls:'uk-active'}">
		<h3 class="uk-h3 uk-position-relative uk-text-contrast animated section_title contact_title">Get in touch</h3>
		<h4 class="uk-h4 uk-text-contrast uk-margin-large-bottom animated section_subtitle">If you have any questions, then please fill our contact form to get actual information about our project</h4>

		<form data-ng-submit="elasticForm($event);" class="uk-form animated form_send_message" autocomplete="off">
			<div class="uk-grid uk-grid-small uk-container-center uk-width-medium-2-3 uk-width-large-1-2 uk-margin-bottom">
				<div class="uk-width-small-1-2 uk-margin-bottom">
					<input name="name" class="uk-width-1-1 uk-text-contrast form_input" type="text" placeholder="Name">
				</div>
				<div class="uk-width-small-1-2 uk-margin-bottom">
					<input name="email" class="uk-width-1-1 uk-text-contrast form_input" type="text" placeholder="E-mail">
				</div>
				<div class="uk-margin-bottom uk-width-1-1">
					<textarea name="message" class="uk-width-1-1 uk-text-contrast form_textarea" placeholder="Message"></textarea>
				</div>
				<div class="uk-margin-bottom uk-width-1-1">
					<button class="uk-button button_custom_green uk-width-1-1 form_button" type="submit">Send message</button>
				</div>
			</div>

			<div class="success">Your message has been sent successfully.</div>
			<div class="success_response"></div>

			<div class="error">E-mail must be valid and message must be longer than 1 character.</div>
			<div class="error_response"></div>
		</form>
	</div>
</section>

<section class="address section">
	<div class="uk-container uk-container-center uk-text-center" data-uk-scrollspy="{cls:'uk-active'}">
		<h3 class="uk-h3 animated section_title address_title">Contacts</h3>
		<h4 class="uk-h4 animated uk-margin-large-bottom section_subtitle">If you require any further information, feel free to contact us</h4>
		<div class="uk-grid uk-grid-large address_wrapper">
			<div class="uk-width-medium-1-3 animated">
				<div class="uk-margin-large-bottom address_item">
					<div class="uk-icon-map-marker address_label"></div>
					<h4 class="address_title">Office location</h4>
					<div class="address_text">7901 W 79th St, <br>Playa Del Rey, CA 90293</div>
				</div>
			</div>
			<div class="uk-width-medium-1-3 animated">
				<div class="uk-margin-large-bottom address_item">
					<div class="uk-icon-phone address_label"></div>
					<h4 class="address_title">Call us</h4>
					<div class="address_text">t. 1-234-567-890<br>m. 1-234-567-891</div>
				</div>
			</div>
			<div class="uk-width-medium-1-3 animated">
				<div class="uk-margin-large-bottom address_item">
					<div class="uk-icon-envelope-o address_label"></div>
					<h4 class="address_title">Email address</h4>
					<div class="address_text">info@yoursite.com<br>support@yoursite.com</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="map" id="map">
</div>

<footer class="footer">
	<div class="uk-container uk-container-center uk-text-center">
		<ul class="uk-list social_list">
			<li class="social_list_item">
				<a class="uk-icon-facebook social_list_item_link" href="#"></a>
			</li>
			<li class="social_list_item">
				<a class="uk-icon-twitter social_list_item_link" href="#"></a>
			</li>
			<li class="social_list_item">
				<a class="uk-icon-google-plus social_list_item_link" href="#"></a>
			</li>
			<li class="social_list_item">
				<a class="uk-icon-linkedin social_list_item_link" href="#"></a>
			</li>
			<li class="social_list_item">
				<a class="uk-icon-pinterest social_list_item_link" href="#"></a>
			</li>
			<li class="social_list_item">
				<a class="uk-icon-dribbble social_list_item_link" href="#"></a>
			</li>
			<li class="social_list_item">
				<a class="uk-icon-youtube social_list_item_link" href="#"></a>
			</li>
		</ul>
		<div class="footer_message">© 2020 Startup. All Rights Reserved</div>
	</div>
</footer>

<div data-ng-click="scrollTop()" class="scroll_top"></div>

</div>

<div id="mobile_nav" class="uk-offcanvas">
	<div class="uk-offcanvas-bar uk-offcanvas-bar-flip">
		<ul class="uk-nav uk-nav-offcanvas">
			<li class="">
				<a data-ng-click="scrollNav($event)" class="link_features" href="#">Features</a>
			</li>
			<li class="">
				<a data-ng-click="scrollNav($event)" class="link_offer" href="#">Offer</a>
			</li>
			<li class="">
				<a data-ng-click="scrollNav($event)" class="link_pricing" href="#">Pricing</a>
			</li>
			<li class="">
				<a data-ng-click="scrollNav($event)" class="link_clients" href="#">Clients</a>
			</li>
			<li class="">
				<a data-ng-click="scrollNav($event)" class="link_facts" href="#">Facts</a>
			</li>
			<li class="">
				<a data-ng-click="scrollNav($event)" class="link_projects" href="#">Projects</a>
			</li>
			<li class="">
				<a data-ng-click="scrollNav($event)" class="link_team" href="#">Team</a>
			</li>
			<li class="">
				<a data-ng-click="scrollNav($event)" class="link_customers" href="#">Customers</a>
			</li>
		</ul>
	</div>
</div>

<div id="modal_subscribe" class="uk-modal subscribe_window">
    <div class="uk-modal-dialog uk-text-center uk-border-rounded">
		<h4 class="uk-h4 uk-text-contrast subscribe_window_title">Subscribe to our newsletter</h4>

		<form data-ng-submit="mailchimpForm" class="uk-form form_sign_in" autocomplete="off">
			<div class="uk-grid uk-grid-collapse uk-container-center uk-width-medium-3-4">
				<div class="uk-width-medium-3-4 uk-margin-bottom">
					<input name="email" class="uk-width-1-1 uk-text-contrast form_input" type="email" placeholder="Enter your e-mail">
				</div>
				<div class="uk-width-medium-1-4 uk-margin-bottom">
					<button class="uk-width-1-1 uk-button button_custom_green form_button" type="submit">Subscribe</button>
				</div>
			</div>
			<div class="response_wrapper">

				<div class="success">E-mail has been added successfully.</div>
				<div class="success_response"></div>

				<div class="error">E-mail must be valid and message must be longer than 1 character.</div>
				<div class="error_response"></div>
			</div>
		</form>
        <a class="uk-modal-close uk-close uk-border-circle subscribe_window_close"></a>
    </div>
</div>



<script type="text/javascript" src="js/angular.min.js"></script>
<script type="text/javascript" src="js/ngTouch.min.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBj7cR7j4zbZLwiKDV35BJ6VSASioV0n_8"></script>
<script type="text/javascript" src="js/uikit.min.js"></script>
<script type="text/javascript" src="js/slideshow.min.js"></script>
<script type="text/javascript" src="js/slideshow-fx.min.js"></script>
<script type="text/javascript" src="js/slider.min.js"></script>
<script type="text/javascript" src="js/lightbox.min.js"></script>
<script type="text/javascript" src="js/countUp.js"></script>
<script type="text/javascript" src="js/jquery.ajaxchimp.min.js"></script>
<script type="text/javascript" src="js/rainyday.min.js"></script>
<script type="text/javascript" src="js/scripts.ang.js"></script>

<script type="text/javascript">
	function scrollDiv(idTujuan){
	    $('html, body').animate({
	        scrollTop: $("#"+idTujuan).offset().top
	    }, 2000);	
	}
</script>

<script type="text/javascript">
	setTimeout(() => {
        $(".spinnerLogo").fadeIn(200)
	},200);

	$(document).ready(function(){

    setTimeout(() => {
        $("#spinner").fadeOut(500,
        function() {
            $("#spinner").remove();
      });
    }, 1000);

	  
	});
</script>

</body>

<!-- Mirrored from digitalentertainment85.eu5.org/agency/demo/index_background_rainy.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Dec 2020 12:56:37 GMT -->
</html>