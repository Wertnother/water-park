<!-- Feature Start -->
<div class="container-fluid feature py-5">
    <div class="container py-5">
        <div class="row g-4">
            <?php
            global $post;

            $query = new WP_Query([
                'posts_per_page' => 3,
                'post_type'      => 'feature'
            ]);

            if ($query->have_posts()) {
                $delay = 0.2;
                while ($query->have_posts()) {
                    $query->the_post();
            ?>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                        <div class="feature-item">
                            <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid rounded w-100" alt="Image">
                            <div class="feature-content p-4">
                                <div class="feature-content-inner">
                                    <h4 class="text-white"><?php the_title(); ?></h4>
                                    <p class="text-white"><?php echo get_the_excerpt(); ?></p>
                                    <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fa fa-arrow-right ms-1"></i></a>
                                </div>
                            </div>

                        </div>
                    </div>
            <?php
                    $delay += 0.2;
                }
            } else {
                // Постов не найдено
            }

            wp_reset_postdata(); // Сбрасываем $post
            ?>

        </div>
    </div>
</div>
<!-- Feature End -->