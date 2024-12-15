<div class="container-fluid blog py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?php the_field('blog_subtitle'); ?></h4>
            <h1 class="display-5 mb-4"><?php the_field('blog_title'); ?></h1>
            <p class="mb-0"><?php the_field('blog_description'); ?></p>
        </div>
        
        <div class="row g-4">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="blog-item">
                        <div class="blog-img">
                            <a href="#">
                                <img src="<?php the_post_thumbnail_url( 'medium' ); ?>" class="img-fluid w-100 rounded-top" alt="Image">
                            </a>
                            <div class="blog-category py-2 px-4"><?php the_author(); ?></div>
                            <div class="blog-date"><i class="fas fa-clock me-2"></i><?php the_time('j F Y'); ?></div>
                        </div>
                        <div class="blog-content p-4">
                            <a href="#" class="h4 d-inline-block mb-4"><?php the_title(); ?></a>
                            <p class="mb-4"><?php the_excerpt(); ?>
                            </p>
                            <a href="#" class="btn btn-primary rounded-pill py-2 px-4">Read More <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            <?php endwhile;
        else: ?>
            No posts.
        <?php endif; ?>
        </div>
    </div>
</div>