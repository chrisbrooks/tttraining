<?php /* Template Name: Homepage */
get_header();
the_post();
?>

<div id="page">
	<header class="header hidden-xs hidden-sm">
		<nav class="navigation">
			<ul>
				<li class="current"><a href="#home"><?php echo rwmb_meta('wedding_link_0'); ?></a></li>
				<li><a href="#<?php echo rwmb_meta('wedding_link_1'); ?>"><?php echo rwmb_meta('wedding_link_1'); ?></a></li>
				<li><a href="#<?php echo rwmb_meta('wedding_link_2'); ?>"><?php echo rwmb_meta('wedding_link_2'); ?></a></li>
				<li><a href="#<?php echo rwmb_meta('wedding_link_3'); ?>"><?php echo rwmb_meta('wedding_link_3'); ?></a></li>
				<li><a href="#<?php echo rwmb_meta('wedding_link_4'); ?>"><?php echo rwmb_meta('wedding_link_4'); ?></a></li>
				<li><a href="#<?php echo rwmb_meta('wedding_link_5'); ?>"><?php echo rwmb_meta('wedding_link_5'); ?></a></li>
				<li><a href="#<?php echo rwmb_meta('wedding_link_6'); ?>"><?php echo rwmb_meta('wedding_link_6'); ?></a></li>
				<li><a href="#<?php echo rwmb_meta('wedding_link_7'); ?>"><?php echo rwmb_meta('wedding_link_7'); ?></a></li>
			</ul>
		</nav>
	</header>

	<header class="hidden-md hidden-lg mobile-header">
		<nav class="mobile-navigation" id="mobile-navigation">
			<ul>
				<li class="mm-selected"><a href="#home">Home</a></li>
				<li><a href="#<?php echo rwmb_meta('wedding_link_1'); ?>"><?php echo rwmb_meta('wedding_link_1'); ?></a></li>
				<li><a href="#<?php echo rwmb_meta('wedding_link_2'); ?>"><?php echo rwmb_meta('wedding_link_2'); ?></a></li>
				<li><a href="#<?php echo rwmb_meta('wedding_link_3'); ?>"><?php echo rwmb_meta('wedding_link_3'); ?></a></li>
				<li><a href="#<?php echo rwmb_meta('wedding_link_4'); ?>"><?php echo rwmb_meta('wedding_link_4'); ?></a></li>
				<li><a href="#<?php echo rwmb_meta('wedding_link_5'); ?>"><?php echo rwmb_meta('wedding_link_5'); ?></a></li>
				<li><a href="#<?php echo rwmb_meta('wedding_link_6'); ?>"><?php echo rwmb_meta('wedding_link_6'); ?></a></li>
				<li><a href="#<?php echo rwmb_meta('wedding_link_7'); ?>"><?php echo rwmb_meta('wedding_link_7'); ?></a></li>
			</ul>
		</nav>
		<a href="#mobile-navigation" class="hidden-md hidden-lg hamburger"><span></span></a>
	</header>

	<div class="dots">
		<ul class="dot-navigation">
			<li class="current"><a href="#home"></a></li>
			<li><a href="#<?php echo rwmb_meta('wedding_link_1'); ?>"></a></li>
			<li><a href="#<?php echo rwmb_meta('wedding_link_2'); ?>"></a></li>
			<li><a href="#<?php echo rwmb_meta('wedding_link_3'); ?>"></a></li>
			<li><a href="#<?php echo rwmb_meta('wedding_link_4'); ?>"></a></li>
			<li><a href="#<?php echo rwmb_meta('wedding_link_5'); ?>"></a></li>
			<li><a href="#<?php echo rwmb_meta('wedding_link_6'); ?>"></a></li>
			<li><a href="#<?php echo rwmb_meta('wedding_link_7'); ?>"></a></li>

		</ul>
	</div>
	<section class="home" id="home" style="background: url('<?php echo wp_get_attachment_url(rwmb_meta('wedding_banner')); ?>') center;">
		<div class="container">
			<img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" />
		</div>
	</section>
	<section class="section accomodation" id="<?php echo rwmb_meta('wedding_link_1'); ?>" style="background:<?php echo rwmb_meta('wedding_background'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1">
					<h2 class="text-center title"><?php echo rwmb_meta('wedding_accomodation_title'); ?></h2>
					<p class="col-xs-12 col-sm-10 col-sm-offset-1 main-content"><?php echo rwmb_meta('wedding_content'); ?></p>
					<?for ($i=1; $i <= 3; $i++) {
						?>
						<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0 flipper-container">
							<div class="flipper">
								<div class="front"><p><?php echo rwmb_meta('wedding_hotel'.$i.'_title'); ?></p></div>
								<div class="back">
									<p class="hotel-name"><?php echo rwmb_meta('wedding_hotel'.$i.'_title'); ?></p>
									<p><?php echo rwmb_meta('wedding_address'.$i.'_line_1'); ?></p>
									<p><?php echo rwmb_meta('wedding_town/city'.$i.''); ?></p>
									<p><?php echo rwmb_meta('wedding_postcode'.$i.''); ?></p>
									<p class="hotel-number"><?php echo rwmb_meta('wedding_number'.$i.''); ?></p>
									<p class="hotel-amount"><?php echo rwmb_meta('wedding_cost'.$i.''); ?></p>
									<a href="http://goo.gl/DehzPr" target="_blank"><?php echo rwmb_meta('wedding_url'.$i.''); ?></a>
								</div>
							</div>
						</div>
						<?
					}?>
				</div>
			</div>
		</div>
	</section>
	<section class="section schedule" id="<?php echo rwmb_meta('wedding_link_2'); ?>" style="background-attachment: fixed !important;background-size: cover !important;background: url('<?php echo wp_get_attachment_url(rwmb_meta('wedding__schedule_background')); ?>') center;">
		<div class="container">
			<?for ($i=1; $i <= 6; $i++) {
				?>
				<div class="row event-container <?php echo rwmb_meta('wedding_schedule'.$i.'_colour'); ?>">
					<div class="timeline<?if($i==1) echo ' first'; ?><?if($i==6) echo ' last'; ?>"></div>
					<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-12 col-md-offset-0 col-lg-10 col-lg-offset-1">
						<?if($i%2==1){
							?>
							<div class="col-xs-12 col-md-2 col-md-push-5">
								<div class="time-container">
									<p class="time"><?php echo rwmb_meta('wedding_schedule'.$i.'_time'); ?></p>
								</div>
							</div>
							<div class="col-xs-12 col-md-5 col-md-pull-2">
								<div class="event">
									<div class="info">
										<h2><?php echo rwmb_meta('wedding_schedule'.$i.'_title'); ?></h2>
										<p><?php echo rwmb_meta('wedding_schedule'.$i.'_content'); ?></p>
									</div>
									<div class="icon <?if($i%2==0) echo ' right'; ?>" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/icons/<?php echo rwmb_meta('wedding_schedule'.$i.'_icon'); ?>.png);"></div>
								</div>
							</div>
							<div class="col-xs-12 col-md-5"></div>
							<?
						} else {
							?>
							<div class="col-xs-12 col-sm-5"></div>
							<div class="col-xs-12 col-md-2">
								<div class="time-container">
									<p class="time"><?php echo rwmb_meta('wedding_schedule'.$i.'_time'); ?></p>
								</div>
							</div>
							<div class="col-xs-12 col-md-5">
								<div class="event">
									<div class="icon right" style="background-image: url(<?php echo get_template_directory_uri(); ?>/images/icons/<?php echo rwmb_meta('wedding_schedule'.$i.'_icon'); ?>.png);"></div>
									<div class="info">
										<h2><?php echo rwmb_meta('wedding_schedule'.$i.'_title'); ?></h2>
										<p><?php echo rwmb_meta('wedding_schedule'.$i.'_content'); ?></p>
									</div>
								</div>
							</div>
							<?
						}?>
					</div>
				</div>
				<?
			}?>
		</div>
	</section>
	<section class="section rsvp" id="<?php echo rwmb_meta('wedding_link_3'); ?>" style="background:<?php echo rwmb_meta('wedding_rsvp_background'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-6 col-md-offset-3 col-lg-4 col-lg-offset-4 text-center">
					<h2 class="text-center title"><?php echo rwmb_meta('wedding_rsvp_title'); ?></h2>
					<?php echo rwmb_meta('wedding_rsvp_content'); ?>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="section gifts" id="<?php echo rwmb_meta('wedding_link_4'); ?>" style="background:<?php echo rwmb_meta('wedding_gifts_background'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center">
					<h2 class="text-center title"><?php echo rwmb_meta('wedding_gifts_title'); ?></h2>
					<?php echo rwmb_meta('wedding_gifts_content'); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="section instagram-section" id="<?php echo rwmb_meta('wedding_link_5'); ?>" style="background:<?php echo rwmb_meta('wedding_instagram_background'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-lg-8 col-lg-offset-2 text-center">
					<h2 class="text-center title"><?php echo rwmb_meta('wedding_instagram_title'); ?></h2>
					<?php echo rwmb_meta('wedding_instagram_content'); ?>
				</div>
			</div>
		</div>
	</section>
	<section class="instagram-container" style="background:<?php echo rwmb_meta('wedding_instagram_background'); ?>">
		<div class="container">
			<div class="col-xs-12">
				<div class="instagram"></div>
			</div>
		</div>
	</section>
	<section class="section taxi" id="<?php echo rwmb_meta('wedding_link_6'); ?>" style="background:<?php echo rwmb_meta('wedding_taxi_background'); ?>">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-10 col-sm-offset-1">
					<h2 class="text-center title"><?php echo rwmb_meta('wedding_taxi_title'); ?></h2>
					<div class="col-xs-12 col-sm-10 col-sm-offset-1 main-content"><?php echo rwmb_meta('wedding_taxi_content'); ?></div>
					<?for ($i=1; $i <= 3; $i++) {
						?>
						<div class="col-xs-12 col-sm-10 col-sm-offset-1 col-md-4 col-md-offset-0 flipper-container">
							<div class="flipper">
								<div class="front"><p><?php echo rwmb_meta('wedding_taxi'.$i.'_title'); ?></p></div>
								<div class="back">
									<div class="back-content">
										<p class="hotel-name"><?php echo rwmb_meta('wedding_taxi'.$i.'_title'); ?></p>
										<p><?php echo rwmb_meta('wedding_taxi_number'.$i.''); ?></p>
										<a href="<?php echo rwmb_meta('wedding_taxi_url'.$i.''); ?>" target="_blank"><?php echo rwmb_meta('wedding_taxi_url'.$i.''); ?></a>
									</div>
								</div>
							</div>
						</div>
						<?
					}?>
				</div>
			</div>
		</div>
	</section>
	<section class="section map-container directions" id="<?php echo rwmb_meta('wedding_link_7'); ?>">
		<div id="map-canvas"></div>
	</section>

</div>

<?php get_footer(); ?>