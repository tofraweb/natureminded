
    <!--=== Footer Version 1 ===-->
    <div class="footer-v1" style="margin-top:50px">
        <div class="footer">
            <div class="container">
                <div class="row">
                    <!-- About -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <a href="<?php bloginfo( 'url' ); ?>"><img id="logo-footer" class="footer-logo" src="<?php echo get_template_directory_uri();?>/img/tevabarosh_logo_transparent.png" alt=""></a>
                        <p>לורם איפסום דולור סיט אמט, קונסקטורר אדיפיסינג אלית קולורס מונפרד אדנדום סילקוף, מרגשי ומרגשח. עמחליף קוואזי במר מודוף. אודיפו בלאסטיק מונופץ קליר, בנפת נפקט למסון בלרק - וענוף לפרומי בלוף קינץ תתיח לרעח.</p>
                    </div><!--/col-md-3-->
                    <!-- End About -->

                    <!-- Latest -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="posts">
                            <div class="headline"><h2>מאמרים אחרונים</h2></div>
                            <ul class="list-unstyled latest-list">
                            	דךלגכח דשגךלכדג 
                            </ul>
                        </div>
                    </div><!--/col-md-3-->
                    <!-- End Latest -->

                    <!-- Link List -->
                    <div class="col-md-3 md-margin-bottom-40">
                        <div class="headline"><h2>קישורים שימושיים</h2></div>
                        <ul class="list-unstyled link-list">
                            <li><a href="#">על עצמינו</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">פורטפוליו</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">מנויים</a><i class="fa fa-angle-right"></i></li>
                            <li><a href="#">צור קשר</a><i class="fa fa-angle-right"></i></li>
                        </ul>
                    </div><!--/col-md-3-->
                    <!-- End Link List -->

                    <!-- Address -->
                    <div class="col-md-3 map-img md-margin-bottom-40">
                        <div class="headline"><h2>צור קשר</h2></div>
                        <address class="md-margin-bottom-40">
                            יצחק הלוי 9, חולון <br />
                            ישראל <br />
                            טל: 053-5203818 <br />
                            אימייל: <a href="mailto:info@tevabarosh.co.il" class="">natureminded@gmail.com</a>
                        </address>
                    </div><!--/col-md-3-->
                    <!-- End Address -->
                </div>
            </div>
        </div><!--/footer-->

        <!-- Social Links -->
        <div class="col-md-6">
            <ul class="footer-socials list-inline"  style="text-align:right; margin-right:170px" >
                <li>
                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest">
                        <i class="fa fa-pinterest"></i>
                    </a>
                </li>
                <li>
                    <a href="#" class="tooltips" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- End Social Links -->
        <div class="copyright"  style="text-align:left">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            2017 &copy; כל הזכויות שמורות.
                          <a href="http://tofraweb.com/">TofraWeb</a>  Developed by
                        </p>
                    </div>

                </div>
            </div>
        </div><!--/copyright-->
    </div>
    <!--=== End Footer Version 1 ===-->
</div><!--/wrapper-->


<?php wp_footer(); ?>

<script>
    jQuery(document).ready(function() {
        App.init();
        OwlCarousel.initOwlCarousel();
        StyleSwitcher.initStyleSwitcher();
        ParallaxSlider.initParallaxSlider();
        OwlRecentWorks.initOwlRecentWorksV1();
    });
</script>

</body>
</html>
