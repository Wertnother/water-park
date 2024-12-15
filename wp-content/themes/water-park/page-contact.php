<?php get_header(); ?>

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact Us</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="/home">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-primary">Contact</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->

<!-- Contact Start -->
<div class="container-fluid contact py-5">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-12 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                <div>
                    <div class="pb-5">
                        <h4 class="text-primary"><?php the_field('contact_subtitle'); ?></h4>
                        <p class="mb-0"><?php the_field('contact_description'); ?><a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                    </div>
                    <div class="row g-4">
                        <div class="col-lg-6">
                            <div class="contact-add-item rounded bg-light p-4">
                                <div class="contact-icon text-primary mb-4">
                                    <i class="fas fa-map-marker-alt fa-2x"></i>
                                </div>
                                <div>
                                    <h4><?php the_field('address_title'); ?></h4>
                                    <p class="mb-0"><?php the_field('address'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-add-item rounded bg-light p-4">
                                <div class="contact-icon text-primary mb-4">
                                    <i class="fas fa-envelope fa-2x"></i>
                                </div>
                                <div>
                                    <h4><?php the_field('email_title'); ?></h4>
                                    <p class="mb-0"><?php the_field('email'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-add-item rounded bg-light p-4">
                                <div class="contact-icon text-primary mb-4">
                                    <i class="fa fa-phone-alt fa-2x"></i>
                                </div>
                                <div>
                                    <h4><?php the_field('phone_title'); ?></h4>
                                    <p class="mb-0"><?php the_field('phone'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="contact-add-item rounded bg-light p-4">
                                <div class="contact-icon text-primary mb-4">
                                    <i class="fab fa-firefox-browser fa-2x"></i>
                                </div>
                                <div>
                                    <h4><?php the_field('email'); ?></h4>
                                    <p class="mb-0"><?php the_field('phone'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-flex justify-content-around bg-light rounded p-4">
                                <a class="btn btn-xl-square btn-primary rounded-circle" href="<?php the_field('facebook_link'); ?>"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-xl-square btn-primary rounded-circle" href="<?php the_field('twitter_link'); ?>"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-xl-square btn-primary rounded-circle" href="<?php the_field('instagram_link'); ?>"><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-xl-square btn-primary rounded-circle" href="<?php the_field('linkedin_link'); ?>"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="bg-light p-5 rounded h-100">
                    <h4 class="text-primary mb-4">Send Your Message</h4>
                    <?php echo do_shortcode('[contact-form-7 id="2fddc74" title="Contact form"]'); ?>
                </div>
            </div>
            <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                <div class="rounded">
                    <iframe class="rounded w-100"
                        style="height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387191.33750346623!2d-73.97968099999999!3d40.6974881!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1694259649153!5m2!1sen!2sbd"
                        loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<?php get_footer(); ?>