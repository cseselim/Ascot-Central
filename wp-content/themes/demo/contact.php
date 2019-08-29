<?php 
	/*Template Name: contact */
 ?>

 <?php get_header(); ?>
<section id="page-header" class="pagetop">
	<div class="container-fluid">
		<div class="row">
			<h1>Get In Touch</h1>
		</div>
	</div>
</section>

<section id="contact_area">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="contact-address">
					<ul>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/tel_icon.png" alt=""> <span>+64 9 520 9361<span></span></span></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/faxicon.png" alt=""> <span>+64 9 520 9362</span></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/mail_icon.png" alt=""><span>info@ascotwomensclinic.co.nz</span></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/postalreal.png" alt=""><span>PO Box 128142 Remuera, Auckland 1541</span></li>
						<li><img src="<?php echo get_template_directory_uri(); ?>/images/mailicon.png" alt=""><span>EDI awclinic</span></li>
					</ul>
				</div>
			</div>
			<div class="col-md-6">
				<h2 class="send">Send Us a Message</h2>
				<?php echo do_shortcode('[contact-form-7 id="53" title="Contact form 1"]'); ?>
			</div>
		</div>
	</div>
</section>


<section id="page-header">
	<div class="container-fluid">
		<div class="row">
			<h1>How to find Us</h1>
		</div>
	</div>
</section>
<section id="address_area">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>How to find Us | Contact Us</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 center">
				<h5>Address</h5>
				<p>
					Ascot Central Women’s Clinic<br>
					Level 1, Ascot Central <br>
					7 Ellerslie Racecourse Drive<br>
					Remuera 1051, Auckland
				</p>
			</div>
			<div class="col-md-6 text-center center">
				<img src="<?php echo get_template_directory_uri(); ?>/images/conp.png">
			</div>
			<div class="col-md-3 last center">
				<h5>Contact</h5>
				<p>
					Phone: +64 9 520 9361<br>
					Fax: +64 9 520 9362<br>
					info@ascotwomensclinic.co.nz<br>
					www.ascotwomensclinic.co.nz
				</p>
			</div>
		</div>
		<div class="row">
			<div class="map-intro">
				<div class="map-intro-content">
					<h3>GoogleMap</h3>
					<p><img src="<?php echo get_template_directory_uri(); ?>/images/go-map.png" alt=""></p>
				</div>
			</div>
		</div>	
	</div>
</section>

<section id="map_area">
	<div class="container">
		<div class="row text-center">
			<div class="col-md-6">
				<div class="map-pic"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3191.0982456761744!2d174.79731991588082!3d-36.88799788940998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6d0d48f6a702d137%3A0xc03075c2ce5804bf!2sAscot+Central+Level+1%2FEllerslie+Racecourse+Dr%2C+Remuera%2C+Auckland+1051%2C+New+Zealand!5e0!3m2!1sen!2sbd!4v1564844376000!5m2!1sen!2sbd" frameborder="0" allowfullscreen=""></iframe></div>
			</div>
			<div class="col-md-6">
				<div class="map-pic">
					<img src="<?php echo get_template_directory_uri(); ?>/images/map2.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>


<section id="parking">
	<div class="container">
		<div class="row text-center">

			<div class="parkicon">
				<div class="park-content"><img src="<?php echo get_template_directory_uri(); ?>/images/parmap.png" alt="">
				<h3>Parking Map</h3>
				</div>	
			</div>

			<div class="col-md-12">
				<h2 class="mb-3">Parking</h2>
				<p><strong>Directions coming from the North on SH1:</strong>
					Take exit 433 for Green Lane E, at the roundabout, take the 1st exit onto
					Green Lane E, turn right onto Ellerslie Racecourse Dr and go straight at the roundabout to enter main parking area.
				</p>

				<p><strong>Directions coming from the North on SH1:</strong>
					Take exit 433 for Green Lane E, at the roundabout, take the 1st exit onto
					Green Lane E, turn right onto Ellerslie Racecourse Dr and go straight at the roundabout to enter main parking area.
				</p>
			</div>
		</div>
	</div>
</section>
 <?php get_footer(); ?>