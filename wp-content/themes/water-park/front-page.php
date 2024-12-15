<?php get_header(); ?>

<!-- Carousel Start -->
<div class="header-banner">
    <div class="header-banner-item" style="background-image: url('<?php the_field('banner_image'); ?>');">
        <div class="banner-caption">
            <div class="container py-4">
                <div class="row g-5 align-items-center">
                    <div class="col-xl-7 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s" style="animation-delay: 1s;">
                        <div class="text-start">
                            <h4 class="text-primary text-uppercase fw-bold mb-4"><?php the_field('sub_title'); ?></h4>
                            <h1 class="display-4 text-uppercase text-white mb-4"><?php the_field('header_title'); ?></h1>
                            <p class="mb-4 fs-5"><?php the_field('header_description'); ?></p>
                            <div class="d-flex flex-shrink-0">
                                <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Our Packages</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 fadeInRight animated" data-animation="fadeInRight" data-delay="1s" style="animation-delay: 1s;">
                        <div class="ticket-form p-5">
                            <h2 class="text-dark text-uppercase mb-4">book your ticket</h2>

                            <?php echo do_shortcode('[contact-form-7 id="3b55137" title="Main contact form"]'); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Carousel End -->


<!-- Feature Start -->
<?php echo get_template_part('template-parts/content', 'feature'); ?>
<!-- Feature End -->

<!-- About Start -->
<div class="container-fluid about pb-5">
    <div class="container pb-5">
        <div class="row g-5">
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                <div>
                    <h4 class="text-primary">About Waterland</h4>
                    <h2 class="display-5 mb-4"><?php the_field('about_title'); ?></h2>
                    <p class="mb-5"><?php the_field('about_description'); ?></p>
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-3"><i class="fas fa-glass-cheers fa-3x text-primary"></i></div>
                                <div>
                                    <h4><?php the_field('about_service_1'); ?></h4>
                                    <p><?php the_field('about_service_descr_1'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-3"><i class="fas fa-dot-circle fa-3x text-primary"></i></div>
                                <div>
                                    <h4><?php the_field('about_service_2'); ?></h4>
                                    <p><?php the_field('about_service_descr_2'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-3"><i class="fas fa-hand-holding-usd fa-3x text-primary"></i></div>
                                <div>
                                    <h4><?php the_field('about_service_3'); ?></h4>
                                    <p><?php the_field('about_service_descr_3'); ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="d-flex">
                                <div class="me-3"><i class="fas fa-lock fa-3x text-primary"></i></div>
                                <div>
                                    <h4><?php the_field('about_service_4'); ?></h4>
                                    <p><?php the_field('about_service_descr_4'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="position-relative rounded">
                    <div class="rounded" style="margin-top: 40px;">
                        <div class="row g-0">
                            <div class="col-lg-12">
                                <div class="rounded mb-4">
                                    <img src="<?php the_field('about_image'); ?>" class="img-fluid rounded w-100" alt="">
                                </div>
                                <div class="row gx-4 gy-0">
                                    <div class="col-6">
                                        <div class="counter-item bg-primary rounded text-center p-4 h-100">
                                            <div class="counter-item-icon mx-auto mb-3">
                                                <i class="fas fa-thumbs-up fa-3x text-white"></i>
                                            </div>
                                            <div class="counter-counting mb-3">
                                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up"><?php the_field('happy_visitors'); ?></span>
                                                <span class="h1 fw-bold text-white">k +</span>
                                            </div>
                                            <h5 class="text-white mb-0">Happy Visitors</h5>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="counter-item bg-dark rounded text-center p-4 h-100">
                                            <div class="counter-item-icon mx-auto mb-3">
                                                <i class="fas fa-certificate fa-3x text-white"></i>
                                            </div>
                                            <div class="counter-counting mb-3">
                                                <span class="text-white fs-2 fw-bold" data-toggle="counter-up"><?php the_field('awwards_winning'); ?></span>
                                                <span class="h1 fw-bold text-white"> +</span>
                                            </div>
                                            <h5 class="text-white mb-0">Awwards Winning</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="rounded bg-primary p-4 position-absolute d-flex justify-content-center" style="width: 90%; height: 80px; top: -40px; left: 50%; transform: translateX(-50%);">
                        <h3 class="mb-0 text-white"><?php the_field('about_image_caption'); ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Service Start -->
<?php echo get_template_part('template-parts/content', 'service'); ?>
<!-- Service End -->


<!-- Ticket Packages Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                <div class="packages-item h-100">
                    <h4 class="text-primary"><?php the_field('ticket_packages_subtitle'); ?></h4>
                    <h1 class="display-5 mb-4"><?php the_field('ticket_packages_title'); ?></h1>
                    <p class="mb-4"><?php the_field('ticket_packages_description'); ?></p>
                    <?php the_field('ticket_packages_list'); ?>
                    <a href="#" class="btn btn-primary rounded-pill py-3 px-5"> Book Now</a>
                </div>
            </div>
            <?php
            global $post;

            $query = new WP_Query([
                'posts_per_page' => 2,
                'post_type'      => 'ticket_packages'
            ]);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $per_whom = get_post_meta(get_the_ID(), 'per_whom', true);
                    $price = get_post_meta(get_the_ID(), 'price', true);
                    $description = get_post_meta(get_the_ID(), 'description', true);
            ?>
                    <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="pricing-item bg-dark rounded text-center p-5 h-100">
                            <div class="pb-4 border-bottom">
                                <h2 class="mb-4 text-primary"><?php the_title(); ?></h2>
                                <p class="mb-4"><?php echo $description; ?></p>
                                <h2 class="mb-0 text-primary"><?php echo $price; ?><span class="text-body fs-5 fw-normal"><?php echo $per_whom; ?></span></h2>
                            </div>
                            <div class="py-4">
                                <?php the_content(); ?>
                            </div>
                            <a href="#" class="btn btn-light rounded-pill py-3 px-5"> Book Now</a>
                        </div>
                    </div>
            <?php
                }
            } else {
                // Постов не найдено
            }

            wp_reset_postdata(); // Сбрасываем $post
            ?>

        </div>
    </div>
</div>
<!-- Ticket Packages End -->


<!-- Attractions Start -->
<div class="container-fluid attractions py-5">
    <div class="container attractions-section py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?php the_field('attractions_subtitle'); ?></h4>
            <h1 class="display-5 text-white mb-4"><?php the_field('attractions_title'); ?></h1>
            <p class="text-white mb-0"><?php the_field('attractions_description'); ?></p>
        </div>
        <div class="owl-carousel attractions-carousel wow fadeInUp" data-wow-delay="0.1s">
            <?php
            global $post;

            $query = new WP_Query([
                'posts_per_page' => 10,
                'post_type'      => 'attractions'
            ]);

            if ($query->have_posts()) {
                $delay = 0.2;
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="attractions-item wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid rounded w-100" alt="">
                        <a href="#" class="attractions-name"><?php the_title(); ?></a>
                    </div>
            <?php
                    $delay += 0.2;
                }
            } else {
            }

            wp_reset_postdata();
            ?>

        </div>
    </div>
</div>
<!-- Attractions End -->

<!-- Gallery Start -->
<?php echo get_template_part('template-parts/content', 'gallery'); ?>
<!-- Gallery End -->


<!-- Team Start -->
<?php echo get_template_part('template-parts/content', 'team'); ?>
<!-- Team End -->


<!-- Testimonial Start -->
<?php echo get_template_part('template-parts/content', 'testimonials'); ?>
<!-- Testimonial End -->

<?php get_footer(); ?>