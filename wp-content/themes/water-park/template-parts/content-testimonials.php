<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?php the_field('testimonials_subtitle'); ?></h4>
            <h1 class="display-5 text-white mb-4"><?php the_field('testimonials_title'); ?></h1>
            <p class="text-white mb-0"><?php the_field('testimonials_description'); ?></p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
            <?php
            global $post;

            $query = new WP_Query([
                'posts_per_page' => 6,
                'post_type'      => 'testimonials'
            ]);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="testimonial-item p-4">
                        <p class="text-white fs-4 mb-4"><?php echo get_the_excerpt(); ?></p>
                        <div class="testimonial-inner">
                            <div class="testimonial-img">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid" alt="Image">
                                <div class="testimonial-quote btn-lg-square rounded-circle"><i class="fa fa-quote-right fa-2x"></i>
                                </div>
                            </div>
                            <div class="ms-4">
                                <h4><?php the_title(); ?></h4>
                                <p class="text-start text-white">Profession</p>
                                <div class="d-flex text-primary">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star text-white"></i>
                                </div>
                            </div>
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