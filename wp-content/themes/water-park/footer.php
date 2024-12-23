<!-- Footer Start -->
<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="footer-item">
                    <a href="index.html" class="p-0">
                        <h4 class="text-white mb-4"><i class="fas fa-swimmer text-primary me-3"></i>WaterLand</h4>
                        <!-- <img src="img/logo.png" alt="Logo"> -->
                    </a>
                    <p class="mb-2">Dolor amet sit justo amet elitr clita ipsum elitr est.Lorem ipsum dolor sit amet, consectetur adipiscing...</p>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-map-marker-alt text-primary me-3"></i>
                        <p class="text-white mb-0"><?php the_field('address'); ?></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fas fa-envelope text-primary me-3"></i>
                        <p class="text-white mb-0"><?php the_field('email'); ?></p>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="fa fa-phone-alt text-primary me-3"></i>
                        <p class="text-white mb-0"><?php the_field('phone'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-2">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Quick Links</h4>
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-left',
                            'container' => 'div',
                            'container_class' => 'footer-item',
                            'menu_class' => 'footer-menu',
                            'before' => '<i class="fas fa-angle-right me-2"></i>',
                            'link_before' => '',
                            'link_after' => ''
                        ));
                    ?>
                </div>

            </div>
            <div class="col-md-6 col-lg-6 col-xl-2">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Support</h4>
                    <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-right',
                            'container' => 'div',
                            'container_class' => 'footer-item',
                            'menu_class' => 'footer-menu',
                            'before' => '<i class="fas fa-angle-right me-2"></i>',
                            'link_before' => '',
                            'link_after' => ''
                        ));
                    ?>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-4">
                <div class="footer-item">
                    <h4 class="text-white mb-4">Opening Hours</h4>
                    <div class="opening-date mb-3 pb-3">
                        <div class="opening-clock flex-shrink-0">
                            <h6 class="text-white mb-0 me-auto">Monday - Friday:</h6>
                            <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i> <?php the_field('monday_friday_time'); ?></p>
                        </div>
                        <div class="opening-clock flex-shrink-0">
                            <h6 class="text-white mb-0 me-auto">Satur - Sunday:</h6>
                            <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i> <?php the_field('saturday_sunday_time'); ?></p>
                        </div>
                        <div class="opening-clock flex-shrink-0">
                            <h6 class="text-white mb-0 me-auto">Holiday:</h6>
                            <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i> <?php the_field('holiday_time'); ?></p>
                        </div>
                    </div>
                    <div>
                        <p class="text-white mb-2">Payment Accepted</p>
                        <img src="<?php echo get_template_directory_uri() . '/img/payment.png' ?>" class="img-fluid" alt="Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<?php wp_footer(); ?>

<!-- Copyright Start -->
<div class="container-fluid copyright py-4">
    <div class="container">
        <div class="row g-4 align-items-center">
            <div class="col-md-6 text-center text-md-start mb-md-0">
                <span class="text-body"><a href="#" class="border-bottom text-white"><i class="fas fa-copyright text-light me-2"></i><?php echo get_bloginfo('name'); ?></a>, All right reserved.</span>
            </div>
            <div class="col-md-6 text-center text-md-end text-body">
                <!--/*** This template is free as long as you keep the below author’s credit link/attribution link/backlink. ***/-->
                <!--/*** If you'd like to use the template without the below author’s credit link/attribution link/backlink, ***/-->
                <!--/*** you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". ***/-->
                Designed By <a class="border-bottom text-white" href="https://htmlcodex.com">HTML Codex</a>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="/home" class="btn btn-primary btn-lg-square rounded-circle back-to-top"><i class="fa fa-arrow-up"></i></a>
</body>

</html>