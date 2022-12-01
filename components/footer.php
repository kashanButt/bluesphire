        <div id="footer">
            <div id="upperFooter">
                <div id="delivery">
                    <img src="./img/06.FooterWorldWideDeliveryIcon.jpg" alt="">
                    <h4>WORLDWIDE DELIVERY</h4>
                    <P>We ship to over 200 countries & regions.</P>
                </div>
                <div id="safePayment">
                    <img src="./img/07.FooterSafePaymentIcon.jpg" alt="">
                    <h4>SAFE PAYMENT</h4>
                    <P>Pay with the world’s most popular and secure payment methods.</P>
                </div>
                <div id="shopWithConfidence">
                    <img src="./img/09.FooterShopWithConfidenceIcon.jpg" alt="">
                    <h4>SHOP WITH CONFIDENCE</h4>
                    <P>Our Buyer Protection covers your purchase from click to delivery.</P>
                </div>
                <div id="HelpCenter">
                    <img src="./img/08.FooterHelpCenterIcon.jpg" alt="">
                    <h4>24/7 Help Center</h4>
                    <P>Round-the-clock assistance for a smooth shopping experience.</P>
                </div> 
            </div>    
            <div id="mainFooter">
                <div id="buyerCentral">
                    <h4>BUYER CENTRAL</h4>
                    <ul>
                        <li>Sign In</li>
                        <li>Buyer Protection</li>
                        <li>Payment Options</li>
                        <li>Shipping Policy</li>
                        <li>Return Policy</li>
                    </ul>
                </div>
                <div id="information">
                    <h4>INFORMATION</h4>
                    <ul>
                        <li>Merchant Central</li>
                        <li>Merchant Signin</li>
                        <li>Merchant Registration</li>
                        <li>How Does It Work</li>
                        <li>Pricing</li>
                    </ul>
                </div>
                <div id="help">
                    <h4>HELP</h4>
                    <ul>
                        <li>See all Help</li>
                        <li>My Account</li>
                        <li>FAQs</li>
                        <li>Other Services</li>
                        <li>Shop Box</li>
                    </ul>
                </div>
                <div id="stayConnected">
                    <h4>STAY CONNECTED</h4>
                    <p>bluesphirellc@gmail.com</p>
                    <p>786-7499820</p>
                    <i class="fa-brands fa-facebook-f"></i>
                    <i class="fa-brands fa-twitter"></i>
                    <i class="fa-brands fa-instagram"></i>
                </div>
            </div>
            <div id="copyright">
                <p>© 2022 BlueSphire Supermarket & Retail store. All rights Reserved</p>
            </div>
        </div>
    </div><!-- container end -->
    <!-- script -->
    <script src="http://localhost/projects/bluesphire/js/slider.js"></script>
    <script src="http://localhost/projects/bluesphire/js/model.js"></script>

    <!-- <script src="https://bluesphire.net/js/slider.js"></script>
    <script src="https://bluesphire.net/js/model.js"></script> -->
    <!-- script -->

    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jQuery -->

    <!-- Carousel -->
    <script src="http://localhost/projects/bluesphire/js/revslider.js"></script>

    <!-- <script src="https://bluesphire.net/js/revslider.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Carousel -->
    <script>
        $('.owl-carousel').owlCarousel({
            loop:true,
            margin:10,
            dots:false,
            autoplay:true,
            nav:false,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:5
                }
            }
        })
        jQuery(document).ready(function(){
            // $(".brand-logo").css("background","#8C1823");
            jQuery('#rev_slider_4').show().revolution({
                dottedOverlay: 'none',
                delay: 3000,
                startwidth: 1170,
	            startheight:500,

                hideThumbs: 200,
                thumbWidth: 200,
                thumbHeight: 50,
                thumbAmount: 2,

                navigationType: 'thumb',
                navigationArrows: 'solo',
                navigationStyle: 'round',

                touchenabled: 'on',
                onHoverStop: 'on',

                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,

                spinner: 'spinner0',
                keyboardNavigation: 'off',

                navigationHAlign: 'center',
                navigationVAlign: 'bottom',
                navigationHOffset: 0,
                navigationVOffset: 20,

                soloArrowLeftHalign: 'left',
                soloArrowLeftValign: 'center',
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,

                soloArrowRightHalign: 'right',
                soloArrowRightValign: 'center',
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,

                shadow: 0,
                fullWidth: 'on',
                fullScreen: 'off',

                stopLoop: 'off',
                stopAfterLoops: -1,
                stopAtSlide: -1,

                shuffle: 'off',

                autoHeight: 'off',
                forceFullWidth: 'on',
                fullScreenAlignForce: 'off',
                minFullScreenHeight: 0,
                hideNavDelayOnMobile: 1500,

                hideThumbsOnMobile: 'off',
                hideBulletsOnMobile: 'off',
                hideArrowsOnMobile: 'off',
                hideThumbsUnderResolution: 0,

                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ''
            });
        });
    </script>
    <!-- Owl Carousel -->

</body>
</html>