<!-- Footer start -->
    <footer class="irs-footer-field" style="background: black;">
        <div class="container">
            <div class="row">
				<div  class="col-md-12">
					<div class="col-md-3">
						<div class="irs-footer-about">
							<!--<img class="irs-foooter-logo" src="images/footer-logo.png" alt="">-->
							<h3 style="color: white;"> About Us</h3>
							<p style=" font-size:16px;" >REIMAGINING and REDEFINING skills development in India.Sunshine is a skill development and training organisation.
</p>							
						   <div style="margin-top:40px;" class="irs-social">
								<a href="#"><i style="padding:5px;margin:7px;font-size: 25px; background: #2884C6; color:white;border-radius: 50%;" class="icofont icofont-social-facebook"></i></a>
								<a href="#"><i style="padding:5px;margin:7px;font-size: 25px; background: #FEC931; color:white;border-radius: 50%;" class="icofont icofont-social-twitter"></i></a>
								<a href="#"><i style="padding:5px;margin:7px;font-size: 25px; background: #FF4328; color:white;border-radius: 50%;" class="icofont icofont-social-vimeo"></i></a>
								<a href="#"><i  style="padding:5px;margin:7px;font-size: 25px;background:  #212121; color:white;border-radius: 50%;"class="icofont icofont-brand-linkedin"></i></a>
							</div>
						</div>
					</div>
					  
						<div class="col-md-6">
							<div class="irs-footer-tweets animated zoomIn dealy-2s" >
								<img style="height:400px; width:auto; margin-right:40px; margin-left:20px;"src="images/footer3.jpg" alt="">
									
							</div>
						</div>
						<div class="col-md-3">
							<div class="irs-footer-contact">
								<h4 class="irs-footer-heading">Contact Us</h4>
								<!--<img src="images/footer.jpg" alt="">-->
								<div class="irs-mailbox">
                                   <p><i class="fa fa-phone" aria-hidden="true"></i> +91 9420655447</p>  
									<p style="font-size:15px;"><i class="zmdi zmdi-email"></i> Mail: sunshinebskills@gmail.com </p>
									<p><i class="zmdi zmdi-gps-dot"></i>Flat No.5 Parivartan Apartment Aundh-Hinjewadi road Vishal Nagar, Pune- 411027.
</p>
								</div>
							</div>
						</div>
				
				
				
				
				</div>
				<div style="margin-left:410px;"class="irs-copyright">
                        <p>Copyright© 2019. Design by <a href="http://fireflysoftech.com/">Firefly Softech</a>
                        </p>
                    </div>
			</div>
        </div>
    </footer>
    <!-- Footer end -->

   <!-- <section class="irs-copyright-field">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="irs-copyright">
                        <p>Copyright© 2019. Design by <a href="http://fireflysoftech.com/">Firefly Softech</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

     <!-- script start from here -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-dropdownhover.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
    <script type="text/javascript" src="js/isotope.js"></script>
    <script type="text/javascript" src="js/stellar.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.masonry.min.js"></script>
    <script type="text/javascript" src="js/css3-animate-it.js"></script>
    <script type="text/javascript" src="js/bootstrap-slider.js"></script>
    <script type="text/javascript" src="js/jquery.scrollUp.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>

    <!-- Custom script for all pages -->
    <script type="text/javascript" src="js/script.js"></script>

    <!-- Funfact START -->
    <script type="text/javascript">
        $(document).ready(function($) {
            $('.start-count').each(function() {
                var $this = $(this);
                $this.data('target', parseInt($this.html()));
                $this.data('counted', false);
                $this.html('0');
            });

            $(window).bind('scroll', function() {
                var speed = 3000;
                $('.start-count').each(function() {
                    var $this = $(this);
                    if (!$this.data('counted') && $(window).scrollTop() + $(window).height() >= $this.offset().top) {
                        $this.data('counted', true);
                        $this.animate({
                            dummy: 1
                        }, {
                            duration: speed,
                            step: function(now) {
                                var $this = $(this);
                                var val = Math.round($this.data('target') * now);
                                $this.html(val);
                                if (0 < $this.parent('.value').length) {
                                    $this.parent('.value').css('width', val + '%');
                                }
                            }
                        });
                    }
                });
            }).triggerHandler('scroll');
        });
    </script>

</body>


<!-- Mirrored from irsfoundation.com/tf/templates/EducationPark/index-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2019 10:54:49 GMT -->
</html>