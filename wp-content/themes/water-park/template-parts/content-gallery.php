<div class="container-fluid gallery pb-5">
    <div class="container pb-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
            <h4 class="text-primary"><?php the_field('gallery_subtitle'); ?></h4>
            <h2 class="display-5 mb-4"><?php the_field('gallery_title'); ?></h2>
            <p class="mb-0"><?php the_field('gallery_description'); ?></p>
        </div>
        <div class="row g-4">
            <?php echo do_shortcode('[metaslider id="161"]'); ?>
        </div>
    </div>
</div>