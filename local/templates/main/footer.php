<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die(); ?>
</div>
</section>


<footer id="footer" class="grey_section">
    <div class="container">
        <div class="row">

            <div class="col-md-3 col-sm-6 to_animate">
                <div class="widget widget_flickr">
                    <h3 class="widget-title">Flickr Widget</h3>
                    <ul id="flickr"></ul>
                </div>
            </div>

            <div class="col-md-3 col-sm-6 to_animate">

                <div class="widget widget_twitter">
                    <h3 class="widget-title">Twitter Widget</h3>
                    <div class="twitter">
                        <p>rnfgmkaoseijrufnmdkg,oldkgkmdlg kfrmd,lpf ksfmlg,sdg nm,</p>
                    </div>
                </div>

            </div>



            <div class="col-md-3 col-sm-6 to_animate">
                <div class="widget widget_mailchimp">
                    <h3 class="widget-title">Subscribe</h3>
                    <p>Please, subscribe to our latest news to be updated.</p>
                    <form id="signup" action="/" method="get" class="form-inline">
                        <div class="form-group">
                            <input name="email" id="mailchimp_email" type="email" class="form-control" placeholder="your@email.com">
                        </div>
                        <button type="submit" class="theme_button">Send</button>
                        <div id="response"></div>
                    </form>
                </div>

            </div>


            <div class="col-md-3 col-sm-6 to_animate">
                <div class="widget widget_text">
                    <h3 class="widget-title">Company Info</h3>
                    <p>Voluptate maxime tenetur, aliquam illo nihil perferendis sapiente, accusamus.</p>
                    <p>Adipisci numquam nesciunt cumque eos, officiis inventore quaerat.</p>
                    <p>
                        <a class="socialico-facebook" href="#" title="Facebook" data-toggle="tooltip">#</a>
                        <a class="socialico-twitter" href="#" title="Twitter" data-toggle="tooltip">#</a>
                        <a class="socialico-google" href="#" title="Google" data-toggle="tooltip">#</a>
                    </p>
                </div>
            </div>




        </div>
    </div>
</footer>


<section id="copyright" class="light_section">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <p>&copy; Copyright <?php echo date(Y); ?> - <strong>Web&Sign</strong>
            </div>

        </div>
    </div>
</section>


</div><!-- eof #box_wrapper -->

<div class="preloader">
    <div class="preloader_image"></div>
</div>


<!-- libraries -->
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery-1.11.1.min.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/bootstrap.min.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery.appear.js", true);?>

<!-- superfish menu  -->
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery.hoverIntent.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/superfish.js", true);?>

<!-- page scrolling -->
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery.easing.1.3.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery.nicescroll.min.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery.ui.totop.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery.localscroll-min.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery.scrollTo-min.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery.parallax-1.1.3.js", true);?>


<!-- widgets -->
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery.easypiechart.min.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery.countTo.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery.prettyPhoto.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery.plugin.min.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery.countdown.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery.elevateZoom-3.0.8.min.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jflickrfeed.min.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/twitter/jquery.tweet.min.js", true);?>

<!-- sliders, filters, carousels -->
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery.isotope.min.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/owl.carousel.min.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery.fractionslider.min.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery.flexslider-min.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/vendor/jquery.bxslider.min.js", true);?>

<!-- custom scripts -->
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/plugins.js", true);?>
<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/main.js", true);?>


</body>
</html>