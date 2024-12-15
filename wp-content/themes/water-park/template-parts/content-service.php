<div class="container-fluid service py-5">
    <div class="container service-section py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?php the_field('service_subtitle'); ?></h4>
            <h2 class="display-5 text-white mb-4"><?php the_field('service_title'); ?></h2>
            <p class="mb-0 text-white"><?php the_field('service_description'); ?></p>
        </div>
        <div class="row g-4">
            <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>
            <div class="col-md-10 col-lg-8 col-xl-8 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-days p-4">
                    <div class="py-2 border-bottom border-top d-flex align-items-center justify-content-between flex-wrap">
                        <h4 class="mb-0 pb-2 pb-sm-0">Monday - Friday</h4>
                        <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i><?php the_field('monday_friday_time'); ?></p>
                    </div>
                    <div class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap">
                        <h4 class="mb-0 pb-2 pb-sm-0">Saturday - Sunday</h4>
                        <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i><?php the_field('saturday_sunday_time'); ?></p>
                    </div>
                    <div class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap">
                        <h4 class="mb-0">Holiday</h4>
                        <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i><?php the_field('holiday_time'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>

            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                <div class="service-item p-4">
                    <div class="service-content">
                        <div class="mb-4">
                            <i class="fas fa-home fa-4x"></i>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3"><?php the_field('service_1'); ?></a>
                        <p class="mb-0"><?php the_field('service_description_1'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                <div class="service-item p-4">
                    <div class="service-content">
                        <div class="mb-4">
                            <i class="fas fa-utensils fa-4x"></i>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3"><?php the_field('service_2'); ?></a>
                        <p class="mb-0"><?php the_field('service_description_2'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                <div class="service-item p-4">
                    <div class="service-content">
                        <div class="mb-4">
                            <i class="fas fa-door-closed fa-4x"></i>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3"><?php the_field('service_3'); ?></a>
                        <p class="mb-0"><?php the_field('service_description_3'); ?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                <div class="service-item p-4">
                    <div class="service-content">
                        <div class="mb-4">
                            <i class="fas fa-swimming-pool fa-4x"></i>
                        </div>
                        <a href="#" class="h4 d-inline-block mb-3"><?php the_field('service_4'); ?></a>
                        <p class="mb-0"><?php the_field('service_description_4'); ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>