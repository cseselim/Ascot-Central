<?php $options = get_option( 'startup_options' ); ?>
<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-12 col-md-3 center">
				<h5>Address</h5>
				<p>
					Ascot Central Women’s Clinic<br>
					Level 1, Ascot Central <br>
					7 Ellerslie Racecourse Drive<br>
					Remuera 1051, Auckland
				</p>
			</div>
			<div class="col-12 col-sm-12 col-md-3 last center">
				<h5>Contact</h5>
				<p>
					Phone: +64 9 520 9361<br>
					Fax: +64 9 520 9362<br>
					info@ascotwomensclinic.co.nz<br>
					www.ascotwomensclinic.co.nz
				</p>
			</div>
			<div class="col-md-1"></div>
			<div class="col-md-5">
				<div class="row">
					<div class="col-12 col-sm-6 col-md-6 col-lg-6 center1">
						<img src="<?php echo get_template_directory_uri(); ?>/images/footer.jpg">
					</div>
					<div class="col-12 col-sm-6 col-md-6 col-lg-6 center1">
						<p>
							Ascot Central Women’s Clinic is an
							Affiliated Provider to Southern Cross
							Health Society for selected services
						</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row copyright">
			<div class="col-12 col-sm-8 col-md-8 col-lg-8 center1">
				<p>Copyright© 2019. Ascot Central Women's Clinic. All rights reserved.</p>
			</div>
			<div class="col-12 col-sm-4 col-md-4 col-lg-4 right center1">
				<img src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.png">
			</div>
		</div>
	</div>
</footer>
</div>
<?php wp_footer(); ?>
<script>
	jQuery(function(){
		/*jQuery('.slicknav_nav').slicknav();*/
		jQuery('#mobile_menu a').click(function(){
			jQuery(".slicknav_nav").slideToggle();
		});

	});

jQuery(document).ready(function() {
	// get current URL path and assign 'active' class
	jQuery('.menu-navigation-basic a').click(function(){	
	var pathname = window.location.pathname;
	jQuery('.menu-navigation-basic > a[href="'+pathname+'"]').parent().addClass('active');
	})
})


 jQuery(function () {
    var url = window.location.pathname,
        urlRegExp = new RegExp(url.replace(/\/$/, '') + "$");
    jQuery('.menu-navigation-basic a').each(function () {
        if (urlRegExp.test(this.href.replace(/\/$/, ''))) {
            jQuery(this).addClass('active');
            jQuery(this).parent().previoussibling().find('a').removeClass('active');
        }
    });    
});


/*jQuery(".menu-navigation-basic a").click(function (e) {
  e.preventDefault();
  jQuery(this).siblings().removeClass("active").end().addClass("active");

});
*/
</script>
</body>
</html>