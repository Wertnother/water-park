<div class="container-fluid team pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?php the_field('team_subtitle'); ?></h4>
            <h2 class="display-5 mb-4"><?php the_field('team_title'); ?></h2>
            <p class="mb-0"><?php the_field('team_description'); ?></p>
        </div>
        <div class="row g-4 justify-content-center">
            <?php
            global $post;

            $query = new WP_Query([
                'posts_per_page' => 6,
                'post_type'      => 'team'
            ]);

            if ($query->have_posts()) {
                $delay = 0.2;
                while ($query->have_posts()) {
                    $query->the_post();
                    $profession = get_post_meta(get_the_ID(), 'profession', true);
                    $facebook = get_post_meta(get_the_ID(), 'facebook', true);
                    $linked_in = get_post_meta(get_the_ID(), 'linked-in', true);
                    $instagram = get_post_meta(get_the_ID(), 'instagram', true);
                    $twitter = get_post_meta(get_the_ID(), 'twitter', true);
            ?>
                    <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="<?php echo $delay; ?>s">
                        <div class="team-item p-4">
                            <div class="team-content">
                                <div class="d-flex justify-content-between border-bottom pb-4">
                                    <div class="text-start">
                                        <h4 class="mb-0"><?php the_title(); ?></h4>
                                        <p class="mb-0"><?php echo $profession; ?></p>
                                    </div>
                                    <div>
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img-fluid rounded" style="width: 100px; height: 100px;" alt="">
                                    </div>
                                </div>
                                <div class="team-icon rounded-pill my-4 p-3">
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="<?php echo $facebook; ?>"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="<?php echo $twitter; ?>"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-3" href="<?php echo $linked_in; ?>"><i class="fab fa-linkedin-in"></i></a>
                                    <a class="btn btn-primary btn-sm-square rounded-circle me-0" href="<?php echo $in; ?>"><i class="fab fa-instagram"></i></a>
                                </div>
                                <p class="text-center mb-0"><?php the_excerpt(); ?></p>
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